<?php

class AdminGls extends Controller
{
    private $model_name = "Kesiswaan";

    public function index()
    {
        $data['judul'] = 'Gerakan Literasi Sekolah';
        $data['user'] = $this->user;
        $data['Gls'] = $this->model("$this->model_name", 'Gls_model')->getAllData();

        if ($data['user']) {
            $this->view('templates-admin/header', $data);
            $this->view('admin/kesiswaan/gls', $data);
            $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }
    public function tambah()
    {
        if ($this->model("$this->model_name", 'Gls_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminGls');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminGls');
            exit;
        }
    }
}