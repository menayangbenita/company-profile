<?php

class enetrotika extends Controller
{
    private $model_name = "KK";

    public function index()
    {
        $data['judul'] = 'Enetrotika';
        $data['keterangan'] = $this->model("$this->model_name", 'Enetrotika_model')->getMaxId();
        $data['kk'] = $this->model("$this->model_name", 'Enetrotika_model')->getAllKk();
        $data['dpk'] = $this->model("$this->model_name", 'Enetrotika_model')->getAllDpk();

        $this->view('templates-user/header', $data);
        $this->view('kompetensikeahlian/enetrotika', $data);
        $this->view('templates-user/footer', $data);
    }
}
