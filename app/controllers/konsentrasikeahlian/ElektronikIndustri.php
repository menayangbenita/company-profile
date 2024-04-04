<?php

class elektronikIndustri extends Controller
{
    public function index()
    {
        $data['judul'] = 'Elektronik Industri';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('kompetensikeahlian/elektronikIndustri', $data);
        $this->view('templates-user/footer', $data);
    }
}
