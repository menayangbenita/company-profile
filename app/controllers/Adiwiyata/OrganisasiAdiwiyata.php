<?php

class organisasiAdiwiyata extends Controller
{
    private $model_name = "Adiwiyata";
    public $model_namee = "Berita";

    public function index()
    {
        $data['judul'] = 'Organisasi Adiwiyata';
        $data['OrganisasiAdiwiyata'] = $this->model("$this->model_name", 'OrganisasiAdiwiyata_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('adiwiyata/organisasi', $data);
        $this->view('templates-user/footer', $data);
    }
}
