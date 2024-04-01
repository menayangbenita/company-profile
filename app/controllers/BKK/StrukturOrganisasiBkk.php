<?php

class strukturOrganisasiBkk extends Controller
{
    public function index()
    {
        $data['judul'] = 'Struktur Organisasi BKK';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('bkk/strukturOrganisasi', $data);
        $this->view('templates-user/footer');
    }
}
