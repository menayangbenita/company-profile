<?php

class AdminPrestasi extends Controller
{
    public $model_name = "Admin";

    public function index()
    {
        $data['judul'] = 'Prestasi';
        $data['prestasi'] = $this->model("$this->model_name", 'Prestasi_model')->getAllData();
        $data['user'] = $this->user;

        if ($data['user']) {
            $this->view('templates-admin/header', $data);
            $this->view('admin/prestasi', $data);
            $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }

    public function tambah()
    {
        if ($this->model("$this->model_name", 'Prestasi_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminPrestasi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminPrestasi');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model("$this->model_name", 'Prestasi_model')->hapusData($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'AdminPrestasi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'AdminPrestasi');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model("$this->model_name", 'Prestasi_model')->getDataById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model("$this->model_name", 'Prestasi_model')->ubahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Diubah', 'success');
            header('Location: ' . BASEURL . 'AdminPrestasi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Diubah', 'danger');
            header('Location: ' . BASEURL . 'AdminPrestasi');
            exit;
        }
    }
}
