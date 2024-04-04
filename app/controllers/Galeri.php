<?php

class galeri extends Controller
{
    public function index()
    {
        $data['judul'] = 'Galeri';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('galeri', $data);
        $this->view('templates-user/footer', $data);
    }
}
