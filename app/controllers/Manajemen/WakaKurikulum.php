<?php

class wakaKurikulum extends Controller
{
    private $model_name = "Manajemen";
    public $model_namee = "Berita";
    public $model_nameee = "Admin";

    public function index()
    {
        $data['judul'] = 'Waka Kurikulum';
        $data['waka'] = $this->model("$this->model_name", 'Kesiswaan_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();

        $this->view('templates-user/header', $data);
        $this->view('manajemen/kurikulum', $data);
        $this->view('templates-user/footer', $data);
    }
}
