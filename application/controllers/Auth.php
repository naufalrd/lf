<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		$this->load->view('template/auth/header.php');
		$this->load->view('auth/login.php');
		$this->load->view('template/auth/footer.php');
    }
	public function register()
	{
		$this->load->view('template/auth/header.php');
		$this->load->view('auth/register.php');
		$this->load->view('template/auth/footer.php');
    }
}
