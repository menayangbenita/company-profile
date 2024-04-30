<?php

class ManajemenSarpras extends Controller
{
    public $model_name = "Manajemen";

    public function index()
    {
        $data['judul'] = 'Waka Sarpras';
        $data['galeri'] = $this->model("$this->model_name", 'Sarpras_model')->getAllDokum();
        $data['sarpras'] = $this->model("$this->model_name", 'Sarpras_model')->getAllSarpras();
        $data['user'] = $this->user; 

        if ($data['user']) {
            $this->view('templates-admin/header', $data);
        $this->view('admin/manajemen/sarpras', $data);
        $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }

    public function tambah()
    {
        if ($this->model("$this->model_name", 'Sarpras_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'ManajemenSarpras');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'ManajemenSarpras');
            exit;
        }
    }

    public function tambahSarpras()
    {
        if ($this->model("$this->model_name", 'Sarpras_model')->tambahDataSarpras($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'ManajemenSarpras');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'ManajemenSarpras');
            exit;
        }
    }
    
    public function tambahGaleri()
    {
        if ($this->model("$this->model_name", 'Sarpras_model')->tambahDataGaleri($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'ManajemenSarpras');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'ManajemenSarpras');
            exit;
        }
    }

    public function hapusSarpras($id)
    {
        if ($this->model("$this->model_name", 'Sarpras_model')->hapusDataIndus($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'ManajemenSarpras');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'ManajemenSarpras');
            exit;
        }
    }
        
    public function hapusGaleri($id)
    {
        if ($this->model("$this->model_name", 'Sarpras_model')->hapusDataGaleri($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'ManajemenSarpras');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'ManajemenSarpras');
            exit;
        }
    }

    public function getUbahSarpras()
    {
        echo json_encode($this->model("$this->model_name", 'Sarpras_model')->getDataById($_POST['id']));
    }

    public function ubahSarpras()
    {
        if ($this->model("$this->model_name", 'Sarpras_model')->ubahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Diubah', 'success');
            header('Location: ' . BASEURL . 'ManajemenSarpras');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Diubah', 'danger');
            header('Location: ' . BASEURL . 'ManajamenSarpras');
            exit;
        }
    }
}
