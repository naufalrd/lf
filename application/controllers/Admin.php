<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header.php');
		$this->load->view('admin/home.php');
		$this->load->view('template/footer.php');
    }

	public function jadwal() {
		$this->load->view('template/header.php');
		$this->load->view('admin/jadwal.php');
		$this->load->view('template/footer.php');
	}

	public function tambah_admin() {
		$this->load->view('template/header.php');
		$this->load->view('admin/tambah/tambah_admin.php');
		$this->load->view('template/footer.php');
	}
}
