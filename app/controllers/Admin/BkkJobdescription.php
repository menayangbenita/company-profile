<?php

class BkkJobdescription extends Controller
{
    public function index()
    {
        $data['judul'] = 'Jobdescription';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/jobdescription', $data);
        $this->view('templates-admin/footer');
    }
}
