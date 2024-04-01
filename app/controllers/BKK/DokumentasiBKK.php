<?php

class dokumentasiBkk extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dokumentasi BKK';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('bkk/dokumentasi', $data);
        $this->view('templates-user/footer');
    }
}
