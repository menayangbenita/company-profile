<?php

class BeritaEdit extends Controller
{
    public function index()
    {
        $data['judul'] = 'Edit Berita';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/beritaEdit', $data);
        $this->view('templates-admin/footer');
    }
}
