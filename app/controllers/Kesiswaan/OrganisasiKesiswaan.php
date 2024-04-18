<?php

class OrganisasiKesiswaan extends Controller
{
    private $model_name = "Kesiswaan";
    public $model_namee = "Berita";
    public $model_nameee = "Admin";


    public function index()
    {
        $data['judul'] = 'Organisasi';
        $data['organisasi'] = $this->model("$this->model_name", 'Organisasi_model')->getMaxId();
        $data['isi'] = $this->model("$this->model_name", 'Organisasi_model')->getAllIsi();
        $data['galeri'] = $this->model("$this->model_name", 'Organisasi_model')->getAllDokum();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();


        $this->view('templates-user/header', $data);
        $this->view('kesiswaan/organisasi', $data);
        $this->view('templates-user/footer', $data);
    }
}
