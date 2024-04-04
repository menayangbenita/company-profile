<?php

class BkkProgramKerja extends Controller
{
    public function index()
    {
        $data['judul'] = 'Program Kerja';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/programKerja', $data);
        $this->view('templates-admin/footer');
    }
}
