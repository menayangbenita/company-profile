<?php

class wakaPsdm extends Controller
{
    private $model_name = "Manajemen";
    public $model_namee = "Berita";

    public function index()
    {
        $data['judul'] = 'Waka PSDM';
        $data['waka'] = $this->model("$this->model_name", 'Psdm_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('manajemen/psdm', $data);
        $this->view('templates-user/footer', $data);
    }
}
