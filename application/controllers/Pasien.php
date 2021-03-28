<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	// call once use anywhere
    public function __construct()
    {
		parent::__construct();
		$this->load->model("pasien_model");
        $this->cek_login();
		if ($this->session->userdata('level') != 'pasien') {
			redirect('auth/check_level');
		}
    }

	public function index()
	{
		$username = $this->session->userdata('username');
		$pasien = $this->pasien_model->get_pasienId($username);
		$id_pasien = $pasien[0]->id_pasien;
		$data['antrian'] = $this->pasien_model->get_antrian($id_pasien);
		$data['diagnosa'] = $this->pasien_model->get_diagnosa($id_pasien);
		$this->load->view('template/header.php');
		$this->load->view('pasien/home.php', $data);
		$this->load->view('template/footer.php');
	}
	
	public function antri(){
		$username = $this->session->userdata('username');
		$pasien = $this->pasien_model->get_pasienId($username);
		$data['id_pasien'] = $pasien[0]->id_pasien;
		$data['dokter'] = $this->pasien_model->get_dokter();
		$this->load->view('template/header.php');
		$this->load->view('pasien/daftar_antri.php', $data);
		$this->load->view('template/footer.php');
	}

	public function daftar(){
		$id_dokter = $this->input->post('dokter');
		$id_pasien = $this->input->post('id_pasien');
		$no_antri = $this->pasien_model->get_lastAntri();
		$no_antrian = $no_antri[0]->no_antri + 1;

		$data = [
			'id_pasien' => $id_pasien,
			'no_antri' => $no_antrian,
			'id_dokter' => $id_dokter,
		];
		$data2 = [
			'id_pasien' => $id_pasien,
			'id_dokter' => $id_dokter,
		];
		$insert = $this->pasien_model->register("antrian", $data);
		$insert = $this->pasien_model->register("rekam_medis", $data2);
		if ($insert) {
			echo '<script>alert("Berhasil Mengantri");window.location.href="' . base_url('index.php/pasien') . '";</script>';
		}
	}

	public function detail_antrian($no_antrian){
		$data['antrian'] = $this->pasien_model->get_antrianbyno($no_antrian);
		$this->load->view('template/header.php');
		$this->load->view('pasien/detail/antrian.php', $data);
		$this->load->view('template/footer.php');
	}

	public function detail_rekammedis($id_rekammedis){
		$data['diagnosis'] = $this->pasien_model->get_diagnosabyid($id_rekammedis);
		$this->load->view('template/header.php');
		$this->load->view('pasien/detail/rekam_medis.php', $data);
		$this->load->view('template/footer.php');
	}

}
