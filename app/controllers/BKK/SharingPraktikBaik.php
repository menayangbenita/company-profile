<?php

class sharingPraktikBaik extends Controller
{
    private $model_name = "Bkk";
    public function index()
    {
        $data['judul'] = 'Sharing Praktik Baik';
        $data['Sharing'] = $this->model("$this->model_name", 'SharingPraktik_model')->getMaxId();


        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('bkk/sharingPraktikBaik', $data);
        $this->view('templates-user/footer', $data);
    }
}
