<?php

class ManajemenKesiswaan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Waka Kesiswaan';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/manajemen/kesiswaan', $data);
        $this->view('templates-admin/footer');
    }
}
