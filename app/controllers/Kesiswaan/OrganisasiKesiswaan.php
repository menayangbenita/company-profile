<?php

class organisasiKesiswaan extends Controller
{
    private $model_name = "Kesiswaan";

    public function index()
    {
        $data['judul'] = 'Organisasi Kesiswaan';
        $data['organisasi'] = $this->model("$this->model_name", 'Organisasi_model')->getMaxId();


        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('kesiswaan/organisasi', $data);
        $this->view('templates-user/footer', $data);
    }
}
