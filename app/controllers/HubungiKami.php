<?php

class hubungiKami extends Controller
{
    private $model_name = "Admin";
    public $model_namee = "Berita";


    public function index()
    {
        $data['judul'] = 'Kotak Surat';
        $data['footer'] = $this->model("$this->model_name", 'Footer_model')->getMaxId();
        $data['berita'] = $this->model("$this->model_namee", 'Berita_model')->getLatestNews();

        $this->view('templates-user/header', $data);
        $this->view('hubungiKami', $data);
        $this->view('templates-user/footer', $data);
    }
    public function tambah()
    {
        if ($this->model("$this->model_name", 'HubungiKami_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Dikirim', 'success');
            header('Location: ' . BASEURL . 'HubungiKami');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Dikirim', 'danger');
            header('Location: ' . BASEURL . 'HubungiKami');
            exit;
        }
    }
}
