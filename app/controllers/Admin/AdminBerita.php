<?php

class AdminBerita extends Controller
{
    public function index()
    {
        $data['judul'] = 'Berita';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/berita', $data);
        $this->view('templates-admin/footer');
    }
}
