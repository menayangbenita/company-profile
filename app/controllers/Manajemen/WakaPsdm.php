<?php

class wakaPsdm extends Controller
{
    public function index()
    {
        $data['judul'] = 'Waka PSDM';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('manajemen/psdm', $data);
        $this->view('templates-user/footer');
    }
}
