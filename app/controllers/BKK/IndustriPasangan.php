<?php

class industriPasangan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Industri Pasangan';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('bkk/industriPasangan', $data);
        $this->view('templates-user/footer');
    }
}
