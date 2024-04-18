<?php

class Home extends Controller
{
    public $model_name = "Admin";
    public $model_namee = "Berita";

    public function index()
    {
        $data['judul'] = 'Beranda';
        $data['faq'] = $this->model("$this->model_name", 'Faq_model')->getAllData();
        $data['footer'] = $this->model("$this->model_name", 'Footer_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatesttNews();
        $data['slider'] = $this->model("$this->model_name", 'Slider_model')->getAllData();

        $this->view('templates-user/header', $data);
        $this->view('index', $data);
        $this->view('templates-user/footer-dashboard', $data);
    }
}
