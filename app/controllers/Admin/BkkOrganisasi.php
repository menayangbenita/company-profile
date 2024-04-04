<?php

class BkkOrganisasi extends Controller
{
    public function index()
    {
        $data['judul'] = 'Struktur Organisasi BKK';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/strukturOrganisasi', $data);
        $this->view('templates-admin/footer');
    }
}
