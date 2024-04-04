<?php

class organisasiKesiswaan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Organisasi Kesiswaan';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('kesiswaan/organisasi', $data);
        $this->view('templates-user/footer', $data);
    }
}
