<?php

class wakaTu extends Controller
{
    public function index()
    {
        $data['judul'] = 'Waka TU';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('manajemen/tu', $data);
        $this->view('templates-user/footer', $data);
    }
}
