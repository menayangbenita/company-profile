<?php

class dokumentasiEkstrakurikuler extends Controller
{
    private $model_name = "Kesiswaan";
    public $model_namee = "Berita";

    public function index()
    {
        $data['judul'] = 'Dokumentasi Ekstrakurikuler';
        $data['dokum'] = $this->model("$this->model_name", 'DokumentasiEkstra_model')->getMaxId();
        $data['isi'] = $this->model("$this->model_name", 'DokumentasiEkstra_model')->getAllIsi();
        $data['galeri'] = $this->model("$this->model_name", 'DokumentasiEkstra_model')->getAllDokum();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('kesiswaan/dokumentasi', $data);
        $this->view('templates-user/footer', $data);
    }
    
}
