<?php

class AdminRpl extends Controller
{
    public function index()
    {
        $data['judul'] = 'RPL';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/kk/rpl', $data);
        $this->view('templates-admin/footer');
    }
}
