<?php

class elektronikIndustri extends Controller
{
    private $model_name = "KK";

    public function index()
    {
        $data['judul'] = 'Elektronik Industri';
        $data['keterangan'] = $this->model("$this->model_name", 'Ei_model')->getMaxId();
        $data['kk'] = $this->model("$this->model_name", 'Ei_model')->getAllKk();
        $data['dpk'] = $this->model("$this->model_name", 'Ei_model')->getAllDpk();

        $this->view('templates-user/header', $data);
        $this->view('kompetensikeahlian/elektronikIndustri', $data);
        $this->view('templates-user/footer', $data);
    }
}
