<?php

class UploadImage extends Controller
{
    public $model_name = "Admin";

    public function tambah()
    {
        $this->model("$this->model_name", 'Image_model')->tambahData($_POST) > 0;
    }
}
