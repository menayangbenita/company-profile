<?php

class UbahProfil extends Controller
{
    public $model_name = "Login";

    public function index()
    {
        $data['judul'] = 'Ubah Profil';
        $data['user'] = $this->user;
        $data['useer'] = $this->model("$this->model_name", 'Login_model')->getAllData();
        if ($data['user']) {
            $this->view('templates-admin/header', $data);
        $this->view('admin/ubahProfil', $data);
        $this->view('templates-admin/footer');
        } else {
            header('Location: ' . BASEURL);
        }
    }

    public function update()
	{
		if ($this->model("$this->model_name", "Login_model")->changePassword($_POST['id'], $_POST) > 0) {
			$payload = [
				'sub' => $this->user['id'],
				'name' => $this->user['username'],
				'password' => hash('sha256', $_POST['new_password']),
				'exp' =>  time() + (7 * 24 * 60 * 60) // Token expired after 1 day
			];
			Cookie::create_jwt($payload, $payload['exp']);

			Flasher::setFlash('BERHASIL', 'Diubah', 'success');
		} else {
			Flasher::setFlash('GAGAL', 'Diubah', 'danger');
		}
		header("Location: " . BASEURL . "UbahProfil");
		exit;
	}
}
