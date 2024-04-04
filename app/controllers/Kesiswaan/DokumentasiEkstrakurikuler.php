<?php

class dokumentasiEkstrakurikuler extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dokumentasi Ekstrakurikuler';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('kesiswaan/dokumentasi', $data);
        $this->view('templates-user/footer', $data);
    }
}
