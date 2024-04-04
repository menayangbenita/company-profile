<?php

class AdiwiyataVisiMisi extends Controller
{
    public function index()
    {
        $data['judul'] = 'Visi & Misi Adiwiyata';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/adiwiyata/visiMisi', $data);
        $this->view('templates-admin/footer');
    }
}
