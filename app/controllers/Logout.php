<?php

class Logout extends Controller
{
	protected $model_name = 'Login';

	public function index()
	{
        $data['user'] = $this->user; 


		try {
			$this->model("Login", "Login_model")->logout(Cookie::get_jwt()->sub) > 0;
			Cookie::delete_jwt();
			Flasher::setFlash('BERHASIL', 'Logout', 'success');
            header("Location: " . BASEURL);
		} catch (Exception) {
			Flasher::setFlash('GAGAL', 'Logout', 'danger');
            header("Location: " . BASEURL . "dashboard");
		}
		header("Location: " . BASEURL);
		exit;
	}
}
