<?php

class visiMisiAdiwiyata extends Controller
{
    public function index()
    {
        $data['judul'] = 'Visi & Misi Adiwiyata';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('adiwiyata/visiMisi', $data);
        $this->view('templates-user/footer', $data);
    }
}
