<?php

class rpl extends Controller
{
    public function index()
    {
        $data['judul'] = 'RPL';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('kompetensikeahlian/rpl', $data);
        $this->view('templates-user/footer');
    }
}
