<?php

class rpl extends Controller
{
    private $model_name = "KK";
    public $model_namee = "Berita";

    public function index()
    {
        $data['judul'] = 'RPL';
        $data['keterangan'] = $this->model("$this->model_name", 'Rpl_model')->getMaxId();
        $data['kk'] = $this->model("$this->model_name", 'Rpl_model')->getAllKk();
        $data['dpk'] = $this->model("$this->model_name", 'Rpl_model')->getAllDpk();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('kompetensikeahlian/rpl', $data);
        $this->view('templates-user/footer', $data);
    }
}
