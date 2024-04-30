<?php

class User extends Controller
{
    public $model_name = "Login";

    public function index()
    {
        $data['judul'] = 'Tambah User Baru';
        $data['user'] = $this->user; 
        $data['useer'] = $this->model("$this->model_name", 'Login_model')->getAllData();
        if ($data['user']) {
            $this->view('templates-admin/header', $data);
        $this->view('admin/tambahUser', $data);
        $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }

    public function process()
    {
        if ($this->model("$this->model_name", 'Login_model')->register($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'User');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'User');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model("$this->model_name", 'Login_model')->hapusData($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'User');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'User');
            exit;
        }
    }
}
