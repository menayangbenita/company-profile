<?php

class AdiwiyataAlurKegiatan extends Controller
{
    private $model_name = "Adiwiyata";

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->user;
        $data['AlurAdiwiyata'] = $this->model("$this->model_name", 'AlurKegiatanAdiwiyata_model')->getAllData();

        if ($data['user']) {
            $this->view('templates-admin/header', $data);
            $this->view('admin/adiwiyata/alurKegiatan', $data);
            $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }
    public function tambah()
    {
        if ($this->model("$this->model_name", 'AlurKegiatanAdiwiyata_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . '/AdiwiyataAlurKegiatan');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . '/AdiwiyataAlurKegiatan');
            exit;
        }
    }
}
