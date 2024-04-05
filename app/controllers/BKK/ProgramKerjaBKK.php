<?php

class ProgramKerjaBkk extends Controller
{
    public $model_name = "Bkk";

    public function index()
    {
        $data['judul'] = 'Program Kerja BKK';
        $data['Proker'] = $this->model("$this->model_name", 'ProgramKerjaBkk_model')->getMaxId();

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('bkk/programKerja', $data);
        $this->view('templates-user/footer', $data);
    }
}