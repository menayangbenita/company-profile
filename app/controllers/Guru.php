<?php

class guru extends Controller
{
    public $model_name = "Admin";

    public function index()
    {
        $data['judul'] = 'Guru';
        $data['guru'] = $this->model("$this->model_name", 'Guru_model')->getAllData();

        $this->view('templates-user/header', $data);
        $this->view('guru', $data);
        $this->view('templates-user/footer', $data);
    }
}
