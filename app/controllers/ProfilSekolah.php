<?php

class profilSekolah extends Controller
{
    public $model_name = "Admin";

    public function index()
    {
        $data['judul'] = 'Profil Sekolah';
        $data['profil'] = $this->model("$this->model_name", 'ProfilSekolah_model')->getMaxId();

        $this->view('templates-user/header', $data);
        $this->view('profilSekolah', $data);
        $this->view('templates-user/footer', $data);
    }
}
