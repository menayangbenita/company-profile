<?php

class inovasiProgramBkk extends Controller
{
    public function index()
    {
        $data['judul'] = 'Inovasi Program BKK';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('bkk/inovasiProgram', $data);
        $this->view('templates-user/footer');
    }
}
