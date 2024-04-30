<?php

class BkkrekapitulasiMou extends Controller
{
    private $model_name = "Bkk";

    public function index()
    {
        $data['judul'] = 'Rekapitulasi MOU';
        $data['user'] = $this->user; 
        $data['RekapMou'] = $this->model("$this->model_name", 'RekapMou_model')->getAllData();


        if ($data['user']) {
            $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/rekapitulasiMou', $data);
        $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }
    public function tambah()
    {
        if ($this->model("$this->model_name", 'RekapMou_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . '/BkkrekapitulasiMOU');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . '/BkkrekapitulasiMOU');
            exit;
        }
    }
}

