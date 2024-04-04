<?php

class BkkInovasiProgram extends Controller
{
    public function index()
    {
        $data['judul'] = 'Inovasi Program';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/inovasiProgram', $data);
        $this->view('templates-admin/footer');
    }
}
