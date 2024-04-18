<?php

class kepalaSekolah extends Controller
{
    public $model_name = "Admin";
    public $model_namee = "Berita";
    public $model_nameee = "Admin";

    public function index()
    {
        $data['judul'] = 'Kepala Sekolah';
        $data['kepsek'] = $this->model("$this->model_name", 'KepalaSekolah_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();
        $data['kepsekDulu'] = $this->model("$this->model_name", 'KepalaSekolah_model')->getAllTerdahulu();
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();

        $this->view('templates-user/header', $data);
        $this->view('kepalaSekolah', $data);
        $this->view('templates-user/footer', $data);
    }
}
