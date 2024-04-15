<?php

class AdiwiyataOrganisasi extends Controller
{
    private $model_name = "Adiwiyata";

    public function index()
    {
        $data['judul'] = 'Organisasi Adiwiyata';
        $data['user'] = $this->user; 
        $data['organisasiadiwiyata'] = $this->model("$this->model_name", 'OrganisasiAdiwiyata_model')->getAllData();


        $this->view('templates-admin/header', $data);
        $this->view('admin/adiwiyata/organisasi', $data);
        $this->view('templates-admin/footer');
    }
    public function tambah()
    {
        if ($this->model("$this->model_name", 'OrganisasiAdiwiyata_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Ditambah', 'success');
            header('Location: ' . BASEURL . 'AdiwiyataOrganisasi');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Ditambah', 'danger');
            header('Location: ' . BASEURL . 'AdiwiyataOrganisasi');
            exit;
        }
    }
}
