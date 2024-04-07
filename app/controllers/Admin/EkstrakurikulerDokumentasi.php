<?php

class EkstrakurikulerDokumentasi extends Controller
{
    private $model_name = "Kesiswaan";

    public function index()
    {
        $data['judul'] = 'Dokumentasi Ekstrakurikuler';
        $data['user'] = $this->user; 
        $data['DokumEkstra'] = $this->model("$this->model_name", 'DokumentasiEkstra_model')->getAllData();


        $this->view('templates-admin/header', $data);
        $this->view('admin/kesiswaan/dokumentasiEkstrakurikuler', $data);
        $this->view('templates-admin/footer');
    }
    public function tambah()
    {
        if ($this->model("$this->model_name", 'DokumentasiEkstra_model')->tambahData($_POST) > 0) {
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
