<?php

class BkkOrganisasi extends Controller
{
    public $model_name = "Bkk";

    public function index()
    {
        $data['judul'] = 'Struktur Organisasi BKK';
        $data['user'] = $this->user; 

        if ($data['user']) {
            $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/strukturOrganisasi', $data);
        $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }

    public function tambah()
    {
        if ($this->model("$this->model_name", 'Organisasi_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'BkkOrganisasi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'BkkOrganisasi');
            exit;
        }
    }
}
