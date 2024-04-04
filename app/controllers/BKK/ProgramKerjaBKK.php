<?php

class programKerjaBKK extends Controller
{
    public function index()
    {
        $data['judul'] = 'Program Kerja BKK';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('bkk/programKerja', $data);
        $this->view('templates-user/footer', $data);
    }
}
