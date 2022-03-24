<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_user');
    }
 
    function index()
    {       
            if ($this->session->userdata('level') == '') {
                # code...
            $this->load->view('v_login');
            }
    }
 
    function auth(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $where  = array('email' => $email, 'password' =>md5($password) );

        $cek = $this->m_user->cek_login("users",$where);
        if($cek->num_rows() > 0){
            $data_user = $cek->row();
            $data_session = array(
                'id_user' =>$data_user->id_user,
                'email' => $email,
                'kode_poli' => $data_user->kode_poli,
                'nama' => $data_user->nama,
                'status' => 'login_member',
                'level' => $data_user->level
            );

            $this->session->set_userdata($data_session);

            if ($data_user->level == 'Petugas') {
                redirect('petugas');
            }elseif ($data_user->level == 'Pasien') {
                redirect('pasien');
            }elseif ($data_user->level == 'Dokter') {
                redirect('dokter');
            }
            {
                echo "login gagal";
            }

        }else{
            echo "<script type='text/javascript'>
            alert ('Maaf Email Dan Password Anda Salah !');
            document.write ('<center><h1> Harap Masukan Email Dan Password Dengan Benar !</h1></center><center><h1> E-NGANTRI </h1></center>');
            </script>";
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('welcome/'));
    }
 
}