<?php

use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Path;
use Ramsey\Uuid\Uuid;

class Galeri_model
{
    private $table = 'galeri'; 
    private $tablee = 'kategori_galeri'; 
    private $fields = [
        'kategori',
        'keterangan'
    ];

    private $user;
    private $db;

    public function __construct()
    {
        $this->db = new Database(DB_NAME); 
        // $this->user = Cookie::get_jwt()->name;
    }

    public function getAllData()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->fetchAll();
    }

    public function getAllKategori()
    {
        $this->db->query("SELECT * FROM {$this->tablee}");
        return $this->db->fetchAll();
    }

    public function getAllTerdahulu()
    {
        $this->db->query("SELECT * FROM {$this->tablee}");
        return $this->db->fetchAll();
    }

    public function getAllExistData()
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE `status` = 1");
        return $this->db->fetchAll();
    }

    public function getAllDeletedData()
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE `status` = 0");
        return $this->db->fetchAll();
    }

    public function getDataById($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id = :id"); // : = menghindari sql injection
        $this->db->bind("id", $id);
        return $this->db->fetch();
    }

    public function getDataByIdKategori($id)
    {
        $this->db->query("SELECT * FROM {$this->tablee} WHERE id = :id"); // : = menghindari sql injection
        $this->db->bind("id", $id);
        return $this->db->fetch();
    }

    public function getMaxId()
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id = (SELECT MAX(id) FROM {$this->table})");
        return $this->db->fetch(); 
    }

    public function uploadImage()
    {
        $targetDir = 'img/datafoto/'; // direktori tempat menyimpan file upload
        $temp = $_FILES['gambar']['name'];
        $imageFileType = explode('.', $temp);
        $imageFileType = strtolower(end($imageFileType));

        // validasi ekstensi file
        // $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            exit;
        }

        $fileName = uniqid();
        $fileName .= '.';
        $fileName .= $imageFileType;
        $targetFile = $targetDir . $fileName; // nama file upload


        // validasi ukuran file
        if ($_FILES["gambar"]["size"] > 1000000000) {
            echo
            '
                <script>
                    alert("Ukuran File Terlalu Besar")
                </script>
            ';
            return false;
        }

        try {
            // simpan file upload ke direktori
            move_uploaded_file($_FILES['gambar']['tmp_name'], $targetFile);
        } catch (IOExceptionInterface $e) {
            echo $e->getMessage();
        }

        return $fileName;
    }

    public function tambahData($data)
    {
        $this->db->query(
            "INSERT INTO {$this->table}
                VALUES 
            (null, :kategori, :gambar, :keterangan)"
        );
        
        $foto = $this->uploadImage();
        if (!$foto) {
            return false;
        }

        $this->db->bind('gambar', $foto);
        foreach ($this->fields as $field) {
            $this->db->bind($field, $data[$field]);
        }

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahDataTerdahulu($data)
    {
        $this->db->query(
            "INSERT INTO {$this->tablee}
                VALUES 
            (null, :kategori)"
        );
        
        $this->db->bind('kategori', $data['kategori']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusData($id)
    {
        $query = "DELETE FROM {$this->table} 
                    WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataKategori($id)
    {
        $query = "DELETE FROM {$this->tablee} 
                    WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahData($data)
    {
        $query =    "UPDATE {$this->table}
                        SET 
                        gambar = :gambar,
                        kategori = :kategori,
                        keterangan = :keterangan
                    WHERE id = :id";

        $this->db->query($query);
        if ($_FILES["gambar"]["error"] === 4) {
            $foto =$data['fotoLama'];
        } else {
            $foto = $this->uploadImage();
        }
        $this->db->bind('gambar', $foto);

        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataKategori($data)
    {
        $query =    "UPDATE {$this->tablee}
                        SET 
                        kategori = :kategori
                    WHERE id = :id";

        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getJmlData()
    {
        $this->db->query("SELECT COUNT(*) AS count FROM {$this->table} WHERE `status` = 1");
        return $this->db->fetch();
    }
}
