<?php

class BkkIndustriPasangan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Industri Pasangan';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/industriPasangan', $data);
        $this->view('templates-admin/footer');
    }
}
