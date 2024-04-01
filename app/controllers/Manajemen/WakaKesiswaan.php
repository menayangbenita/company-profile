<?php

class wakaKesiswaan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Waka Kesiswaan';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('manajemen/kesiswaan', $data);
        $this->view('templates-user/footer');
    }
}
