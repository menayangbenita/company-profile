<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Beranda';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('index', $data);
        $this->view('templates-user/footer', $data);
    }
}
