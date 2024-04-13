<?php

class AdminVisiMisi extends Controller
{
    private $model_name = "Admin";

    public function index()
    {
        $data['judul'] = 'Visi & Misi';
        $data['misi'] = $this->model("$this->model_name", 'VisiMisi_model')->getAllMisi();
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

    public function tambahMisi()
    {
        if ($this->model("$this->model_name", 'VisiMisi_model')->tambahDataMisi($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminVisiMisi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminVisiMisi');
            exit;
        }
    }

    public function hapusMisi($id)
    {
        if ($this->model("$this->model_name", 'VisiMisi_model')->hapusData($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'AdminVisiMisi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'AdminVisiMisi');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model("$this->model_name", 'VisiMisi_model')->getDataById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model("$this->model_name", 'VisiMisi_model')->ubahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Diubah', 'success');
            header('Location: ' . BASEURL . 'AdminVisiMisi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Diubah', 'danger');
            header('Location: ' . BASEURL . 'AdminVisiMisi');
            exit;
        }
    }
}
