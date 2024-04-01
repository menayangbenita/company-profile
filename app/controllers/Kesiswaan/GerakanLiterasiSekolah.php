<?php

class gerakanLiterasiSekolah extends Controller
{
    public function index()
    {
        $data['judul'] = 'Gerakan Literasi Sekolah';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('kesiswaan/gls', $data);
        $this->view('templates-user/footer');
    }
}
