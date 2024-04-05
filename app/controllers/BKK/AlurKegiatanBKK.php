<?php

class alurKegiatanBkk extends Controller
{
    private $model_name= "Bkk";
    public function index()
    {
        $data['judul'] = 'Alur Kegiatan BKK';
        $data['AlurBkk'] = $this->model("$this->model_name", 'AlurKegiatanBkk_model')->getMaxId();

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('bkk/alurKegiatan', $data);
        $this->view('templates-user/footer', $data);
    }
}
