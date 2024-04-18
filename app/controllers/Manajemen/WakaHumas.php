<?php

class wakaHumas extends Controller
{
    private $model_name = "Manajemen";
    public $model_namee = "Berita";
    public $model_nameee = "Admin";


    public function index()
    {
        $data['judul'] = 'Waka Humas';
        $data['waka'] = $this->model("$this->model_name", 'Humas_model')->getMaxId();
        $data['logo'] = $this->model("$this->model_name", 'Humas_model')->getAllIndustri();
        $data['galeri'] = $this->model("$this->model_name", 'Humas_model')->getAllDokum();
        $data['indus'] = $this->model("$this->model_name", 'Humas_model')->getJmlData();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();

        $this->view('templates-user/header', $data);
        $this->view('manajemen/humas', $data);
        $this->view('templates-user/footer', $data);
    }
}
