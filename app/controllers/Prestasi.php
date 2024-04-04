<?php

class prestasi extends Controller
{
    public function index()
    {
        $data['judul'] = 'Prestasi';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('prestasi', $data);
        $this->view('templates-user/footer', $data);
    }
}
