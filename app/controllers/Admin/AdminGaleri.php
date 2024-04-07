<?php

class AdminGaleri extends Controller
{
    public function index()
    {
        $data['judul'] = 'Profil Sekolah';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/galeri', $data);
        $this->view('templates-admin/footer');
    }
}
