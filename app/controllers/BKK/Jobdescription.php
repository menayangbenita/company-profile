<?php

class jobdescription extends Controller
{
    public $model_name = "Bkk";
    public $model_namee = "Berita";
    public $model_nameee = "Admin";

    public function index()
    {
        $data['judul'] = 'Jobdescription';
        $data['footer'] = $this->model("$this->model_nameee", 'Footer_model')->getMaxId();
        $data['jobdesc'] = $this->model("$this->model_name", 'Jobdescription_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('bkk/jobdescription', $data);
        $this->view('templates-user/footer', $data);
    }
}
