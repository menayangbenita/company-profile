<?php

class wakaKesiswaan extends Controller
{
    private $model_name = "Manajemen";

    public function index()
    {
        $data['judul'] = 'Waka Kesiswaan';
        $data['waka'] = $this->model("$this->model_name", 'Kesiswaan_model')->getMaxId();

        $this->view('templates-user/header', $data);
        $this->view('manajemen/kesiswaan', $data);
        $this->view('templates-user/footer', $data);
    }
}
