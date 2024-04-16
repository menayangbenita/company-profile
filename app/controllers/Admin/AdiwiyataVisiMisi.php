<?php

class AdiwiyataVisiMisi extends Controller
{
    private $model_name = "Adiwiyata";

    public function index()
    {
        $data['judul'] = 'Visi & Misi Adiwiyata';
        $data['misi'] = $this->model("$this->model_name", 'VisiMisiAdiwiyata_model')->getAllMisi();

        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/adiwiyata/visiMisi', $data);
        $this->view('templates-admin/footer');
    }
    public function tambah()
    {
        if ($this->model("$this->model_name", 'VisiMisiAdiwiyata_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdiwiyataVisiMIsi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdiwiyataVisiMIsi');
            exit;
        }
    }

    public function tambahMisi()
    {
        if ($this->model("$this->model_name", 'VisiMisiAdiwiyata_model')->tambahDataMisi($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdiwiyataVisiMIsi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdiwiyataVisiMIsi');
            exit;
        }
    }

    public function hapusMisi($id)
    {
        if ($this->model("$this->model_name", 'VisiMisiAdiwiyata_model')->hapusData($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'AdiwiyataVisiMIsi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'AdiwiyataVisiMIsi');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model("$this->model_name", 'VisiMisiAdiwiyata_model')->getDataById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model("$this->model_name", 'VisiMisiAdiwiyata_model')->ubahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Diubah', 'success');
            header('Location: ' . BASEURL . 'AdiwiyataVisiMIsi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Diubah', 'danger');
            header('Location: ' . BASEURL . 'AdiwiyataVisiMIsi');
            exit;
        }
    }
}


