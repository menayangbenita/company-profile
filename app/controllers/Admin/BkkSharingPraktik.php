<?php

class BkksharingPraktik extends Controller
{
    public function index()
    {
        $data['judul'] = 'Sharing Praktik Baik';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/sharingPraktikBaik', $data);
        $this->view('templates-admin/footer');
    }
}
