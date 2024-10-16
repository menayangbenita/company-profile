<?php

class IndustriPasangan extends Controller
{
    public $model_name = "Bkk";
    public $model_namee = "Berita";
    public $model_nameee = "Admin";


    public function index()
    {
        $data['judul'] = 'Industri Pasangan';
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();
        $data['Industri'] = $this->model("$this->model_name", 'IndustriPasangan_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('bkk/industriPasangan', $data);
        $this->view('templates-user/footer', $data);
    }
}
