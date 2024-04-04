<?php

class wakaHumas extends Controller
{
    public function index()
    {
        $data['judul'] = 'Waka Humas';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('manajemen/humas', $data);
        $this->view('templates-user/footer', $data);
    }
}
