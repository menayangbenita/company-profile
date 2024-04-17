<?php

class berita extends Controller
{
    private $model_name = "Berita";

    public function index()
    {
        $data['judul'] = 'Berita';
        $data['berita'] = $this->model("$this->model_name", 'Berita_model')->getAllNews();
        $data['baru'] = $this->model("$this->model_name", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('berita/index', $data);
        $this->view('templates-user/footer-berita', $data);
    }

    public function berita($id)
    {
        $data['judul'] = 'Berita';
        $data['isiberita'] = $this->model("$this->model_name", 'Berita_model')->getDataById($id);
        $data['berita'] = $this->model("$this->model_name", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('berita/berita', $data);
        $this->view('templates-user/footer', $data);
    }
}
