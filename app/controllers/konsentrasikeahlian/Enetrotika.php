<?php

class enetrotika extends Controller
{
    public function index()
    {
        $data['judul'] = 'Enetrotika';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('kompetensikeahlian/enetrotika', $data);
        $this->view('templates-user/footer');
    }
}
