<?php

class ProgramKerjaBkk extends Controller
{
    public $model_name = "Bkk";
    public $model_namee = "Berita";

    public function index()
    {
        $data['judul'] = 'Program Kerja BKK';
        $data['Proker'] = $this->model("$this->model_name", 'ProgramKerjaBkk_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('bkk/programKerja', $data);
        $this->view('templates-user/footer', $data);
    }
}