<?php

class Home extends Controller
{
    public $model_namee = "Berita";

    public function index()
    {
        $data['judul'] = 'Beranda';
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatesttNews();

        $this->view('templates-user/header', $data);
        $this->view('index', $data);
        $this->view('templates-user/footer', $data);
    }
}
