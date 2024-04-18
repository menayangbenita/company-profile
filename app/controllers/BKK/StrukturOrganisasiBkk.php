<?php

class strukturOrganisasiBkk extends Controller
{
    public $model_name = "Bkk";
    public $model_namee = "Berita";
    public $model_nameee = "Admin";


    public function index()
    {
        $data['judul'] = 'Struktur Organisasi BKK';
        $data['organisasi'] = $this->model("$this->model_name", 'Organisasi_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();

        $this->view('templates-user/header', $data);
        $this->view('bkk/strukturOrganisasi', $data);
        $this->view('templates-user/footer', $data);
    }
}
