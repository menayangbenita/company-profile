<?php

class visiMisiAdiwiyata extends Controller
{
    private $model_name = "Adiwiyata";

    public function index()
    {
        $data['judul'] = 'Visi & Misi Adiwiyata';
        $data['misi'] = $this->model("$this->model_name", 'VisiMisiAdiwiyata_model')->getAllMisi();
        $data['visi'] = $this->model("$this->model_name", 'VisiMisiAdiwiyata_model')->getMaxId();

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('adiwiyata/visiMisi', $data);
        $this->view('templates-user/footer', $data);
    }
}
