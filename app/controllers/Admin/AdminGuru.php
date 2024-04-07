<?php

class AdminGuru extends Controller
{
    public function index()
    {
        $data['judul'] = 'Guru';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/guru', $data);
        $this->view('templates-admin/footer');
    }
}
