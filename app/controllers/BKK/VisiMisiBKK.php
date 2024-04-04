<?php

class visiMisiBkk extends Controller
{
    public function index()
    {
        $data['judul'] = 'Visi & Misi BKK';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('bkk/visiMisi', $data);
        $this->view('templates-user/footer', $data);
    }
}
