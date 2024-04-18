<?php

class alurKegiatanBkk extends Controller
{
    private $model_name= "Bkk";
    public $model_namee = "Berita";
    public $model_nameee = "Berita";

    public function index()
    {
        $data['judul'] = 'Alur Kegiatan BKK';
        $data['AlurBkk'] = $this->model("$this->model_name", 'AlurKegiatanBkk_model')->getMaxId();
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('bkk/alurKegiatan', $data);
        $this->view('templates-user/footer', $data);
    }
}
