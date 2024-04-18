<?php

class galeri extends Controller
{
    public $model_name = "Admin";
    public $model_namee = "Berita";
    public $model_nameee = "Admin";

    public function index()
    {
        $data['judul'] = 'Galeri';
        $data['kategori'] = $this->model("$this->model_name", 'Galeri_model')->getAllKategori();
        $data['galeri'] = $this->model("$this->model_name", 'Galeri_model')->getAllData();
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('galeri', $data);
        $this->view('templates-user/footer', $data);
    }
}
