<?php

class berita extends Controller
{
    private $model_name = "Berita";
    public $model_nameee = "Admin";

    public function index()
    {
        $data['judul'] = 'Berita';
        $data['berita'] = $this->model("$this->model_name", 'Berita_model')->getAllNews();
        $data['baru'] = $this->model("$this->model_name", 'Berita_model')->getLatestNews();
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();

        $this->view('templates-user/header', $data);
        $this->view('berita/index', $data);
        $this->view('templates-user/footer-berita', $data);
    }

    public function berita($id)
    {
        $data['judul'] = 'Berita';
        $data['isiberita'] = $this->model("$this->model_name", 'Berita_model')->getDataById($id);
        $data['berita'] = $this->model("$this->model_name", 'Berita_model')->getLatestNews();
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();

        $this->view('templates-user/header', $data);
        $this->view('berita/berita', $data);
        $this->view('templates-user/footer', $data);
    }
}
