<?php

class EkstrakurikulerDokumentasi extends Controller
{
    private $model_name = "Kesiswaan";

    public function index()
    {
        $data['judul'] = 'Dokumentasi Ekstrakurikuler';
        $data['dokum'] = $this->model("$this->model_name", 'DokumEkstra_model')->getAllData();
        $data['user'] = $this->user;

        $this->view('templates-admin/header', $data);
        $this->view('admin/kesiswaan/dokumentasiEkstrakurikuler', $data);
        $this->view('templates-admin/footer', $data);
    }
    
    public function tambah()
    {
        if ($this->model("$this->model_name", 'DokumEkstra_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'EkstrakurikulerDokumentasi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'EkstrakurikulerDokumentasi');
            exit;
        }
    }

}
