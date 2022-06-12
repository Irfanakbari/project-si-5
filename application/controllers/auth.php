<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function adminLogin()
    {
        $this->load->view('admin/login');
        $this->load->library('form_validation');
    }
    public function register()
    {
        $this->load->view('admin/register');
        $this->load->library('form_validation');
    }
    public function prosesLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if (!$username || !$password) {
            echo json_encode(['status' => 'failed', 'message' => 'Username dan Password tidak boleh kosong']);
            return;
        }
        $this->load->model('auth_model');
        $user = $this->auth_model->admin_login($username, $password);
        if ($user) {
             echo json_encode(['status' => 'success', 'message' => 'Login berhasil']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Login gagal']);
        }
        return;
    }
    public function prosesRegister()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password = password_hash($password, PASSWORD_DEFAULT);
        $nama = $this->input->post('nama');
        if (!$username || !$password) {
            echo json_encode(['status' => 'failed', 'message' => 'Username dan Password tidak boleh kosong']);
            return;
        }
        $this->load->model('auth_model');
        $user = $this->auth_model->register($username, $password,$nama);
        if ($user) {
             echo json_encode(['status' => 'success', 'message' => 'Register berhasil']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Register gagal']);
        }
        return;
    }
    public function adminLogout()
    {
        $this->load->model('auth_model');
        if ($this->auth_model->admin_logout()) {
            redirect('admin/login');
        }
        return;
    }
    public function adminRegister()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if (!$username || !$password) {
            echo json_encode(['status' => 'failed', 'message' => 'Username dan Password tidak boleh kosong']);
            return;
        }
        $this->load->model('auth_model');
        $user = $this->auth_model->admin_register($username, $password);
        if ($user) {
            echo json_encode(['status' => 'success', 'message' => 'Register berhasil']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Register gagal']);
        }
    }
    public function siswaLogin()
    {
        $nisn = $this->input->post('nisn');
        $rules = [
            [
                'field' => 'nisn',
                'label' => 'NISN',
                'rules' => 'required|numeric|min_length[5]',
                'errors' => [
                    'required' => 'NISN tidak boleh kosong',
                    'numeric' => 'NISN harus berupa angka',
                    'min_length' => 'NISN harus berupa 5 digit atau lebih',
                ]
            ]
        ];
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == false) {
            echo json_encode(['status' => 'failed', 'message' => $this->form_validation->error_array()]);
            return;
        }
        $this->load->model('siswa_model');
        $user = $this->siswa_model->siswa_login($nisn);
        if ($user) {
            echo json_encode(['status' => 'success', 'message' => 'Login berhasil']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Login gagal']);
        }
    }
    public function siswaLogout()
    {
        $this->load->model('siswa_model');
        if ($this->siswa_model->siswa_logout()) {
            redirect('/');
        }
        return;
    }
}
