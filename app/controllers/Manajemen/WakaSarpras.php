<?php

class wakaSarpras extends Controller
{
    public function index()
    {
        $data['judul'] = 'Waka Sarpras';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('manajemen/sarpras', $data);
        $this->view('templates-user/footer', $data);
    }
}
