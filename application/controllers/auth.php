<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function adminLogin()
    {
        $this->load->view('admin/login');
    }
    public function siswaLogin()
    {
        echo "Siswa Login";
    }
}
