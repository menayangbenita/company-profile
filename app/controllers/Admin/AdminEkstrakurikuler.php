<?php

class AdminEkstrakurikuler extends Controller
{
    public function index()
    {
        $data['judul'] = 'Ekstrakurikuler';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/kesiswaan/Ekstrakurikuler', $data);
        $this->view('templates-admin/footer');
    }
}
