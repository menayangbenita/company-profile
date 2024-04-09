<?php

class ManajemenKesiswaan extends Controller
{
    public $model_name = "Manajemen";

    public function index()
    {
        $data['judul'] = 'Waka Kesiswaan';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/manajemen/kesiswaan', $data);
        $this->view('templates-admin/footer');
    }
    
    public function tambah()
    {
        if ($this->model("$this->model_name", 'Kesiswaan_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'ManajemenKesiswaan');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'ManajemenKesiswaan');
            exit;
        }
    }
}
