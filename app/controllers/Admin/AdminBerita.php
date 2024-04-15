<?php

class AdminBerita extends Controller
{
    private $model_name = "Berita";

    public function index()
    {
        $data['judul'] = 'Berita';
        $data['user'] = $this->user;
        $data['berita'] = $this->model("$this->model_name", 'Berita_model')->getAllData();


        $this->view('templates-admin/header', $data);
        $this->view('admin/berita', $data);
        $this->view('templates-admin/footer');
    }
    
}
