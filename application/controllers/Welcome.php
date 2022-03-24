<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/sss
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->model('m_user');

		if ($this->session->userdata('level') == '') {
			$this->load->view('welcome_message');
		} else if ($this->session->userdata('level') == 'Petugas') {
			redirect('petugas');
		} elseif ($this->session->userdata('level') == 'Pasien') {
			redirect('pasien');
		} elseif ($this->session->userdata('level') == 'Dokter') {
			redirect('dokter');
		}
	}

	public function daftar_pasien()
	{
		$this->load->view('daftar_pasien');
	}

	public function login()
	{
		if ($this->session->userdata('level') == '') {
			$this->load->view('login');
		} else if ($this->session->userdata('level') == 'Petugas') {
			redirect('petugas');
		} elseif ($this->session->userdata('level') == 'Pasien') {
			redirect('pasien');
		} elseif ($this->session->userdata('level') == 'Dokter') {
			redirect('dokter');
		}
	}

	public function lihat_antrian()
	{
		$this->load->model('m_user');
		$tanggal_antrian = $this->input->post('tanggal_antrian');
		$dokter = $this->input->post('pilih_dokter');
		$dt['dokum'] = $this->m_user->lihat_dokum_pasien($tanggal_antrian, $dokter)->result();
		$dt['dogi'] = $this->m_user->lihat_dogi_pasien($tanggal_antrian, $dokter)->result();
		$dt['donak'] = $this->m_user->lihat_donak_pasien($tanggal_antrian, $dokter)->result();
		$dt['bidan'] = $this->m_user->lihat_bidan_pasien($tanggal_antrian, $dokter)->result();
		$this->load->view('lihat_antrian', $dt);
	}

	public function tentang()
	{
		$this->load->view('tentang');
	}
	public function daftar_pasien_simpan()
	{
		$this->load->model('m_user');
		$email = $this->input->post('email');
		$datapasien = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'password' => md5($this->input->post('password')),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'email' => $this->input->post('email'),
			'nik' => $this->input->post('nik'),
			'kode_poli' => $this->input->post('kode_poli'),
			'nomor_tlp' => $this->input->post('nomor_tlp'),
			// 'pilih_metode_pembayaran' => $this->input->post('pilih_metode_pembayaran'),
			// 'no_asuransi' => $this->input->post('no_asuransi'),
			// 'jam_awal' => $this->input->post('jam_awal'),
			// 'jam_akhir' => $this->input->post('jam_akhir')
		);
		$NIK = $this->m_user->cek_data('NIK', $this->input->post('nik'));
		$email = $this->m_user->cek_data('email', $this->input->post('email'));
		$nomor_tlp = $this->m_user->cek_data('nomor_tlp', $this->input->post('nomor_tlp'));
		if ($NIK->num_rows() > 0) {
			echo "<script type='text/javascript'>
			alert ('NIK sudah ada');
			</script>";
			echo "<script>location='daftar_pasien'; </script>";
		} elseif ($email->num_rows() > 0) {
			echo "<script type='text/javascript'>
			alert ('EMAIL sudah ada');
			</script>";
			echo "<script>location='daftar_pasien'; </script>";
		} elseif ($nomor_tlp->num_rows() > 0) {
			echo "<script type='text/javascript'>
			alert ('Nomor Telp sudah ada');
			</script>";
			echo "<script>location='index'; </script>";
		} else {
			$this->db->insert('users', $datapasien);

			echo "<script type='text/javascript'>
			alert ('Data Berhasil Di Simpan');
			</script>";
			echo "<script>location='index'; </script>";
		}
	}
	public function daftar_dokter_simpan()
	{
		$level = $this->input->post('level');

		$datadokter = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'password' => md5($this->input->post('password')),
			'level' => 'Dokter',
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'email' => $this->input->post('email'),
			'hari' => $this->input->post('hari'),
			'kode_poli' => $this->input->post('kode_poli'),
			'nomor_tlp' => $this->input->post('nomor_tlp'),
			'jam_awal' => $this->input->post('jam_awal'),
			'jam_akhir' => $this->input->post('jam_akhir')
		);

		$this->db->insert('users', $datadokter);

		echo "<script type='text/javascript'>
			alert ('Data Berhasil Di Simpan');
			</script>";
		echo "<script>location='index'; </script>";
	}
	function pilih_tanggal_antrian()
	{
		$this->load->model('m_user');
		$kode_poli = $this->uri->segment(3);
		$data['dokter'] = $this->m_user->dokter($kode_poli)->result();
		$this->load->view('pilih_tanggal_antrian', $data);
	}
	function pilih_tanggal_antrian_sendiri()
	{

		$this->load->view('pasien/pilih_tanggal_antrian_sendiri');
	}
	function pilih_poli_dokter()
	{
		$this->load->view('pilih_poli_dokter');
	}
}
