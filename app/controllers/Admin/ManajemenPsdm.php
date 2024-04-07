<?php

class ManajemenPsdm extends Controller
{
    public function index()
    {
        $data['judul'] = 'Waka PSDM';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/manajemen/psdm', $data);
        $this->view('templates-admin/footer');
    }
}
