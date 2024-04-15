<?php

class berita extends Controller
{
    private $model_name = "Berita";

    public function index()
    {
        $data['judul'] = 'Berita';
        $data['berita'] = $this->model("$this->model_name", 'Berita_model')->getLatestNews();


        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('berita/index', $data);
        $this->view('templates-user/footer', $data);
    }

    public function berita()
    {
        $data['judul'] = 'Berita';
        $data['berita'] = $this->model("$this->model_name", 'Berita_model')->getMaxId();


        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('berita/berita', $data);
        $this->view('templates-user/footer', $data);
    }
}
