<?php

class strukturOrganisasiBkk extends Controller
{
    public $model_name = "Bkk";

    public function index()
    {
        $data['judul'] = 'Struktur Organisasi BKK';
        $data['organisasi'] = $this->model("$this->model_name", 'Organisasi_model')->getMaxId();

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('bkk/strukturOrganisasi', $data);
        $this->view('templates-user/footer', $data);
    }
}
