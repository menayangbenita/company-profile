<?php

use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Path;
use Ramsey\Uuid\Uuid;

class BeritaAdiwiyata_model
{
    private $table = 'berita_adiwiyata'; 
    private $fields = [
        'judul',
        'author',
        'isi',
        'tanggal_publikasi'
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

    public function getAllNews()
    {
        $this->db->query("SELECT * FROM {$this->table} ORDER BY tanggal_publikasi DESC");
        return $this->db->fetchAll(); 
    }


    public function getAllExistData()
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE status = 1");
        return $this->db->fetchAll();
    }

    public function getAllDeletedData()
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE status = 0");
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
    
    public function getLatestNews()
    {
        $this->db->query("SELECT * FROM {$this->table} ORDER BY tanggal_publikasi DESC LIMIT 5");
        return $this->db->fetchAll(); 
    }

    public function getLatesttNews()
    {
        $this->db->query("SELECT * FROM {$this->table} ORDER BY tanggal_publikasi DESC LIMIT 4");
        return $this->db->fetchAll(); 
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
        if ($_FILES["foto"]["size"] > 100000000000) {
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
            (null, :judul, :author, :isi, :foto, :tanggal_publikasi)"
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
        // Validasi apakah file foto diunggah
        if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] === 4) {
            $foto = $data['fotoLama'];
        } else {
            $foto = $this->uploadImage();
        }
    
        // Query update data
        $this->db->query(
            "UPDATE {$this->table}
                SET 
                judul = :judul,
                author = :author,
                isi = :isi,
                foto = :foto,
                tanggal_publikasi = :tanggal_publikasi
            WHERE id = :id"
        );
    
        // Bind parameter dan eksekusi query
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('author', $data['author']);
        $this->db->bind('isi', $data['isi']);
        $this->db->bind('foto', $foto);
        $this->db->bind('tanggal_publikasi', $data['tanggal_publikasi']);
        $this->db->bind('id', $data['id']);
    
        $this->db->execute();
        return $this->db->rowCount();
    }    
    

    public function getJmlData()
    {
        $this->db->query("SELECT COUNT(*) AS count FROM {$this->table} WHERE status = 1");
        return $this->db->fetch();
    }
}