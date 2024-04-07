<?php

class AdminTkj extends Controller
{
    public function index()
    {
        $data['judul'] = 'TKJ';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/kk/tkj', $data);
        $this->view('templates-admin/footer');
    }
}
