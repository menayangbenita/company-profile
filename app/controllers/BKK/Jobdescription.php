<?php

class jobdescription extends Controller
{
    public function index()
    {
        $data['judul'] = 'Jobdescription';

        // $data['user'] = $this->user; @ if already using jwt

        $this->view('templates-user/header', $data);
        $this->view('bkk/jobdescription', $data);
        $this->view('templates-user/footer');
    }
}
