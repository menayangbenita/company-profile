<?php

class alurKegiatanBkk extends Controller
{
    public function index()
    {
        $data['judul'] = 'Alur Kegiatan BKK';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('bkk/alurKegiatan', $data);
        $this->view('templates-user/footer');
    }
}
