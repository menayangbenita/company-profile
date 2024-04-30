<?php

class BkkVisiMisi extends Controller
{
    private $model_name = "Bkk";
    public function index()
    {
        $data['judul'] = 'Visi & Misi BKK';
        $data['misi'] = $this->model("$this->model_name", 'VisiMisiBkk_model')->getAllMisi();
        $data['user'] = $this->user; 

        if ($data['user']) {
            $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/visiMisi', $data);

        $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }

   
    public function tambah()
    {
        if ($this->model("$this->model_name", 'VisiMisiBkk_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'BkkvisiMisi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'BkkvisiMisi');
            exit;
        }
    }
    public function tambahMisi()
    {
        if ($this->model("$this->model_name", 'VisiMisiBkk_model')->tambahDataMisi($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'BkkvisiMisi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'BkkvisiMisi');
            exit;
        }
    }

    public function hapusMisi($id)
    {
        if ($this->model("$this->model_name", 'VisiMisiBkk_model')->hapusData($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'BkkvisiMisi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'BkkvisiMisi');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model("$this->model_name", 'VisiMisiBkk_model')->getDataById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model("$this->model_name", 'VisiMisiBkk_model')->ubahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Diubah', 'success');
            header('Location: ' . BASEURL . 'BkkvisiMisi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Diubah', 'danger');
            header('Location: ' . BASEURL . 'BkkvisiMisi');
            exit;
        }
    }
}