<?php

class wakaPsdm extends Controller
{
    private $model_name = "Manajemen";

    public function index()
    {
        $data['judul'] = 'Waka PSDM';
        $data['waka'] = $this->model("$this->model_name", 'Psdm_model')->getMaxId();

        $this->view('templates-user/header', $data);
        $this->view('manajemen/psdm', $data);
        $this->view('templates-user/footer', $data);
    }
}
