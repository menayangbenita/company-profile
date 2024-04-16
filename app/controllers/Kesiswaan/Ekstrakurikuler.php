<?php

class ekstrakurikuler extends Controller
{
    private $model_name = "Kesiswaan";

    public function index()
    {
        $data['judul'] = 'Ekstrakurikuler';
        $data['ekstra'] = $this->model("$this->model_name", 'Ekstra_model')->getMaxId();


        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('kesiswaan/ekstrakurikuler', $data);
        $this->view('templates-user/footer', $data);
    }
}
