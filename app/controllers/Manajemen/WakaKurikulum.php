<?php

class wakaKurikulum extends Controller
{
    public function index()
    {
        $data['judul'] = 'Waka Kurikulum';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('manajemen/kurikulum', $data);
        $this->view('templates-user/footer', $data);
    }
}
