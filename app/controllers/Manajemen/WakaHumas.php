<?php

class wakaHumas extends Controller
{
    private $model_name = "Manajemen";

    public function index()
    {
        $data['judul'] = 'Waka Humas';
        $data['waka'] = $this->model("$this->model_name", 'Humas_model')->getMaxId();

        $this->view('templates-user/header', $data);
        $this->view('manajemen/humas', $data);
        $this->view('templates-user/footer', $data);
    }
}
