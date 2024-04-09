<?php

use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Path;
use Ramsey\Uuid\Uuid;

class Organisasi_model
{
    private $table = 'orgnisasi'; 
    private $tablee = 'organisasi_isi'; 
    private $fields = [
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

    public function getAllIsi()
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
        if ($_FILES["foto"]["size"] > 1000000) {
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
            (null, :isi, :foto)"
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

    public function tambahDataIsi($data)
    {
        $this->db->query(
            "INSERT INTO {$this->tablee}
                VALUES 
            (null, :isi)"
        );
        
        $this->db->bind('isi', $data['isi']);

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

    public function ubahData($data)
    {
        $data['user'] = "Admin";
        $this->db->query(
            "UPDATE {$this->table}
                SET 
                nama = :nama,
                dari = :dari,
                sampai = :sampai,
                keterangan = :keterangan
            WHERE id = :id"
        );

        $this->db->bind('dari', $data['dari']);
        $this->db->bind('sampai', $data['sampai']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('keterangan', $data['keterangan']);
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
