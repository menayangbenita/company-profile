<?php

class BkkVisiMisi extends Controller
{
    public function index()
    {
        $data['judul'] = 'Visi & Misi BKK';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/visiMisi', $data);
        $this->view('templates-admin/footer');
    }
}
