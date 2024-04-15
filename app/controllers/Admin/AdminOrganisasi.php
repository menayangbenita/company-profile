<?php

class AdminOrganisasi extends Controller
{
    public $model_name = "Kesiswaan";

    public function index()
    {
        $data['judul'] = 'Organisasi';
        $data['isi'] = $this->model("$this->model_name", 'Organisasi_model')->getAllIsi();
        $data['galeri'] = $this->model("$this->model_name", 'Organisasi_model')->getAllDokum();
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/kesiswaan/organisasi', $data);
        $this->view('templates-admin/footer');
    }


    public function tambahIsi()
    {
        if ($this->model("$this->model_name", 'Organisasi_model')->tambahDataIsi($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminOrganisasi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminOrganisasi');
            exit;
        }
    }

    public function tambahGaleri()
    {
        if ($this->model("$this->model_name", 'Organisasi_model')->tambahDataGaleri($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminOrganisasi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminOrganisasi');
            exit;
        }
    }
    
    public function hapusIndus($id)
    {
        if ($this->model("$this->model_name", 'Organisasi_model')->hapusDataIndus($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'AdminOrganisasi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'AdminOrganisasi');
            exit;
        }
    }
    
    public function hapusGaleri($id)
    {
        if ($this->model("$this->model_name", 'Organisasi_model')->hapusDataGaleri($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'AdminOrganisasi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'AdminOrganisasi');
            exit;
        }
    }

    public function getUbahIndus()
    {
        echo json_encode($this->model("$this->model_name", 'Organisasi_model')->getDataById($_POST['id']));
    }

    public function ubahIndus()
    {
        if ($this->model("$this->model_name", 'Organisasi_model')->ubahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Diubah', 'success');
            header('Location: ' . BASEURL . 'AdminOrganisasi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Diubah', 'danger');
            header('Location: ' . BASEURL . 'AdminOrganisasi');
            exit;
        }
    }
}
