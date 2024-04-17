<?php

class inovasiProgramBkk extends Controller
{
    private $model_name = "Bkk";
    public $model_namee = "Berita";

    public function index()
    {
        $data['judul'] = 'Inovasi Program BKK';
        $data['Inovasi'] = $this->model("$this->model_name", 'InovasiProgram_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('bkk/inovasiProgram', $data);
        $this->view('templates-user/footer', $data);
    }
}