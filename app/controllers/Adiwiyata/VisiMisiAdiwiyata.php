<?php

class visiMisiAdiwiyata extends Controller
{
    private $model_name = "Adiwiyata";
    public $model_namee = "Berita";
    public $model_nameee = "Admin";

    public function index()
    {
        $data['judul'] = 'Visi & Misi Adiwiyata';
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();
        $data['misi'] = $this->model("$this->model_name", 'VisiMisiAdiwiyata_model')->getAllMisi();
        $data['visi'] = $this->model("$this->model_name", 'VisiMisiAdiwiyata_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('adiwiyata/visiMisi', $data);
        $this->view('templates-user/footer', $data);
    }
}
