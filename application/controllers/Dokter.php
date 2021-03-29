<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	// call once use anywhere
    public function __construct()
    {
        parent::__construct();
		$this->load->model('dokter_model');
        $this->cek_login();
		if ($this->session->userdata('level') != 'dokter') {
			redirect('auth/check_level');
		}
    }

	public function index()
	{
		$data['rekam_medis'] = $this->dokter_model->search_pasien();
		$data['data_pasien'] = $this->dokter_model->data_pasien();
		// var_dump($data);
		$this->load->view('template/header.php');
		$this->load->view('dokter/home.php',$data);
		$this->load->view('template/footer.php');
    }

	public function diagnosa($id)
	{
		$data['rekam_medis'] = $this->dokter_model->search_id($id);
		// var_dump($data);
		$this->load->view('template/header.php');
		$this->load->view('dokter/diagnosa.php', $data);
		$this->load->view('template/footer.php');
    }

	public function data_pasien($id)
	{
		$data['data_pasien'] = $this->dokter_model->search_data($id);
		// var_dump($data);
		$this->load->view('template/header.php');
		$this->load->view('dokter/data_pasien.php',$data);
		$this->load->view('template/footer.php');
    }

	public function EditPost($id)
	{
		$this->dokter_model->editPostQuery($id);
		redirect('dokter');
	}

	public function SendData($id)
	{
		$this->dokter_model->update_data($id);
		redirect('dokter');
	}

	public function DeletePost($id)
	{
		$this->dokter_model->deletePostQuery($id);
		redirect('dokter');
	}
}
