<?php

class BkkAlurKegiatan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Alur Kegiatan BKK';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/alurKegiatan', $data);
        $this->view('templates-admin/footer');
    }
}
