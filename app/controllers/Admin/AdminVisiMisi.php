<?php

class AdminVisiMisi extends Controller
{
    private $model_name = "Admin";

    public function index()
    {
        $data['judul'] = 'Visi & Misi';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/visiMisi', $data);
        $this->view('templates-admin/footer');
    }

    public function tambah()
    {
        if ($this->model("$this->model_name", 'VisiMisi_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminVisiMisi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminVisiMisi');
            exit;
        }
    }
}
