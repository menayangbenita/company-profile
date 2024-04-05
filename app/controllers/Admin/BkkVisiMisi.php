<?php

class BkkVisiMisi extends Controller
{
    private $model_name = "Bkk";
    public function index()
    {
        $data['judul'] = 'Visi & Misi BKK';
        $data['user'] = $this->user; 
        $data['BkkVisiMisi'] = $this->model("$this->model_name", 'VisiMisiBkk_model')->getAllData();


        $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/visiMisi', $data);
        $this->view('templates-admin/footer');
    }
   
    public function tambah()
    {
        if ($this->model("$this->model_name", 'VisiMisiBkk_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . '/BkkvisiMisi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . '/BkkvisiMisi');
            exit;
        }
    }
}