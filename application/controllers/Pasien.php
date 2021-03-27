<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	// call once use anywhere
    public function __construct()
    {
        parent::__construct();
        $this->cek_login();
		if ($this->session->userdata('level') != 'pasien') {
			redirect('auth/check_level');
		}
    }

	public function index()
	{
		$this->load->view('template/header.php');
		$this->load->view('pasien/home.php');
		$this->load->view('template/footer.php');
    }
}
