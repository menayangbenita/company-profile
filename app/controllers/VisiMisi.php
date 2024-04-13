<?php

class visiMisi extends Controller
{
    private $model_name = "Admin";

    public function index()
    {
        $data['judul'] = 'Visi & Misi';
        $data['misi'] = $this->model("$this->model_name", 'VisiMisi_model')->getAllMisi();
        $data['visi'] = $this->model("$this->model_name", 'VisiMisi_model')->getMaxId();

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('visiMisi', $data);
        $this->view('templates-user/footer', $data);
    }
}
