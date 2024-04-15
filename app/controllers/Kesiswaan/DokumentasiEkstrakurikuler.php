<?php

class dokumentasiEkstrakurikuler extends Controller
{
    private $model_name = "Kesiswaan";
  
    public function index()
    {
        $data['judul'] = 'Dokumentasi Ekstrakurikuler';
        $data['dokum'] = $this->model("$this->model_name", 'DokumentasiEkstra_model')->getMaxId();
        $data['isi'] = $this->model("$this->model_name", 'DokumentasiEkstra_model')->getAllIsi();
        $data['galeri'] = $this->model("$this->model_name", 'DokumentasiEkstra_model')->getAllDokum();

        $data['user'] = $this->user;

        $this->view('templates-user/header', $data);
        $this->view('kesiswaan/dokumentasi', $data);
        $this->view('templates-user/footer', $data);
    }
    
}
