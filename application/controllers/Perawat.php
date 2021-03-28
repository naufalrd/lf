<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perawat extends CI_Controller {

	// call once use anywhere
    public function __construct()
    {
        parent::__construct();
		$this->load->model('perawat_model');
        $this->cek_login();
		if ($this->session->userdata('level') != 'perawat') {
			redirect('auth/check_level');
		}
    }

	public function index()
	{
		$data['rekam_medis'] = $this->perawat_model->search_pasien();
		$data['data_pasien'] = $this->perawat_model->data_pasien();
		#var_dump($data);
		#die();
		$this->load->view('template/header.php');
		$this->load->view('perawat/home.php',$data);
		$this->load->view('template/footer.php');
    }

	public function tensi($id)
	{
		$data['rekam_medis'] = $this->perawat_model->search_id($id);
		var_dump($data);
		$this->load->view('template/header.php');
		$this->load->view('perawat/tensi.php',$data);
		$this->load->view('template/footer.php');
    }

	public function data_pasien($id)
	{
		$data['data_pasien'] = $this->perawat_model->search_data($id);
		var_dump($data);
		$this->load->view('template/header.php');
		$this->load->view('perawat/data_pasien.php',$data);
		$this->load->view('template/footer.php');
    }

	public function panggil()
	{
		$this->load->view('template/header.php');
		$this->load->view('perawat/panggil.php');
		$this->load->view('template/footer.php');
    }

	public function search_perawat($username){
		$data = $this->session->userdata('username');
		$this->perawat_model->search_perawat($data, $username);
	}

	public function EditStory($id)
	{
		//$username = $this -> input -> post('username');
		//$this -> session -> set_userdata('username',$username);
		$data['rekam_medis'] = $this->read->search_id($id);
		$this->load->view('header');
		$this->load->view('edit', $data);
		$this->load->view('footer');
	}

	public function SendPost()
	{
		$this->perawat_model->update_tensi();
		redirect('perawat');
	}

	public function SendData()
	{
		$this->perawat_model->update_data();
		redirect('perawat');
	}

	
}