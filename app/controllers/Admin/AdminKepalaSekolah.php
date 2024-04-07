<?php

class AdminKepalaSekolah extends Controller
{
    public $model_name = "Admin";

    public function index()
    {
        $data['judul'] = 'Kepala Sekolah';
        $data['kepsek'] = $this->model("$this->model_name", 'KepalaSekolah_model')->getAllTerdahulu();
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/kepalaSekolah', $data);
        $this->view('templates-admin/footer');
    }

    public function tambah()
    {
        if ($this->model("$this->model_name", 'KepalaSekolah_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminKepalaSekolah');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminKepalaSekolah');
            exit;
        }
    }

    public function terdahulu()
    {
        if ($this->model("$this->model_name", 'KepalaSekolah_model')->tambahDataTerdahulu($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminKepalaSekolah');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminKepalaSekolah');
            exit;
        }
    }

    
    public function hapus($id)
    {
        if ($this->model("$this->model_name", 'KepalaSekolah_model')->hapusData($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'AdminKepalaSekolah');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'AdminKepalaSekolah');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model("$this->model_name", 'KepalaSekolah_model')->getDataById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model("$this->model_name", 'KepalaSekolah_model')->ubahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Diubah', 'success');
            header('Location: ' . BASEURL . 'AdminKepalaSekolah');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Diubah', 'danger');
            header('Location: ' . BASEURL . 'AdminKepalaSekolah');
            exit;
        }
    }
}
