<?php

class Dashboard extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->user; 

        if ($data['user']) {
            $this->view('templates-admin/header', $data);
            $this->view('admin/index', $data);
            $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL . 'Forbidden');
        }
    }
}
