<?php

class organisasiAdiwiyata extends Controller
{
    public function index()
    {
        $data['judul'] = 'Organisasi Adiwiyata';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('adiwiyata/organisasi', $data);
        $this->view('templates-user/footer');
    }
}
