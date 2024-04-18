<?php

class BeritaBaru extends Controller
{
    public $model_name = "Berita";

    public function index()
    {
        $data['judul'] = 'Berita Baru';
        $data['user'] = $this->user;
        $data['berita'] = $this->model("$this->model_name", 'Berita_model')->getAllData();
 

        $this->view('templates-admin/header', $data);
        $this->view('admin/beritaBaru', $data);
        $this->view('templates-admin/footer');
    }
    public function tambah()
    {
        if ($this->model("$this->model_name", 'Berita_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'BeritaBaru');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'BeritaBaru');
            exit;
        }
    }

}