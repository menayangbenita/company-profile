<?php

class ManajemenKurikulum extends Controller
{
    public $model_name = "Manajemen";

    public function index()
    {
        $data['judul'] = 'Waka Kurikulum';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/manajemen/kurikulum', $data);
        $this->view('templates-admin/footer');
    }
    
    public function tambah()
    {
        if ($this->model("$this->model_name", 'Kurikulum_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'ManajemenKurikulum');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'WakaKurikulum');
            exit;
        }
    }
}
