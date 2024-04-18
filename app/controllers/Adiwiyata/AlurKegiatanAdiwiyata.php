<?php

class AlurKegiatanAdiwiyata extends Controller
{
    private $model_name = "Adiwiyata";
    public $model_namee = "Berita";
    public $model_nameee = "Admin";


    public function index()
    {
        $data['judul'] = 'Alur Kegiatan Adiwiyata';
        $data['AlurAdiwiyata'] = $this->model("$this->model_name", 'AlurKegiatanAdiwiyata_model')->getMaxId();
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('adiwiyata/alurKegiatan', $data);
        $this->view('templates-user/footer', $data);
    }
}
