<?php

class BkkDokumentasi extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dokumentasi BKK';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/dokumentasi', $data);
        $this->view('templates-admin/footer');
    }
}
