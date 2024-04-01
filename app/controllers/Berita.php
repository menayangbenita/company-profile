<?php

class berita extends Controller
{
    public function index()
    {
        $data['judul'] = 'Berita';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('berita/index', $data);
        $this->view('templates-user/footer');
    }

    public function berita()
    {
        $data['judul'] = 'Berita';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('berita/berita', $data);
        $this->view('templates-user/footer');
    }
}
