<?php

class BkkInovasiProgram extends Controller
{
    private $model_name = "Bkk";

    public function index()
    {
        $data['judul'] = 'Inovasi Program';
        $data['user'] = $this->user; 
        $data['Inovasi'] = $this->model("$this->model_name", 'InovasiProgram_model')->getAllData();


        $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/inovasiProgram', $data);
        $this->view('templates-admin/footer');
    }
   
    public function tambah()
    {
        if ($this->model("$this->model_name", 'InovasiProgram_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . '/BkkInovasiProgram');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . '/BkkInovasiProgram');
            exit;
        }
    }
}
