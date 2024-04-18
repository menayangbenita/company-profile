<?php

class wakaSarpras extends Controller
{
    private $model_name = "Manajemen";
    public $model_namee = "Berita";
    public $model_nameee = "Admin";

    public function index()
    {
        $data['judul'] = 'Waka Sarpras';
        $data['galeri'] = $this->model("$this->model_name", 'Sarpras_model')->getAllDokum();
        $data['sarpras'] = $this->model("$this->model_name", 'Sarpras_model')->getAllSarpras();
        $data['waka'] = $this->model("$this->model_name", 'Sarpras_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();

        $this->view('templates-user/header', $data);
        $this->view('manajemen/sarpras', $data);
        $this->view('templates-user/footer', $data);
    }
}
