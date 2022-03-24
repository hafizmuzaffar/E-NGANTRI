<?php
class Dokter extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_user');
        if ($this->session->userdata('id_user') == '') {
            redirect('login/logout');
        }
    }
     function index(){
       
        $data['pasien'] = $this->m_user->pasien()->result();
        $data['totalpasien'] = $this->m_user->total_pasien()->num_rows();
        $data['totalantrian'] = $this->m_user->total_antrian()->num_rows();
        $data['title'] = $this->session->userdata('level');
        $this->load->view('dokter/home',$data);
    }
    function data_pasien(){

        $id = $this->uri->segment(3);
        $id_user = $this->session->userdata('id_user');
        $kode_poli = $this->session->userdata('kode_poli');
        $nama_dokter = $this->m_user->ambil_nama($id_user)->row()->nama;
        $data['pasien'] = $this->m_user->pasien()->result();
        $data['title'] = $this->session->userdata('level');
        $data['antrian'] = $this->m_user->antrian_dokter($kode_poli,$nama_dokter)->result();
        $data['totalantrian'] = $this->m_user->total_antrian()->num_rows();
        $this->load->view('dokter/data_pasien',$data);
    }

    function sudah_antrian()
    {
        $id_antrian = $this->input->post('id_antrian');
        $keluhan = $this->input->post('keluhan_penyakit');
        $update = $this->m_user->update_antrian($keluhan,$id_antrian);
        if ($update) {
            redirect('dokter/data_pasien');
        }
    }
}