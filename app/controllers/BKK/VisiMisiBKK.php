<?php

class visiMisiBkk extends Controller
{
    public $model_name = "Bkk";
    public $model_namee = "Berita";
    public $model_nameee = "Admin";

    public function index()
    {
        $data['judul'] = 'Visi & Misi BKK';
        $data['BkkVisiMisi'] = $this->model("$this->model_name", 'VisiMisiBkk_model')->getMaxId();
        $data['misi'] = $this->model("$this->model_name", 'VisiMisiBkk_model')->getAllMisi();
        $data['visi'] = $this->model("$this->model_name", 'VisiMisiBkk_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();        
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();

        $this->view('templates-user/header', $data);
        $this->view('bkk/visiMisi', $data);
        $this->view('templates-user/footer', $data);
    }
}
