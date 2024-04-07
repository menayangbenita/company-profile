<?php

class inovasiProgramBkk extends Controller
{
    private $model_name = "Bkk";

    public function index()
    {
        $data['judul'] = 'Inovasi Program BKK';
        $data['Inovasi'] = $this->model("$this->model_name", 'InovasiProgram_model')->getMaxId();

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('bkk/inovasiProgram', $data);
        $this->view('templates-user/footer', $data);
    }
}