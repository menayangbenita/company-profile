<?php

class ManajemenTu extends Controller
{
    public $model_name = "Manajemen";

    public function index()
    {
        $data['judul'] = 'Waka Tata Usaha';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/manajemen/tu', $data);
        $this->view('templates-admin/footer');
    }

    public function tambah()
    {
        if ($this->model("$this->model_name", 'Tu_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'ManajemenTu');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'WakaTu');
            exit;
        }
    }
}
