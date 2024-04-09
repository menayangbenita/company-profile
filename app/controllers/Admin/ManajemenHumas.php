<?php

class ManajemenHumas extends Controller
{
    public $model_name = "Manajemen";

    public function index()
    {
        $data['judul'] = 'Waka Humas';
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/manajemen/humas', $data);
        $this->view('templates-admin/footer');
    }

    public function tambah()
    {
        if ($this->model("$this->model_name", 'Humas_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'ManajemenHumas');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'ManajemenWakaHumas');
            exit;
        }
    }

    public function tambahIndustri()
    {
        if ($this->model("$this->model_name", 'Humas_model')->tambahDataIndustri($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'ManajemenHumas');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'ManajemenHumas');
            exit;
        }
    }
}
