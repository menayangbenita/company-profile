<?php

class visiMisi extends Controller
{
    private $model_name = "Admin";
    public $model_namee = "Berita";
    public $model_nameee = "Admin";

    public function index()
    {
        $data['judul'] = 'Visi & Misi';
        $data['misi'] = $this->model("$this->model_name", 'VisiMisi_model')->getAllMisi();
        $data['visi'] = $this->model("$this->model_name", 'VisiMisi_model')->getMaxId();        
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();

        $this->view('templates-user/header', $data);
        $this->view('visiMisi', $data);
        $this->view('templates-user/footer', $data);
    }
}
