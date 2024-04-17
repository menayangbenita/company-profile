<?php

class wakaKesiswaan extends Controller
{
    private $model_name = "Manajemen";
    public $model_namee = "Berita";

    public function index()
    {
        $data['judul'] = 'Waka Kesiswaan';
        $data['waka'] = $this->model("$this->model_name", 'Kesiswaan_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();


        $this->view('templates-user/header', $data);
        $this->view('manajemen/kesiswaan', $data);
        $this->view('templates-user/footer', $data);
    }
}
