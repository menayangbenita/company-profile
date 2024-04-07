<?php

class ManajemenKurikulum extends Controller
{
    public function index()
    {
        $data['judul'] = 'Waka Kurikulum';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/manajemen/kurikulum', $data);
        $this->view('templates-admin/footer');
    }
}
