<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model');
		$this->load->model('setting_model');
		$this->load->model('pengumuman_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function portal()
	{
		$datas = $this->siswa_model->current_user();
		$setting = $this->setting_model->get_all();
		$pengumuman = $this->pengumuman_model->get_all();
		if (!$datas) {
			redirect('/');
		}
		$this->load->view('portal', ['datas' => $datas, 'setting' => $setting, 'pengumuman' => $pengumuman]);
	}
	public function final(){
		$datas = $this->siswa_model->current_user();

		if (!$datas) {
			redirect('/');
		}
		$this->load->view('final', ['datas' => $datas]);
	}
}
