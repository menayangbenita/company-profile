<?php

class ManajemenHumas extends Controller
{
    public $model_name = "Manajemen";

    public function index()
    {
        $data['judul'] = 'Waka Humas';
        $data['logo'] = $this->model("$this->model_name", 'Humas_model')->getAllIndustri();
        $data['galeri'] = $this->model("$this->model_name", 'Humas_model')->getAllDokum();
        $data['user'] = $this->user; 

        if ($data['user']) {
            $this->view('templates-admin/header', $data);
        $this->view('admin/manajemen/humas', $data);
        $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }

    public function tambah()
    {
        if ($this->model("$this->model_name", 'Humas_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'ManajemenHumas');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'ManajemenWakaHumas');
            exit;
        }
    }

    public function tambahIndustri()
    {
        if ($this->model("$this->model_name", 'Humas_model')->tambahDataIndustri($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'ManajemenHumas');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'ManajemenHumas');
            exit;
        }
    }

    public function tambahGaleri()
    {
        if ($this->model("$this->model_name", 'Humas_model')->tambahDataGaleri($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'ManajemenHumas');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'ManajemenHumas');
            exit;
        }
    }
    
    public function hapusIndus($id)
    {
        if ($this->model("$this->model_name", 'Humas_model')->hapusDataIndus($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'ManajemenHumas');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'ManajemenHumas');
            exit;
        }
    }
    
    public function hapusGaleri($id)
    {
        if ($this->model("$this->model_name", 'Humas_model')->hapusDataGaleri($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'ManajemenHumas');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'ManajemenHumas');
            exit;
        }
    }

    public function getUbahIndus()
    {
        echo json_encode($this->model("$this->model_name", 'Humas_model')->getDataById($_POST['id']));
    }

    public function ubahIndus()
    {
        if ($this->model("$this->model_name", 'Humas_model')->ubahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Diubah', 'success');
            header('Location: ' . BASEURL . 'ManajemenHumas');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Diubah', 'danger');
            header('Location: ' . BASEURL . 'WakaHumas');
            exit;
        }
    }
}
