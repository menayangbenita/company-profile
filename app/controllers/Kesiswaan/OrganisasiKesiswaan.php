<?php

class OrganisasiKesiswaan extends Controller
{
    private $model_name = "Kesiswaan";

    public function index()
    {
        $data['judul'] = 'Organisasi';
        $data['organisasi'] = $this->model("$this->model_name", 'Organisasi_model')->getMaxId();
        $data['isi'] = $this->model("$this->model_name", 'Organisasi_model')->getAllIsi();
        $data['galeri'] = $this->model("$this->model_name", 'Organisasi_model')->getAllDokum();

        $this->view('templates-user/header', $data);
        $this->view('kesiswaan/organisasi', $data);
        $this->view('templates-user/footer', $data);
    }
}
