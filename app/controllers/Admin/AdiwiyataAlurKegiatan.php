<?php

class AdiwiyataAlurKegiatan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/adiwiyata/alurKegiatan', $data);
        $this->view('templates-admin/footer');
    }
}
