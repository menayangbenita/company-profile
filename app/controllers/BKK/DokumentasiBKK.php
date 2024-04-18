<?php

class dokumentasiBkk extends Controller
{
    public $model_namee = "Berita";

    public $model_nameee = "Admin";

    private $model_name = "bkk";

    public function index()
    {
        $data['judul'] = 'Dokumentasi BKK';
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();
        $data['dokumBKK'] = $this->model("$this->model_name", 'DokumentasiBkk_model')->getMaxId();



        $this->view('templates-user/header', $data);
        $this->view('bkk/dokumentasi', $data);
        $this->view('templates-user/footer', $data);
    }
}
