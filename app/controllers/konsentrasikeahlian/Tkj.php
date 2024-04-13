<?php

class tkj extends Controller
{
    private $model_name = "KK";

    public function index()
    {
        $data['judul'] = 'TKJ';
        $data['keterangan'] = $this->model("$this->model_name", 'Tkj_model')->getMaxId();
        $data['kk'] = $this->model("$this->model_name", 'Tkj_model')->getAllKk();
        $data['dpk'] = $this->model("$this->model_name", 'Tkj_model')->getAllDpk();

        $this->view('templates-user/header', $data);
        $this->view('kompetensikeahlian/tkj', $data);
        $this->view('templates-user/footer', $data);
    }
}
