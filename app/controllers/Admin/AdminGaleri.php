<?php

class AdminGaleri extends Controller
{
    public $model_name = "Admin";

    public function index()
    {
        $data['judul'] = 'Profil Sekolah';
        $data['kategori'] = $this->model("$this->model_name", 'Galeri_model')->getAllKategori();
        $data['galeri'] = $this->model("$this->model_name", 'Galeri_model')->getAllData();
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/galeri', $data);
        $this->view('templates-admin/footer');
    }

    public function tambah()
    {
        if ($this->model("$this->model_name", 'Galeri_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminGaleri');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminGaleri');
            exit;
        }
    }

    public function kategori()
    {
        if ($this->model("$this->model_name", 'Galeri_model')->tambahDataTerdahulu($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminGaleri');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminGaleri');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model("$this->model_name", 'Galeri_model')->hapusData($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'AdminGaleri');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'AdminGaleri');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model("$this->model_name", 'Galeri_model')->getDataById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model("$this->model_name", 'Galeri_model')->ubahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Diubah', 'success');
            header('Location: ' . BASEURL . 'AdminGaleri');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Diubah', 'danger');
            header('Location: ' . BASEURL . 'AdminGaleri');
            exit;
        }
    }
}
