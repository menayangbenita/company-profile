<?php

class rekapitulasiMou extends Controller
{
    public function index()
    {
        $data['judul'] = 'Rekapitulasi MOU';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('bkk/rekapitulasiMou', $data);
        $this->view('templates-user/footer');
    }
}
