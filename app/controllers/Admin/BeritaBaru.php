<?php

class BeritaBaru extends Controller
{
    public function index()
    {
        $data['judul'] = 'Berita Baru';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/beritaBaru', $data);
        $this->view('templates-admin/footer');
    }
}
