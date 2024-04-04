<?php

class profilSekolah extends Controller
{
    public function index()
    {
        $data['judul'] = 'Profil Sekolah';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('profilSekolah', $data);
        $this->view('templates-user/footer', $data);
    }
}
