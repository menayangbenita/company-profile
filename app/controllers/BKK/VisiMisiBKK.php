<?php

class visiMisiBkk extends Controller
{
    public $model_name = "Bkk";

    public function index()
    {
        $data['judul'] = 'Visi & Misi BKK';
        $data['BkkVisiMisi'] = $this->model("$this->model_name", 'VisiMisiBkk_model')->getMaxId();
        $data['misi'] = $this->model("$this->model_name", 'VisiMisiBkk_model')->getAllMisi();
        $data['visi'] = $this->model("$this->model_name", 'VisiMisiBkk_model')->getMaxId();



        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('bkk/visiMisi', $data);
        $this->view('templates-user/footer', $data);
    }
}
