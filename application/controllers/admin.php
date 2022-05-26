<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('admin/login');
		}
	}
	public function index()
	{
		$this->load->view('admin/template/_navbar');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/template/_footer');
	}
	public function siswa()
	{
		$this->load->view('admin/template/_navbar');
		$this->load->view('admin/siswa');
		$this->load->view('admin/template/_footer');
	}
	public function pengumuman()
	{
		$this->load->view('admin/template/_navbar');
		$this->load->view('admin/pengumuman');
		$this->load->view('admin/template/_footer');
	}
}
