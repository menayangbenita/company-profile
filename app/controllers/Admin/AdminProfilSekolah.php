<?php

class AdminProfilSekolah extends Controller
{
    public function index()
    {
        $data['judul'] = 'Profil Sekolah';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/profilSekolah', $data);
        $this->view('templates-admin/footer');
    }
}
