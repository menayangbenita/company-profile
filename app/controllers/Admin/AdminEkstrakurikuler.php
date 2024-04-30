<?php

class AdminEkstrakurikuler extends Controller
{
    private $model_name = "Kesiswaan";

    public function index()
    {
        $data['judul'] = 'Ekstrakurikuler';
        $data['user'] = $this->user;
        $data['esktra'] = $this->model("$this->model_name", 'Ekstra_model')->getAllData();

        if ($data['user']) {
            $this->view('templates-admin/header', $data);
            $this->view('admin/kesiswaan/Ekstrakurikuler', $data);
            $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }
    public function tambah()
    {
        if ($this->model("$this->model_name", 'Ekstra_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminEkstrakurikuler');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminEkstrakurikuler');
            exit;
        }
    }
}
