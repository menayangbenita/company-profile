<?php

class visiMisi extends Controller
{
    public function index()
    {
        $data['judul'] = 'Visi & Misi';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('visiMisi', $data);
        $this->view('templates-user/footer');
    }
}
