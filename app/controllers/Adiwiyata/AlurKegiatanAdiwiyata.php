<?php

class AlurKegiatanAdiwiyata extends Controller
{
    private $model_name = "Adiwiyata";

    public function index()
    {
        $data['judul'] = 'Alur Kegiatan Adiwiyata';
        $data['AlurAdiwiyata'] = $this->model("$this->model_name", 'AlurKegiatanAdiwiyata_model')->getMaxId();


        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('adiwiyata/alurKegiatan', $data);
        $this->view('templates-user/footer', $data);
    }
}
