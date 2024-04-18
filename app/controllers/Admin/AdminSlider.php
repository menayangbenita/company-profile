<?php

class AdminSlider extends Controller
{
    private $model_name = "Admin";

    public function index()
    {
        $data['judul'] = 'Edit Slider';
        $data['user'] = $this->user; 
        $data['slider'] = $this->model("$this->model_name", 'Slider_model')->getAllData();

        $this->view('templates-admin/header', $data);
        $this->view('admin/slider', $data);
        $this->view('templates-admin/footer');
    }
    public function tambah()
    {
        if ($this->model("$this->model_name", 'Slider_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminSlider');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminSlider');
            exit;
        }
    }
    
    public function getUbah()
    {
        echo json_encode($this->model("$this->model_name", 'Slider_model')->getDataById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model("$this->model_name", 'Slider_model')->ubahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Diubah', 'success');
            header('Location: ' . BASEURL . 'AdminSlider');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Diubah', 'danger');
            header('Location: ' . BASEURL . 'AdminSlider');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model("$this->model_name", 'Slider_model')->hapusData($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'AdminSlider');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'AdminSlider');
            exit;
        }
    }
}