<?php

class rekapitulasiMou extends Controller
{
    private $model_name = "Bkk";

    public function index()
    {
        $data['judul'] = 'Rekapitulasi MOU';
        $data['RekapMou'] = $this->model("$this->model_name", 'RekapMou_model')->getMaxId();


        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('bkk/rekapitulasiMou', $data);
        $this->view('templates-user/footer', $data);
    }
}
