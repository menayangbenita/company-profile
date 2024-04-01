<?php

class kepalaSekolah extends Controller
{
    public function index()
    {
        $data['judul'] = 'Kepala Sekolah';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('kepalaSekolah', $data);
        $this->view('templates-user/footer');
    }
}
