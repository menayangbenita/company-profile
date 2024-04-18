<?php

class sharingPraktikBaik extends Controller
{
    private $model_name = "Bkk";
    public $model_namee = "Berita";
    public $model_nameee = "Admin";

    public function index()
    {
        $data['judul'] = 'Sharing Praktik Baik';
        $data['Sharing'] = $this->model("$this->model_name", 'SharingPraktik_model')->getMaxId();
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('bkk/sharingPraktikBaik', $data);
        $this->view('templates-user/footer', $data);
    }
}
