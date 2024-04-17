<?php

class dokumentasiBkk extends Controller
{
    public $model_namee = "Berita";

    public function index()
    {
        $data['judul'] = 'Dokumentasi BKK';
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();


        $this->view('templates-user/header', $data);
        $this->view('bkk/dokumentasi', $data);
        $this->view('templates-user/footer', $data);
    }
}
