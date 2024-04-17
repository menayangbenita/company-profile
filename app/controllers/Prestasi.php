<?php

class prestasi extends Controller
{
    public $model_name = "Admin";
    public $model_namee = "Berita";


    public function index()
    {
        $data['judul'] = 'Prestasi';
        $data['prestasi'] = $this->model("$this->model_name", 'Prestasi_model')->getLatest();        
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();


        $this->view('templates-user/header', $data);
        $this->view('prestasi', $data);
        $this->view('templates-user/footer', $data);
    }
}
