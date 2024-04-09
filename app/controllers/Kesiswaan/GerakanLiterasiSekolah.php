<?php

class gerakanLiterasiSekolah extends Controller
{
    private $model_name = "Kesiswaan";

    public function index()
    {
        $data['judul'] = 'Gerakan Literasi Sekolah';
        $data['gls'] = $this->model("$this->model_name", 'Gls_model')->getMaxId();
        $data['user'] = $this->user;

        $this->view('templates-user/header', $data);
        $this->view('kesiswaan/gls', $data);
        $this->view('templates-user/footer', $data);
    }
}