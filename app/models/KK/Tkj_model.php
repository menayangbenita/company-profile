<?php

use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Path;
use Ramsey\Uuid\Uuid;

class Tkj_model
{
    private $table = 'tkj'; 
    private $tablee = 'dpk_tkj'; 
    private $tableee = 'kk_tkj'; 
    private $fields = [
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

    public function getAllDpk()
    {
        $this->db->query("SELECT * FROM {$this->tablee}");
        return $this->db->fetchAll();
    }

    public function getAllKk()
    {
        $this->db->query("SELECT * FROM {$this->tableee}");
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

    public function getDataByDpk($id)
    {
        $this->db->query("SELECT * FROM {$this->tablee} WHERE id = :id"); // : = menghindari sql injection
        $this->db->bind("id", $id);
        return $this->db->fetch();
    }

    public function getDataByKk($id)
    {
        $this->db->query("SELECT * FROM {$this->tableee} WHERE id = :id"); // : = menghindari sql injection
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
        $targetDir = 'images/datafoto/'; // direktori tempat menyimpan file upload
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
            (null, :keterangan)"
        );

        $this->db->bind(':keterangan', $data['keterangan']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahDataDpk($data)
    {
        $this->db->query(
            "INSERT INTO {$this->tablee}
                VALUES 
            (null, :dpk)"
        );

        $this->db->bind(':dpk', $data['dpk']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahDataKk($data)
    {
        $this->db->query(
            "INSERT INTO {$this->tableee}
                VALUES 
            (null, :kk)"
        );

        $this->db->bind(':kk', $data['kk']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataDpk($id)
    {
        $query = "DELETE FROM {$this->tablee} 
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataKk($id)
    {
        $query = "DELETE FROM {$this->tableee} 
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataDpk($data)
    {
        $this->db->query(
            "UPDATE {$this->tablee}
                SET 
                dpk = :dpk
            WHERE id = :id"
        );

        $this->db->bind('dpk', $data['dpk']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataKk($data)
    {
        $this->db->query(
            "UPDATE {$this->tableee}
                SET 
                kk = :kk
            WHERE id = :id"
        );

        $this->db->bind('kk', $data['kk']);
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
