<?php

class BeritaEdit extends Controller
{
    private $model_name = "berita";

    public function index($id)
    {
        $data['judul'] = 'Edit Berita';
        $data['user'] = $this->user;
        $data['berita'] = $this->model("$this->model_name", 'Berita_model')->getAllData();
        $data['isiberita'] = $this->model("$this->model_name", 'Berita_model')->getDataById($id);

        if ($data['user']) {
            $this->view('templates-admin/header', $data);
            $this->view('admin/beritaEdit', $data);
            $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }
    public function hapus($id)
    {
        if ($this->model("$this->model_name", 'Berita_model')->hapusData($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'beritaEdit');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'beritaEdit');
            exit;
        }
    }
    public function getUbah()
    {
        echo json_encode($this->model("$this->model_name", 'Berita_model')->getDataById($_POST['id']));
    }
    public function ubah()
    {
        if ($this->model("$this->model_name", 'Berita_model')->ubahData($_POST) > 0) {
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
