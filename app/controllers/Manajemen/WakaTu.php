<?php

class wakaTu extends Controller
{
    private $model_name = "Manajemen";

    public function index()
    {
        $data['judul'] = 'Waka TU';
        $data['waka'] = $this->model("$this->model_name", 'Tu_model')->getMaxId();

        $this->view('templates-user/header', $data);
        $this->view('manajemen/tu', $data);
        $this->view('templates-user/footer', $data);
    }
}
