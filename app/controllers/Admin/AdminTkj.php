<?php

class AdminTkj extends Controller
{
    private $model_name = "KK";

    public function index()
    {
        $data['judul'] = 'TKJ';
        $data['dpk'] = $this->model("$this->model_name", 'Tkj_model')->getAllDpk();
        $data['kk'] = $this->model("$this->model_name", 'Tkj_model')->getAllKk();
        $data['user'] = $this->user; 

        $this->view('templates-admin/header', $data);
        $this->view('admin/kk/tkj', $data);
        $this->view('templates-admin/footer');
    }
    
    public function tambah()
    {
        if ($this->model("$this->model_name", 'Tkj_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminTkj');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminTkj');
            exit;
        }
    }

    public function tambahDpk()
    {
        if ($this->model("$this->model_name", 'Tkj_model')->tambahDataDpk($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminTkj');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminTkj');
            exit;
        }
    }

    public function tambahKk()
    {
        if ($this->model("$this->model_name", 'Tkj_model')->tambahDataKk($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdminTkj');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdminTkj');
            exit;
        }
    }

    public function hapusDpk($id)
    {
        if ($this->model("$this->model_name", 'Tkj_model')->hapusDataDpk($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'AdminTkj');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'AdminTkj');
            exit;
        }
    }

    public function hapusKk($id)
    {
        if ($this->model("$this->model_name", 'Tkj_model')->hapusDataKk($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'AdminTkj');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'AdminTkj');
            exit;
        }
    }

    public function getUbahDpk()
    {
        echo json_encode($this->model("$this->model_name", 'Tkj_model')->getDataByDpk($_POST['id']));
    }

    public function getUbahKk()
    {
        echo json_encode($this->model("$this->model_name", 'Tkj_model')->getDataByKk($_POST['id']));
    }

    public function ubahDpk()
    {
        if ($this->model("$this->model_name", 'Tkj_model')->ubahDataDpk($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Diubah', 'success');
            header('Location: ' . BASEURL . 'AdminTkj');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Diubah', 'danger');
            header('Location: ' . BASEURL . 'AdminTkj');
            exit;
        }
    }
    public function ubahKk()
    {
        if ($this->model("$this->model_name", 'Tkj_model')->ubahDataKk($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Diubah', 'success');
            header('Location: ' . BASEURL . 'AdminTkj');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Diubah', 'danger');
            header('Location: ' . BASEURL . 'AdminTkj');
            exit;
        }
    }

}
