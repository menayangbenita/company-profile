<?php

class ekstrakurikuler extends Controller
{
    private $model_name = "Kesiswaan";
    public $model_namee = "Berita";


    public function index()
    {
        $data['judul'] = 'Ekstrakurikuler';
        $data['ekstra'] = $this->model("$this->model_name", 'Ekstra_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('kesiswaan/ekstrakurikuler', $data);
        $this->view('templates-user/footer', $data);
    }
}
