<?php

class BkkIndustriPasangan extends Controller
{
    private $model_name = "Bkk";
    public function index()
    {
        $data['judul'] = 'Industri Pasangan';
        $data['user'] = $this->user; 
        $data['Industri'] = $this->model("$this->model_name", 'IndustriPasangan_model')->getAllData();


        if ($data['user']) {
            $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/industriPasangan', $data);
        $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }
    public function tambah()
    {
        if ($this->model("$this->model_name", 'IndustriPasangan_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . '/BkkindustriPasangan');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . '/BkkindustriPasangan');
            exit;
        }
    }
}
