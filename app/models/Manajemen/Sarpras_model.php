<?php

use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Path;
use Ramsey\Uuid\Uuid;

class Sarpras_model
{
    private $table = 'waka_sarpras'; 
    private $tablee = 'sarpras'; 
    private $tableee = 'galeri_sarpras'; 
    private $fields = [
        'nama',
        'isi'
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

    public function getAllSarpras()
    {
        $this->db->query("SELECT * FROM {$this->tablee}");
        return $this->db->fetchAll();
    }

    public function getAllDokum()
    {
        $this->db->query("SELECT * FROM {$this->tableee} ORDER BY id DESC LIMIT 10");
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
        $temp = $_FILES['foto']['name'];
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
        if ($_FILES["foto"]["size"] > 1000000000) {
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
            move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile);
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
            (null, :nama, :foto, :isi)"
        );
        
        $foto = $this->uploadImage();
        if (!$foto) {
            return false;
        }

        $this->db->bind('foto', $foto);
        foreach ($this->fields as $field) {
            $this->db->bind($field, $data[$field]);
        }

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahDataSarpras($data)
    {
        $this->db->query(
            "INSERT INTO {$this->tablee}
                VALUES 
            (null, :nama, :jumlah, :keterangan)"
        );

        $this->db->bind('nama',  $data['nama']);
        $this->db->bind('jumlah',  $data['jumlah']);
        $this->db->bind('keterangan',  $data['keterangan']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahDataGaleri($data)
    {
        $this->db->query(
            "INSERT INTO {$this->tableee}
                VALUES 
            (null, :foto)"
        );
        
        $foto = $this->uploadImage();
        if (!$foto) {
            return false;
        }

        $this->db->bind('foto', $foto);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataIndus($id)
    {
        $query = "DELETE FROM {$this->tablee} 
                    WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataGaleri($id)
    {
        $query = "DELETE FROM {$this->tableee} 
                    WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahData($data)
    {
        $this->db->query(
            "UPDATE {$this->tablee}
                SET 
                nama = :nama,
                jumlah = :jumlah,
                keterangan = :keterangan
            WHERE id = :id"
        );

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getJmlData()
    {
        $this->db->query("SELECT COUNT(*) AS jumlah FROM {$this->tablee}");
        return $this->db->fetch();
    }
}
