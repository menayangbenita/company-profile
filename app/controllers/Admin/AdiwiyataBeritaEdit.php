<?php

class AdiwiyataBeritaEdit extends Controller
{
    private $model_name = "Adiwiyata";

    public function index($id)
    {
        $data['judul'] = 'Edit Berita Adiwiyata';
        $data['user'] = $this->user;
        $data['berita'] = $this->model("$this->model_name", 'BeritaAdiwiyata_model')->getAllData();
        $data['isiberita'] = $this->model("$this->model_name", 'BeritaAdiwiyata_model')->getDataById($id);

        if ($data['user']) {
            $this->view('templates-admin/header', $data);
            $this->view('admin/adiwiyata/BeritaAdiwiyataEdit', $data);
            $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }
    public function hapus($id)
    {
        if ($this->model("$this->model_name", 'BeritaAdiwiyata_model')->hapusData($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'AdiwiyataBeritaEdit');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'AdiwiyataBeritaEdit');
            exit;
        }
    }
    public function getUbah()
    {
        echo json_encode($this->model("$this->model_name", 'BeritaAdiwiyata_model')->getDataById($_POST['id']));
    }
    public function ubah()
    {
        if ($this->model("$this->model_name", 'BeritaAdiwiyata_model')->ubahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Diubah', 'success');
            header('Location: ' . BASEURL . 'AdminBerita');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Diubah', 'danger');
            header('Location: ' . BASEURL . 'AdminBerita');
            exit;
        }
    }
}
