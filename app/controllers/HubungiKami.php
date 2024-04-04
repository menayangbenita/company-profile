<?php

class hubungiKami extends Controller
{
    public function index()
    {
        $data['judul'] = 'Kotak Surat';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('hubungiKami', $data);
        $this->view('templates-user/footer', $data);
    }
}
