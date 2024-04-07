<?php

class AdminElektronikIndustri extends Controller
{
    public function index()
    {
        $data['judul'] = 'Elektronik Industri';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/kk/ei', $data);
        $this->view('templates-admin/footer');
    }
}
