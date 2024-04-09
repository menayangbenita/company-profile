<?php

class AdminOrganisasi extends Controller
{
    public $model_name = "Kesiswaan";

    public function index()
    {
        $data['judul'] = 'Organisasi';
        $data['user'] = $this->user; 
        $data['organisasi'] = $this->model("$this->model_name", 'Organisasi_model')->getAllIsi();


        $this->view('templates-admin/header', $data);
        $this->view('admin/kesiswaan/organisasi', $data);
        $this->view('templates-admin/footer');
    }
    public function tambah()
    {
        if ($this->model("$this->model_name", 'Organisasi_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminOrganisasi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminOrganisasi');
            exit;
        }
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
}
