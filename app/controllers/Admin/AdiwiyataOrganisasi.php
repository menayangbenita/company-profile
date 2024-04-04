<?php

class AdiwiyataOrganisasi extends Controller
{
    public function index()
    {
        $data['judul'] = 'Organisasi Adiwiyata';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/adiwiyata/organisasi', $data);
        $this->view('templates-admin/footer');
    }
}
