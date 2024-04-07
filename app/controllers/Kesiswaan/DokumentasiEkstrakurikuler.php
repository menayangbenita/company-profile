<?php

class dokumentasiEkstrakurikuler extends Controller
{
    private $model_name = "Kesiswaan";

    public function index()
    {
        $data['judul'] = 'Dokumentasi Ekstrakurikuler';
        $data['DokumEkstra'] = $this->model("$this->model_name", 'DokumentasiEkstra_model')->getMaxId();


        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('kesiswaan/dokumentasi', $data);
        $this->view('templates-user/footer', $data);
    }
}
