<?php

class KetuaRpl extends Controller
{
    private $model_name = "KK";
    public $model_namee = "Berita";
    public $model_nameee = "Admin";

    public function index()
    {
        $data['judul'] = 'Enetrotika';
        $data['KetuaMeka'] = $this->model("$this->model_name", 'KetuaRpl_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();

        $this->view('templates-user/header', $data);
        $this->view('kompetensikeahlian/KetuaRpl', $data);
        $this->view('templates-user/footer', $data);
    }
}
