<?php

class rekapitulasiMou extends Controller
{
    private $model_name = "Bkk";
    public $model_namee = "Berita";

    public function index()
    {
        $data['judul'] = 'Rekapitulasi MOU';
        $data['RekapMou'] = $this->model("$this->model_name", 'RekapMou_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('bkk/rekapitulasiMou', $data);
        $this->view('templates-user/footer', $data);
    }
}
