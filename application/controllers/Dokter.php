<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header.php');
		$this->load->view('dokter/home.php');
		$this->load->view('template/footer.php');
    }
}
