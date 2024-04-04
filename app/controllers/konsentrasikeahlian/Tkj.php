<?php

class tkj extends Controller
{
    public function index()
    {
        $data['judul'] = 'TKJ';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('kompetensikeahlian/tkj', $data);
        $this->view('templates-user/footer', $data);
    }
}
