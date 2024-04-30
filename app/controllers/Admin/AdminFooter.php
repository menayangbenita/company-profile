<?php

class AdminFooter extends Controller
{
    private $model_name = "Admin";

    public function index()
    {
        $data['judul'] = 'Edit Footer';
        $data['user'] = $this->user;
        $data['footer'] = $this->model("$this->model_name", 'Footer_model')->getMaxId();

        if ($data['user']) {
            $this->view('templates-admin/header', $data);
            $this->view('admin/footer', $data);
            $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }
    public function tambah()
    {
        if ($this->model("$this->model_name", 'Footer_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminFooter');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminFooter');
            exit;
        }
    }
}