<?php

class AdminGls extends Controller
{
    public function index()
    {
        $data['judul'] = 'Gerakan Literasi Sekolah';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/kesiswaan/gls', $data);
        $this->view('templates-admin/footer');
    }
}
