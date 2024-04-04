<?php

class BkkrekapitulasiMou extends Controller
{
    public function index()
    {
        $data['judul'] = 'Rekapitulasi MOU';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/rekapitulasiMou', $data);
        $this->view('templates-admin/footer');
    }
}
