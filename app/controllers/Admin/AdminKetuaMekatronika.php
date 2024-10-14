<?php

class AdminKetuaMekatronika extends Controller
{
    public $model_name = "KK";

    public function index()
    {
        $data['judul'] = 'Ketua Jurusan Mekatronika';
        $data['KetuaMeka'] = $this->model("$this->model_name", 'KetuaMekatronika_model')->getAllData();
        $data['user'] = $this->user;

        if ($data['user']) {
            $this->view('templates-admin/header', $data);
            $this->view('admin/kk/KetuaMekatronika', $data);
            $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }

    public function tambah()
    {
        if ($this->model("$this->model_name", 'KetuaMekatronika_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminKetuaMekatronika');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminKetuaMekatronika');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model("$this->model_name", 'KetuaMekatronika_model')->hapusData($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'AdminKetuaMekatronika');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'AdminKetuaMekatronika');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model("$this->model_name", 'KetuaMekatronika_model')->getDataById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model("$this->model_name", 'KetuaMekatronika_model')->ubahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Diubah', 'success');
            header('Location: ' . BASEURL . 'AdminKetuaMekatronika');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Diubah', 'danger');
            header('Location: ' . BASEURL . 'AdminKetuaMekatronika');
            exit;
        }
    }
}
