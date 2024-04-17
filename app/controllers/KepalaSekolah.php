<?php

class kepalaSekolah extends Controller
{
    public $model_name = "Admin";
    public $model_namee = "Berita";

    public function index()
    {
        $data['judul'] = 'Kepala Sekolah';
        $data['kepsek'] = $this->model("$this->model_name", 'KepalaSekolah_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();
        $data['kepsekDulu'] = $this->model("$this->model_name", 'KepalaSekolah_model')->getAllTerdahulu();

        $this->view('templates-user/header', $data);
        $this->view('kepalaSekolah', $data);
        $this->view('templates-user/footer', $data);
    }
}
