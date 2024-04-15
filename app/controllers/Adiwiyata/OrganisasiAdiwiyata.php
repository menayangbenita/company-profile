<?php

class organisasiAdiwiyata extends Controller
{
    private $model_name = "Adiwiyata";

    public function index()
    {
        $data['judul'] = 'Organisasi Adiwiyata';
        $data['OrganisasiAdiwiyata'] = $this->model("$this->model_name", 'OrganisasiAdiwiyata_model')->getMaxId();


        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('adiwiyata/organisasi', $data);
        $this->view('templates-user/footer', $data);
    }
}
