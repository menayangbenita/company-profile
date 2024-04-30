<?php

class EkstrakurikulerDokumentasi extends Controller
{
    private $model_name = "Kesiswaan";

    public function index()
    {
        $data['judul'] = 'Dokumentasi Ekstrakurikuler';
        $data['isi'] = $this->model("$this->model_name", 'DokumentasiEkstra_model')->getAllIsi();
        $data['galeri'] = $this->model("$this->model_name", 'DokumentasiEkstra_model')->getAllDokum();
        $data['user'] = $this->user;

        if ($data['user']) {
            $this->view('templates-admin/header', $data);
        $this->view('admin/kesiswaan/dokumentasiEkstrakurikuler', $data);
        $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }
    

    public function tambahIsi()
    {
        if ($this->model("$this->model_name", 'DokumentasiEkstra_model')->tambahDataIsi($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'EkstrakurikulerDokumentasi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'EkstrakurikulerDokumentasi');
            exit;
        }
    }

    public function tambahGaleri()
    {
        if ($this->model("$this->model_name", 'DokumentasiEkstra_model')->tambahDataGaleri($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'EkstrakurikulerDokumentasi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'EkstrakurikulerDokumentasi');
            exit;
        }
    }
    
    public function hapusIndus($id)
    {
        if ($this->model("$this->model_name", 'DokumentasiEkstra_model')->hapusDataIndus($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'EkstrakurikulerDokumentasi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'EkstrakurikulerDokumentasi');
            exit;
        }
    }
    
    public function hapusGaleri($id)
    {
        if ($this->model("$this->model_name", 'DokumentasiEkstra_model')->hapusDataGaleri($id) > 0) {
            Flasher::setFlash('BERHASIL', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'EkstrakurikulerDokumentasi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'EkstrakurikulerDokumentasi');
            exit;
        }
    }

    public function getUbahIndus()
    {
        echo json_encode($this->model("$this->model_name", 'DokumentasiEkstra_model')->getDataById($_POST['id']));
    }

    public function ubahIndus()
    {
        if ($this->model("$this->model_name", 'DokumentasiEkstra_model')->ubahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Diubah', 'success');
            header('Location: ' . BASEURL . 'EkstrakurikulerDokumentasi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Diubah', 'danger');
            header('Location: ' . BASEURL . 'EkstrakurikulerDokumentasi');
            exit;
        }
    }
}
