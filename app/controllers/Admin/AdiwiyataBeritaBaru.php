<?php

class AdiwiyataBeritaBaru extends Controller
{
    public $model_name = "Adiwiyata";

    public function index()
    {
        $data['judul'] = 'Berita Baru Adiwiyata';
        $data['user'] = $this->user;
        $data['berita'] = $this->model("$this->model_name", 'BeritaAdiwiyata_model')->getAllData();


        if ($data['user']) {
            $this->view('templates-admin/header', $data);
            $this->view('admin/adiwiyata/BeritaAdiwiyataBaru', $data);
            $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }
    public function tambah()
    {
        if ($this->model("$this->model_name", 'BeritaAdiwiyata_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdiwiyataBeritaBaru');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdiwiyataBeritaBaru');
            exit;
        }
    }

}