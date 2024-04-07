<?php

class ManajemenTu extends Controller
{
    public function index()
    {
        $data['judul'] = 'Waka Tata Usaha';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/manajemen/tu', $data);
        $this->view('templates-admin/footer');
    }
}
