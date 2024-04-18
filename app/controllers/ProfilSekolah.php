<?php

class profilSekolah extends Controller
{
    public $model_name = "Admin";
    public $model_namee = "Berita";
    public $model_nameee = "Admin";

    public function index()
    {
        $data['judul'] = 'Profil Sekolah';
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();
        $data['profil'] = $this->model("$this->model_name", 'ProfilSekolah_model')->getMaxId();
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();

        $this->view('templates-user/header', $data);
        $this->view('profilSekolah', $data);
        $this->view('templates-user/footer', $data);
    }
}
