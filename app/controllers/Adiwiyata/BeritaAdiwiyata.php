<?php

class BeritaAdiwiyata extends Controller
{
    private $model_name = "Adiwiyata";
    public $model_nameee = "Admin";

    public function index($page = 1)
    {
        $data['judul'] = 'Berita';
        $data['berita'] = $this->model("$this->model_name", 'BeritaAdiwiyata_model')->getAllNews();
        $data['baru'] = $this->model("$this->model_name", 'BeritaAdiwiyata_model')->getLatestNews();
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();

        $this->view('templates-user/header', $data);
        $this->view('Adiwiyata/index', $data);
        $this->view('templates-user/footer-berita', $data);
    }

    public function berita($id)
    {
        $data['judul'] = 'Berita';
        $data['isiberita'] = $this->model("$this->model_name", 'BeritaAdiwiyata_model')->getDataById($id);
        $data['berita'] = $this->model("$this->model_name", 'BeritaAdiwiyata_model')->getLatestNews();
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();

        $this->view('templates-user/header', $data);
        $this->view('Adiwiyata/Berita', $data);
        $this->view('templates-user/footer', $data);
    }

}
