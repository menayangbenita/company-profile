<?php

class galeri extends Controller
{
    public $model_name = "Admin";

    public function index()
    {
        $data['judul'] = 'Galeri';
        $data['kategori'] = $this->model("$this->model_name", 'Galeri_model')->getAllKategori();
        $data['galeri'] = $this->model("$this->model_name", 'Galeri_model')->getAllData();

        $this->view('templates-user/header', $data);
        $this->view('galeri', $data);
        $this->view('templates-user/footer', $data);
    }
}
