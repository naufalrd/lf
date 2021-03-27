<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	// call once use anywhere
    public function __construct()
    {
        parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('admin_model');
        $this->cek_login();
		if ($this->session->userdata('level') != 'admin') {
			redirect('auth/check_level');
		}
    }

	public function index()
	{
		$data['admin'] = $this->admin_model->get_admin();
		$data['dokter'] = $this->admin_model->get_dokter();
		$data['perawat'] = $this->admin_model->get_perawat();
		$data['pasien'] = $this->admin_model->get_pasien();
		$this->load->view('template/header.php');
		$this->load->view('admin/home.php',$data);
		$this->load->view('template/footer.php');
    }

	//Halaman jadwal
	public function jadwal() {
		$data['dokter'] = $this->admin_model->get_dokter();
		$this->load->view('template/header.php');
		$this->load->view('admin/jadwal.php',$data);
		$this->load->view('template/footer.php');
	}

	//Halaman tambah admin
	public function tambah_admin() {
		$this->load->view('template/header.php');
		$this->load->view('admin/tambah/tambah_admin.php');
		$this->load->view('template/footer.php');
	}

	//Halaman tambah dokter
	public function tambah_dokter() {
		$this->load->view('template/header.php');
		$this->load->view('admin/tambah/tambah_dokter.php');
		$this->load->view('template/footer.php');
	}
	
	//Halaman tambah perawat
	public function tambah_perawat() {
		$this->load->view('template/header.php');
		$this->load->view('admin/tambah/tambah_perawat.php');
		$this->load->view('template/footer.php');
	}

	//Cek register admin
	public function check_register_admin()
    {
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->form_validation->set_rules('username_admin', 'Username', 'required|min_length[5]|max_length[15]|is_unique[akun.username]');

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
        } else {
            // data untuk tabel akun
            $username = $this->input->post('username_admin');
            $level = 'admin';
            $password = $this->input->post('password_admin');
            $pass = password_hash($password, PASSWORD_DEFAULT);
			$data = [
                'username' => $username,
                'level' => $level,
                'password' => $pass
            ];
            $insert = $this->auth_model->register("akun", $data);
            // data untuk tabel admin
            $data1 = [
                'username_admin' => $username,
            ];
            $insert = $this->auth_model->register("admin", $data1);
            if ($insert) {
				echo '<script>alert("Akun Admin berhasil di tambah");window.location.href="' . base_url('index.php/admin') . '";</script>';
            }
        }
    }
	public function delete_admin($username){
		$where = [
			'username_admin' => $username
		];
		$whereakun = [
			'username' => $username
		];
		$this->admin_model->hapus_admin($where,$whereakun);
		redirect("admin");
	}
	

	//Check register dokter
	public function check_register_dokter()
    {
		$this->load->library('form_validation');
        $this->load->library('session');

        $this->form_validation->set_rules('username_dokter', 'Username', 'required|min_length[5]|max_length[15]|is_unique[akun.username]');

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
        } else {
            // data untuk tabel akun
            $username = $this->input->post('username_dokter');
            $level = 'dokter';
            $password = $this->input->post('password_dokter');
            $pass = password_hash($password, PASSWORD_DEFAULT);
			$data = [
                'username' => $username,
                'level' => $level,
                'password' => $pass
            ];
            $insert = $this->auth_model->register("akun", $data);
            // data untuk tabel dokter
			$nama = $this->input->post('nama_dokter');
			$notelp = $this->input->post('notelp_dokter');
			$poli = $this->input->post('poli');
            $data1 = [
                'username_dokter' => $username,
				'nama_dokter' => $nama,
				'notelp_dokter' => $notelp,
				'nama_poli' => $poli,
				'status' => "aktif"
            ];
            $insert = $this->auth_model->register("dokter", $data1);
            if ($insert) {
                echo '<script>alert("Akun dokter berhasil di tambah");window.location.href="' . base_url('index.php/admin') . '";</script>';
            }
        }
    }
	public function delete_dokter($username){
		$where = [
			'username_dokter' => $username
		];
		$whereakun = [
			'username' => $username
		];
		$this->admin_model->hapus_dokter($where,$whereakun);
		redirect("admin");
	}
	public function edit_dokter($id){
		$where = [
			'id_dokter' => $id
		];
		$data['dokter'] = $this->admin_model->edit_data_dokter($where)->result();
		$this->load->view('template/header.php');
		$this->load->view('admin/edit/edit_dokter.php',$data);
		$this->load->view('template/footer.php');
	}
	public function update_dokter($id){
		$nama_dokter = $this->input->post('nama_dokter');
		$nama_poli = $this->input->post('poli');
		$notelp_dokter = $this->input->post('notelp_dokter');
		$data = [
			'nama_dokter' => $nama_dokter,
			'nama_poli' => $nama_poli,
			'notelp_dokter' => $notelp_dokter
		];
		$where = [
			'id_dokter' => $id
		];
		$table = 'dokter';
		$this ->admin_model->update_data($where,$data,$table);
		redirect('admin');
	}
	public function ganti_jadi_nonaktif($id){
		$where = array ('id_dokter' => $id);
		$data = [
			'status' => "non-aktif"
		];
		$this->admin_model->ganti_jadwal("dokter",$where,$data);
		redirect("admin/jadwal");
	}
	public function ganti_jadi_aktif($id){
		$where = array ('id_dokter' => $id);
		$data = [
			'status' => "aktif"
		];
		$this->admin_model->ganti_jadwal("dokter",$where,$data);
		redirect("admin/jadwal");
	}

	//Check register perawat
	public function check_register_perawat()
    {
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->form_validation->set_rules('username_perawat', 'Username', 'required|min_length[5]|max_length[15]|is_unique[akun.username]');

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
        } else {
            // data untuk tabel akun
            $username = $this->input->post('username_perawat');
            $level = 'perawat';
            $password = $this->input->post('password_perawat');
            $pass = password_hash($password, PASSWORD_DEFAULT);
			$data = [
                'username' => $username,
                'level' => $level,
                'password' => $pass
            ];
            $insert = $this->auth_model->register("akun", $data);
            // data untuk tabel perawat
			$nama = $this->input->post('nama_perawat');
			$notelp = $this->input->post('notelp_perawat');
            $data1 = [
                'username_perawat' => $username,
				'nama_perawat' => $nama,
				'notelp_perawat' => $notelp
            ];
            $insert = $this->auth_model->register("perawat", $data1);
            if ($insert) {
                echo '<script>alert("Akun perawat berhasil di tambah");window.location.href="' . base_url('index.php/admin') . '";</script>';
            }
        }
    }
	public function delete_perawat($username){
		$where = [
			'username_perawat' => $username
		];
		$whereakun = [
			'username' => $username
		];
		$this->admin_model->hapus_perawat($where,$whereakun);
		redirect("admin");
	}
	public function edit_perawat($id){
		$where = [
			'id_perawat' => $id
		];
		$data['perawat'] = $this->admin_model->edit_data_perawat($where)->result();
		$this->load->view('template/header.php');
		$this->load->view('admin/edit/edit_perawat.php',$data);
		$this->load->view('template/footer.php');
	}
	public function update_perawat($id){
		$nama_perawat = $this->input->post('nama_perawat');
		$notelp_perawat = $this->input->post('notelp_perawat');
		$data = [
			'nama_perawat' => $nama_perawat,
			'notelp_perawat' => $notelp_perawat
		];
		$where = [
			'id_perawat' => $id
		];
		$table = 'perawat';
		$this ->admin_model->update_data($where,$data,$table);
		redirect('admin');
	}


	public function delete_pasien($username){
		$where = [
			'username_pasien' => $username
		];
		$whereakun = [
			'username' => $username
		];
		$this->admin_model->hapus_pasien($where,$whereakun);
		redirect("admin");
	}
	public function edit_pasien($id){
		$where = [
			'id_pasien' => $id
		];
		$data['pasien'] = $this->admin_model->edit_data_pasien($where)->result();
		$this->load->view('template/header.php');
		$this->load->view('admin/edit/edit_pasien.php',$data);
		$this->load->view('template/footer.php');
	}
	public function update_pasien($id){
		$nama_pasien = $this->input->post('nama_pasien');
		$alamat_pasien = $this->input->post('alamat_pasien');
		$umur_pasien = $this->input->post('umur_pasien');
		$data = [
			'nama_pasien' => $nama_pasien,
			'alamat_pasien' => $alamat_pasien,
			'umur_pasien' => $umur_pasien
		];
		$where = [
			'id_pasien' => $id
		];
		$table = 'pasien';
		$this ->admin_model->update_data($where,$data,$table);
		redirect('admin');
	}
}
