<?php

class BkkProgramKerja extends Controller
{
    private $model_name = "Bkk";

    public function index()
    {
        $data['judul'] = 'Program Kerja';
        $data['user'] = $this->user; 
        $data['ProkerBkk'] = $this->model("$this->model_name", 'ProgramKerjaBkk_model')->getAllData();


        if ($data['user']) {
            $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/programKerja', $data);
        $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }
   
    public function tambah()
    {
        if ($this->model("$this->model_name", 'ProgramKerjaBkk_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . '/BkkprogramKerja');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . '/BkkprogramKerja');
            exit;
        }
    }
}
