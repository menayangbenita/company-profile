<?php

class tkj extends Controller
{
    private $model_name = "KK";
    public $model_namee = "Berita";
    public $model_nameee = "Admin";

    public function index()
    {
        $data['judul'] = 'TKJ';
        $data['keterangan'] = $this->model("$this->model_name", 'Tkj_model')->getMaxId();
        $data['kk'] = $this->model("$this->model_name", 'Tkj_model')->getAllKk();
        $data['dpk'] = $this->model("$this->model_name", 'Tkj_model')->getAllDpk();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();


        $this->view('templates-user/header', $data);
        $this->view('kompetensikeahlian/tkj', $data);
        $this->view('templates-user/footer', $data);
    }
}
