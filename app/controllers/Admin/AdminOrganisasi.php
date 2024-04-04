<?php

class AdminOrganisasi extends Controller
{
    public function index()
    {
        $data['judul'] = 'Organisasi';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/kesiswaan/organisasi', $data);
        $this->view('templates-admin/footer');
    }
}
