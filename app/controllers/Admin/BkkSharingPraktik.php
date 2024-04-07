<?php

class BkksharingPraktik extends Controller
{
    public $model_name = "Bkk";

    public function index()
    {
        $data['judul'] = 'Sharing Praktik Baik';
        $data['user'] = $this->user; 
        $data['Sharing'] = $this->model("$this->model_name", 'SharingPraktik_model')->getAllData();


        $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/sharingPraktikBaik', $data);
        $this->view('templates-admin/footer');
    }
    public function tambah()
    {
        if ($this->model("$this->model_name", 'SharingPraktik_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'BkksharingPraktik');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'BkksharingPraktik');
            exit;
        }
    }
}
