<?php
class Pasien extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_user');
        if ($this->session->userdata('id_user') == '') {
            redirect('login/logout');
        }
    }
 
    function index()
    {
        $this->load->view('pasien/home');
    }

    function pilih_poli(){
    	$data['poli'] = $this->m_user->ambil_poli()->result();
    	$this->load->view('pasien/daftar_antrian',$data);
    }

    function daftar_antrian(){
        $kode_poli = $this->uri->segment(3);
        if ($this->session->userdata('level') == 'Petugas') {
            $data['id_user'] = $this->uri->segment(4);
        }
        $data['dokum']= $this->m_user->dokter_bangsat($kode_poli)->result_array();
        $this->load->view('pasien/daftar',$data);
    }
    function daftar(){
            $this->load->view('pasien/daftar_antrian_simpan');
        }
     function pilih_tanggal_antrian_sendiri(){

        $this->load->view('pasien/pilih_tanggal_antrian_sendiri');
        // echo "asd";
    }

    function lihat_antrian()
    {
        $this->load->view('pasien/lihat_antrian');
    }
    function pilih_poli_dokter()
    {
        $this->load->view('pasien/pilih_poli_dokter');
    }

    function lihat_antrian_sendiri()
    {
        $this->load->model('m_user');
        $id_user = $this->session->userdata('id_user');
        $tanggal_antrian = $this->input->post('tanggal_antrian');
        $dt['dokum'] = $this->m_user->lihat_dokum_sendiri($tanggal_antrian,$id_user)->result();
        $dt['dogi'] = $this->m_user->lihat_dogi_sendiri($tanggal_antrian,$id_user)->result();
        $dt['donak'] = $this->m_user->lihat_donak_sendiri($tanggal_antrian,$id_user)->result();
        $dt['bidan'] = $this->m_user->lihat_bidan_sendiri($tanggal_antrian,$id_user)->result();
        $this->load->view('pasien/lihat_antrian',$dt);
        // print_r($dt);
    }
    

    function daftar_antrian_simpan(){
        date_default_timezone_set('Asia/Jakarta');
    	if ($this->session->userdata('level') == 'Petugas') {
            $id_user = $this->input->post('id_user');
        }else{
            $id_user =  $this->session->userdata('id_user');
        }
        $tanggal_pesan = date('Y-m-d');
        //$tanggal_pesan = date('Y-m-d H:i:s');
        $nama_dokter = $this->input->post('pilih_dokter');
        $tanggal_antrian = $this->input->post('tanggal_pesan');
        $kode_poli = $this->input->post('kode_poli');
        $nomor = $this->m_user->antrian($kode_poli,$tanggal_antrian,$nama_dokter)->num_rows();
        $ambil = $this->m_user->ambil_id_poli($kode_poli)->row_array();
        $id_poli = $ambil['id_poli'];
        $nomor2 = $nomor + 1;
        $max = 15;
        $ini = date('Y-m-d');
        $date = new DateTime($tanggal_antrian);
        $now = new DateTime($ini);
      
        $tgl = date(strtotime($tanggal_antrian));
        $cek = $this->m_user->cek_antrian($id_user)->num_rows();
        //$jam = date('H:i:s');
        //$jam_tutup = date('14:30:00');

        $save = $id_poli.''.$nomor2;
        // print_r($tanggal_pesan);
        if ($nomor > $max) {
           echo "<script type='text/javascript'>
            alert ('Antrian penuh');
            </script>";
            echo "<script>location='".base_url('pasien/index')."'; </script>";

        }
        elseif ($cek > 1) {
          
             echo "<script type='text/javascript'>
            alert ('anda sudah melakukan pendaftaran antrian');
            </script>";
            echo "<script>location='".base_url('pasien/index')."'; </script>";
        }
        //elseif ($tgl > $libur) {
            //echo "<script type='text/javascript'>
            //alert ('puskesmas tutup');
           //</script>";
            //echo "<script>location='".base_url('pasien/index')."'; </script>";
        //}
        if(
        date("D",strtotime($tanggal_antrian))==="Sun")
        {
            echo "<script type='text/javascript'>
            alert ('tidak bisa memesan di hari minggu !');
            </script>";
            echo "<script>location='".base_url('pasien/index')."'; 
            </script>";
        }
        if($date < $now)
        {
             echo "<script type='text/javascript'>
            alert ('tidak bisa daftar sebelum hari ini');
            </script>";
            echo "<script>location='".base_url('pasien/index')."'; 
            </script>";
        }
        else{
            $daftarpasien = array('kode_poli'=>$kode_poli,
            'tanggal_pesan'=> $tanggal_pesan,
            'nomor_antrian' => $save,
            'id_user' => $id_user,
            'nama_dokter' => $nama_dokter,
            'tanggal_antrian'=> $tanggal_antrian,
            'status' => 'belum diperiksa',
            'keluhan_penyakit' => ''
        );
        $masuk = $this->db->insert('antrian',$daftarpasien);
        if ($masuk) {
            $nama_poli = $this->m_user->ambil_nama_poli($kode_poli)->row()->nama_poli;
            $data['antrian'] = $save;
            $data['nama_pasien'] = $this->m_user->ambil_nama($id_user)->row()->nama;
            $data['poli'] = $nama_poli;
            $data['nama_dokter'] = $nama_dokter;
            $data['nama_pasien'] = $this->session->userdata('nama');
            //$data['jam_awal'] = $this->m_user->ambil_jam($nama_dokter)->row()->jam_awal;
            //$data['jam_akhir'] = $this->m_user->ambil_jam($nama_dokter)->row()->jam_akhir;
            $data['tanggal_antrian'] = $tanggal_antrian;
            $data['tanggal_pesan'] = $tanggal_pesan;
          

            $this->load->view('pasien/cetak_antrian',$data);
        }
            //print_r($daftarpasien);
         echo "<script type='text/javascript'>
             alert ('Antrian Berhasil Di Simpan');
             </script>";
             echo "<script>location='".base_url('welcome')."'; </script>";
        
        //}
        //function cetak_Antrian(){
         //$this->load->view('welcome/lihat_antrian');
        //}


    }
    //function cetak()
    //{
        //$this->load->library('pdf');
       // $from = $this->uri->segment(3);
        //$to   = $this->uri->segment(4);
        //$nama = $this->input->post('nama');
        //$poli = $this->input->post('poli');
        //$nama_dokter = $this->input->post('nama_dokter');
        //$antrian = $this->input->post('antrian');
        //$tanggal_pesan = $this->input->post('tanggal_pesan');
        //$tanggal_antrian = $this->input->post('tanggal_antrian');
        //$metode_pembayaran = $this->input->post('metode_pembayaran');
        //$no_asuransi = $this->input->post('no_asuransi');

        //$pdf  = new FPDF();
        //$pdf->AddPage();
        //$pdf->SetFont('Arial','B',10);

        //$pdf->SetFont('Arial','',10);
        //$pdf->Cell(0,20,'Kartu Antrian Pasien','0',1,'C');
        //$pdf->Cell(0,8,"Pada Tanggal".date('d/m/Y',strtotime($from))." - ".date('d/m/Y',strtotime($to)),0,1,'L');
    
        //$pdf->Cell(40,7,'Nama Pasien',1,0,'L'); 
        //$pdf->Cell(15,7,'Poli',1,0,'L');  
        //$pdf->Cell(30,7,'Nama Dokter',1,0,'L');  
        //$pdf->Cell(30,7,'Nomor Antrian',1,0,'L');  
        //$pdf->Cell(30,7,'Tanggal Pesan',1,0,'L');  
        //$pdf->Cell(30,7,'Tanggal Antrian',1,0,'L');  
        //$pdf->Cell(30,7,'Metode Pembayaran',1,0,'L');
        //$pdf->Cell(30,7,'Nomor Asuransi',1,0,'L');  
      //$pdf->Ln();

 
        //$pdf->Cell(40,7,$nama,1,0,'L');  
        //$pdf->Cell(15,7,$poli,1,0,'L');  
        //$pdf->Cell(30,7,$nama_dokter,1,0,'L');
        //$pdf->Cell(30,7,$antrian,1,0,'L');
        //$pdf->Cell(30,7,date('d F Y',strtotime($from['tanggal_pesan'])),1,0,'L');  
        //$pdf->Cell(30,7,date('d F Y',strtotime($to['tanggal_antrian'])),1,0,'L');  
        //$pdf->Cell(30,7,$metode_pembayaran,1,0,'L');  
        //$pdf->Cell(30,7,$no_asuransi,1,0,'L');
          // $pdf->Ln();
       //$pdf->Output();
    }



}
      
    
