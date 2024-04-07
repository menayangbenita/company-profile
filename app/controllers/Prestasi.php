<?php

class prestasi extends Controller
{
    public $model_name = "Admin";

    public function index()
    {
        $data['judul'] = 'Prestasi';
        $data['prestasi'] = $this->model("$this->model_name", 'Prestasi_model')->getLatest();

        $this->view('templates-user/header', $data);
        $this->view('prestasi', $data);
        $this->view('templates-user/footer');
    }
}
