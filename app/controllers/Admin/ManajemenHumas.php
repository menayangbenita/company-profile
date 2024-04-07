<?php

class ManajemenHumas extends Controller
{
    public function index()
    {
        $data['judul'] = 'Waka Humas';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/manajemen/humas', $data);
        $this->view('templates-admin/footer');
    }
}
