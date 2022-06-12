<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
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
	public function siswa_import(){
		$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

		if (isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {
			$arr_file = explode('.', $_FILES['file']['name']);
			$extension = end($arr_file);

			if ('csv' == $extension) {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
			} else {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}

			$spreadsheet = $reader->load($_FILES['file']['tmp_name']);
			$sheetData = $spreadsheet->getActiveSheet()->toArray();
			array_shift($sheetData);
			$data = array(

			);
			foreach ($sheetData as $key => $value) {
				array_push(
					$data,
					array(
						'nisn' => strval($value[0]),
						'nama_siswa' => $value[1],
						'kelas' => $value[2],
						'keterangan' => strval($value[3]),
						'status' => 0
					)
				);
			}
			$this->siswa_model->siswa_import($data);
			redirect('admin/siswa');
		} else {
			echo '<script>alert("File yang diupload bukan file CSV");</script>';
			redirect('admin/siswa');
		}
	}
	public function siswa_hapus($id){
		$this->siswa_model->siswa_hapus($id);
		redirect('admin/siswa');
	}
	public function siswa_edit(){
		$nisn = $this->input->post('nisn');
		$nama_siswa = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$keterangan = $this->input->post('lulus');
		$data = array(
			'nisn' => $nisn,
			'nama_siswa' => $nama_siswa,
			'kelas' => $kelas,
			'keterangan' => $keterangan
		);
		$this->siswa_model->siswa_edit($data);
		redirect('admin/siswa');
	}
	public function pengumuman()
	{
		$pengumuman = $this->pengumuman_model->get_all();
		$this->load->view('admin/template/_navbar');
		$this->load->view('admin/pengumuman', ['pengumuman' => $pengumuman]);
		$this->load->view('admin/template/_footer');
	}
	public function pengumuman_edit(){
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$data = array(
			'judul' => $judul,
			'isi' => $isi
		);
		$this->pengumuman_model->pengumuman_edit($data);
		redirect('admin/pengumuman');
	}
}
