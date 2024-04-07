<?php

class ManajemenSarpras extends Controller
{
    public function index()
    {
        $data['judul'] = 'Waka Sarpras';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/manajemen/sarpras', $data);
        $this->view('templates-admin/footer');
    }
}
