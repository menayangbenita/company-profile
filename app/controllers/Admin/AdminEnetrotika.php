<?php

class AdminEnetrotika extends Controller
{
    public function index()
    {
        $data['judul'] = 'Enetrotika';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/kk/enetrotika', $data);
        $this->view('templates-admin/footer');
    }
}
