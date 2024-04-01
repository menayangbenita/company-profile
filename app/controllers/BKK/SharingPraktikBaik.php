<?php

class sharingPraktikBaik extends Controller
{
    public function index()
    {
        $data['judul'] = 'Sharing Praktik Baik';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('bkk/sharingPraktikBaik', $data);
        $this->view('templates-user/footer');
    }
}
