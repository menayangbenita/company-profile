<?php

class EkstrakurikulerDokumentasi extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dokumentasi Ekstrakurikuler';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/kesiswaan/dokumentasiEkstrakurikuler', $data);
        $this->view('templates-admin/footer');
    }
}
