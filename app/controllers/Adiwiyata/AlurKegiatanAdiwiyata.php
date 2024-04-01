<?php

class alurKegiatanAdiwiyata extends Controller
{
    public function index()
    {
        $data['judul'] = 'Alur Kegiatan Adiwiyata';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('adiwiyata/alurKegiatan', $data);
        $this->view('templates-user/footer');
    }
}
