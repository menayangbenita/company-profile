<?php

class gerakanLiterasiSekolah extends Controller
{
    private $model_name = "Kesiswaan";
    public $model_namee = "Berita";

    public function index()
    {
        $data['judul'] = 'Gerakan Literasi Sekolah';
        $data['gls'] = $this->model("$this->model_name", 'Gls_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('kesiswaan/gls', $data);
        $this->view('templates-user/footer', $data);
    }
}