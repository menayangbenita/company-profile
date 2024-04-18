<?php

class BkkDokumentasi extends Controller
{
    private $model_name = "bkk";

    public function index()
    {
        $data['judul'] = 'Dokumentasi BKK';
        $data['user'] = $this->user; 
        $data['dokumBKK'] = $this->model("$this->model_name", 'DokumentasiBkk_model')->getAllData();


        $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/dokumentasi', $data);
        $this->view('templates-admin/footer');
    }
    public function tambah()
    {
        if ($this->model("$this->model_name", 'DokumentasiBkk_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'Bkkdokumentasi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'Bkkdokumentasi');
            exit;
        }
    }
}
