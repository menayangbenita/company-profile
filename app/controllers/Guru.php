<?php

class guru extends Controller
{
    public function index()
    {
        $data['judul'] = 'Guru';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('guru', $data);
        $this->view('templates-user/footer');
    }
}
