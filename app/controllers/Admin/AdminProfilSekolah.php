<?php

class AdminProfilSekolah extends Controller
{
    public $model_name = "Admin";

    public function index()
    {
        $data['judul'] = 'Profil Sekolah';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/profilSekolah', $data);
        $this->view('templates-admin/footer');
    }

    public function tambah()
    {
        if ($this->model("$this->model_name", 'ProfilSekolah_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminProfilSekolah');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminProfilSekolah');
            exit;
        }
    }
}
