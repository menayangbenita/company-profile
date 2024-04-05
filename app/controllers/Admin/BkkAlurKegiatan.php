<?php

class BkkAlurKegiatan extends Controller
{
    private $model_name = "Bkk";
    public function index()
    {
        $data['judul'] = 'Alur Kegiatan BKK';
        $data['user'] = $this->user;
        $data['AlurBkk'] = $this->model("$this->model_name", 'AlurKegiatanBkk_model')->getAllData();


        $this->view('templates-admin/header', $data);
        $this->view('admin/bkk/alurKegiatan', $data);
        $this->view('templates-admin/footer');
    }
    public function tambah()
    {
        if ($this->model("$this->model_name", 'AlurKegiatanBkk_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . '/BkkAlurKegiatan');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . '/BkkAlurKegiatan');
            exit;
        }
    }
}
