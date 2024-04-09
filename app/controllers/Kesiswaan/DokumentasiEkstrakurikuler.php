<?php

class dokumentasiEkstrakurikuler extends Controller
{
    private $model_name = "Kesiswaan";
  
    public function index()
    {
        $data['judul'] = 'Dokumentasi Ekstrakurikuler';
        $data['dokum'] = $this->model("$this->model_name", 'DokumEkstra_model')->getAllData();
        $data['user'] = $this->user;

        $this->view('templates-user/header', $data);
        $this->view('kesiswaan/dokumentasi', $data);
        $this->view('templates-user/footer', $data);
    }
    
    public function tambah()
    {
        if ($this->model("$this->model_name", 'DokumEkstra_model')->tambahData($_POST) > 0) {
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
