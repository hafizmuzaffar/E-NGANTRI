<?php
class Petugas extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_user');
        if ($this->session->userdata('id_user') == '') {
            redirect('login/logout');
        }
    }
 
    function index(){
    	$this->load->model('m_user');

        $data['pasien'] = $this->m_user->pasien()->result();
        $data['totaldokter'] = $this->m_user->total_dokter()->num_rows();
        $data['totalpasien'] = $this->m_user->total_pasien()->num_rows();
        $data['totalantrian'] = $this->m_user->total_antrian()->num_rows();
        $data['title'] = $this->session->userdata('level');
        $this->load->view('petugas/home',$data);
    }

    function daftar_pasien(){
    	$data['pasien'] = $this->m_user->pasien()->result();
        $data['title'] = $this->session->userdata('level');
        $data['totaldokter'] = $this->m_user->total_dokter()->num_rows();
        $data['totalpasien'] = $this->m_user->total_pasien()->num_rows();
        $data['totalantrian'] = $this->m_user->total_antrian()->num_rows();
    	$this->load->view('petugas/daftar_pasien',$data);
    }
 
    function daftar_dokter(){
        $this->load->model('m_user');
        $data['totaldokter'] = $this->m_user->total_dokter()->num_rows();
        $data['totalpasien'] = $this->m_user->total_pasien()->num_rows();
        $data['totalantrian'] = $this->m_user->total_antrian()->num_rows();

        $data['title'] = $this->session->userdata('level');
        $data['dokter'] = $this->m_user->list_dokter()->result();
        $this->load->view('petugas/daftar_dokter',$data);
    }
    function daftar_antrian(){
        $this->load->model('m_user');
        $tanggal_antrian = $this->input->post('tanggal_antrian');
        $data['title'] = $this->session->userdata('level');
        $data['dokum'] = $this->m_user->lihat_dokum($tanggal_antrian)->result();
        $data['dogi'] = $this->m_user->lihat_dogi($tanggal_antrian)->result();
        $data['donak'] = $this->m_user->lihat_donak($tanggal_antrian)->result();
        $data['bidan'] = $this->m_user->lihat_bidan($tanggal_antrian)->result();
        $data['totaldokter'] = $this->m_user->total_dokter()->num_rows();
        $data['totalpasien'] = $this->m_user->total_pasien()->num_rows();
        $data['totalantrian'] = $this->m_user->total_antrian()->num_rows();
        $this->load->view('petugas/daftar_antrian',$data);
    }
    function tambah_antrian(){
        $data['id_user'] = $this->uri->segment(3);
        $this->load->view('petugas/tambah_antrian',$data);
    }
 
    function tambah_dokter(){
        $this->load->view('petugas/tambah_dokter');
    }
    function tambah_pasien(){
        $this->load->view('petugas/tambah_pasien');
    }

    public function p_hapus_dokter($id)
    {
        $this->load->model('m_user');
        $id = $this->uri->segment(3);
        $data = $this->m_user->m_hapus_dokter($id);
        echo "<script type='text/javascript'>
            alert ('dokter berhasil Di hapus');
            </script>";
            echo "<script>location='".base_url('petugas/index')."'; </script>";
    }

    public function p_hapus_pasien($id)
    {
        $this->load->model('m_user');
        $id = $this->uri->segment(3);
        $data = $this->m_user->m_hapus_pasien($id);
        echo "<script type='text/javascript'>
            alert ('pasien berhasil Di hapus');
            </script>";
            echo "<script>location='".base_url('petugas/index')."'; </script>";
    }




    function pilih_tanggal_cetak()
    {
        $this->load->view('petugas/pilih_tanggal_cetak');
    }
    function pilih_cetak_poli()
    {
        $this->load->view('petugas/pilih_cetak_poli');
    }

    function cetak_laporan()
    {
        $from = $this->input->post('tanggal_awal');
        $to = $this->input->post('tanggal_akhir');
        $dokum = $this->m_user->lihat_dokum_tanggal($from,$to);
        $dogi = $this->m_user->lihat_dogi_tanggal($from,$to);
        $donak = $this->m_user->lihat_donak_tanggal($from,$to);
        $bidan = $this->m_user->lihat_bidan_tanggal($from,$to);


        $filename = 'Laporan_Antrian_'.$from.'_'.$to;
            header("Content-type: application/x-msdownload");
            header("Content-Disposition: attachment; filename=".$filename.".xls");

            echo "
                <center><h3>Dokter Umum</h3></center>
                <table border='1' width='100%'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Poli</th> 
                            <th>Nomor Antrian</th>
                            <th>Tanggal Antrian</th>
                            
                        </tr>
                    </thead>
                    <tbody>
            ";

            $no = 1;

            foreach($dokum->result() as $p)
            {
                echo "
                    <tr>
                        <td>".$no."</td>
                        <td>".$p->nama."</td>
                        <td>".$p->nama_poli."</td>
                        <td>".$p->nomor_antrian."</td>
                        <td>".date('d F Y', strtotime($p->tanggal_antrian))."</td>

                        
                    </tr>
                ";


                $no++;
            }

            echo "
                
            </tbody>
            </table>
            ";





             echo "
                <center><h3>Dokter Gigi</h3></center>
                <table border='1' width='100%'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Poli</th> 
                            <th>Nomor Antrian</th>
                            <th>Tanggal Antrian</th>
                            
                        </tr>
                    </thead>
                    <tbody>
            ";

            $no = 2;

            foreach($dogi->result() as $p)
            {
                echo "
                    <tr>
                        <td>".$no."</td>
                        <td>".$p->nama."</td>
                        <td>".$p->nama_poli."</td>
                        <td>".$p->nomor_antrian."</td>
                        <td>".date('d F Y', strtotime($p->tanggal_antrian))."</td>

                        
                    </tr>
                ";


                $no++;
            }

            echo "
                
            </tbody>
            </table>
            ";


             echo "
                <center><h3>Dokter Anak</h3></center>
                <table border='1' width='100%'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Poli</th> 
                            <th>Nomor Antrian</th>
                            <th>Tanggal Antrian</th>
                            
                        </tr>
                    </thead>
                    <tbody>
            ";

            $no = 3;

            foreach($donak->result() as $p)
            {
                echo "
                    <tr>
                        <td>".$no."</td>
                        <td>".$p->nama."</td>
                        <td>".$p->nama_poli."</td>
                        <td>".$p->nomor_antrian."</td>
                        <td>".date('d F Y', strtotime($p->tanggal_antrian))."</td>

                        
                    </tr>
                ";


                $no++;
            }

            echo "
                
            </tbody>
            </table>
            ";
             echo "
                <center><h3>Bidan</h3></center>
                <table border='1' width='100%'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Poli</th> 
                            <th>Nomor Antrian</th>
                            <th>Tanggal Antrian</th>
                            
                        </tr>
                    </thead>
                    <tbody>
            ";

            $no = 4;

            foreach($bidan->result() as $p)
            {
                echo "
                    <tr>
                        <td>".$no."</td>
                        <td>".$p->nama."</td>
                        <td>".$p->nama_poli."</td>
                        <td>".$p->nomor_antrian."</td>
                        <td>".date('d F Y', strtotime($p->tanggal_antrian))."</td>

                        
                    </tr>
                ";


                $no++;
            }

            echo "
                
            </tbody>
            </table>
            ";
    }

     function cetak_laporan_perpoli()
    {
        $from = $this->input->post('tanggal_awal');
        $to = $this->input->post('tanggal_akhir');
        $kode_poli = $this->input->post('kode_poli');
        $nama_poli = $this->m_user->ambil_nama_poli($kode_poli)->row()->nama_poli;
        $dokum = $this->m_user->laporan_perpoli($from,$to,$kode_poli);
       


        $filename = 'Laporan_Antrian_'.$from.'_'.$to;
            header("Content-type: application/x-msdownload");
            header("Content-Disposition: attachment; filename=".$filename.".xls");

            echo "
                <center><h3>".$nama_poli."</h3></center>
                <table border='1' width='100%'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Poli</th> 
                            <th>Nomor Antrian</th>
                            <th>Tanggal Antrian</th>
                            
                        </tr>
                    </thead>
                    <tbody>
            ";

            $no = 1;

            foreach($dokum->result() as $p)
            {
                echo "
                    <tr>
                        <td>".$no."</td>
                        <td>".$p->nama."</td>
                        <td>".$p->nama_poli."</td>
                        <td>".$p->nomor_antrian."</td>
                        <td>".date('d F Y', strtotime($p->tanggal_antrian))."</td>

                        
                    </tr>
                ";


                $no++;
            }

            echo "
                
            </tbody>
            </table>
            ";


    }
    function edit_dokter()
    {
        $id_user = $this->uri->segment(3);
        $data['dokter'] = $this->m_user->ambil_nama($id_user)->row_array();
        $this->load->view('petugas/edit_dokter',$data);

    }
    function edit_dokter_simpan()
    {
        $id_user = $this->input->post('id_user');
        $datadokter = array('nama'=>$this->input->post('nama'),
            'alamat'=>$this->input->post('alamat'),
            'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
            'password'=>md5($this->input->post('password')),
            'level' => 'Dokter',
            'tgl_lahir'=>$this->input->post('tgl_lahir'),
            'email'=>$this->input->post('email'),
            'kode_poli'=>$this->input->post('kode_poli'),
            'nomor_tlp'=>$this->input->post('nomor_tlp'),
            'hari'=>$this->input->post('hari'),
            'jam_awal'=>$this->input->post('jam_awal'),
            'jam_akhir'=>$this->input->post('jam_akhir'));
        $this->db->where(array('id_user' => $id_user ));
        $masuk = $this->db->update('users',$datadokter);
        if ($masuk) {
            redirect('petugas/daftar_dokter');
        }
    }
    function edit_pasien()
    {
        $id_user = $this->uri->segment(3);
        $data['pasien'] = $this->m_user->ambil_nama($id_user)->row_array();
        $this->load->view('petugas/edit_pasien',$data);
    }
    function edit_pasien_simpan()
    {
        $id_user =$this->input->post('id_user');
        $datapasien = array('nama'=>$this->input->post('nama'),
            'alamat'=>$this->input->post('alamat'),
            'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
            'password'=>md5($this->input->post('password')),
            'tgl_lahir'=>$this->input->post('tgl_lahir'),
            'email'=>$this->input->post('email'),
            'nik'=>$this->input->post('nik'),
            'kode_poli'=>$this->input->post('kode_poli'),
            'nomor_tlp'=>$this->input->post('nomor_tlp'));
            $this->db->where(array('id_user' => $id_user));
            $masuk = $this->db->update('users',$datapasien);
            if ($masuk) {
                redirect('petugas/daftar_pasien');
            }
    }


}