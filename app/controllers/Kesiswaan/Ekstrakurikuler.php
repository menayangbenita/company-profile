<?php

class ekstrakurikuler extends Controller
{
    public function index()
    {
        $data['judul'] = 'Ekstrakurikuler';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('kesiswaan/ekstrakurikuler', $data);
        $this->view('templates-user/footer');
    }
}
