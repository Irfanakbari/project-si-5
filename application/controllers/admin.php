<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model');
		$this->load->model('auth_model');
		$this->load->model('pengumuman_model');
		if(!$this->auth_model->current_user()){
			redirect('admin/login');
		}
	}
	public function index()
	{
		$data = $this->siswa_model->get_all();
		$lulus = $this->siswa_model->get_lulus();
		$not_lulus = $this->siswa_model->get_not_lulus();
		$dibuka = $this->siswa_model->get_dibuka();
		$not_dibuka = $this->siswa_model->get_not_dibuka();
		$this->load->view('admin/template/_navbar');
		$this->load->view('admin/dashboard', array('total' => count($data), 'lulus' => count($lulus), 'not_lulus' => count($not_lulus), 'dibuka' => count($dibuka), 'not_dibuka' => count($not_dibuka)));
		$this->load->view('admin/template/_footer');
	}
	public function siswa()
	{
		$data = $this->siswa_model->get_all();
		$this->load->view('admin/template/_navbar');
		$this->load->view('admin/siswa', array('data' => $data));
		$this->load->view('admin/template/_footer');
	}
	public function pengumuman()
	{
		$pengumuman = $this->pengumuman_model->get_all();
		$this->load->view('admin/template/_navbar');
		$this->load->view('admin/pengumuman', ['pengumuman' => $pengumuman]);
		$this->load->view('admin/template/_footer');
	}
}
