<?php

class IndustriPasangan extends Controller
{
    public $model_name = "Bkk";

    public function index()
    {
        $data['judul'] = 'Industri Pasangan';
        $data['Industri'] = $this->model("$this->model_name", 'IndustriPasangan_model')->getMaxId();

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('bkk/industriPasangan', $data);
        $this->view('templates-user/footer', $data);
    }
}
