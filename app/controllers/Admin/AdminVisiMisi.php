<?php

class AdminVisiMisi extends Controller
{
    public function index()
    {
        $data['judul'] = 'Visi & Misi';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/visiMisi', $data);
        $this->view('templates-admin/footer');
    }
}
