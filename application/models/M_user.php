<?php
class m_user extends CI_Model{
    //cek nip dan password dosen
 function cek_login($table,$where){
		
	return $this->db->get_where($table,$where);
 }

 function pasien()
 {
 	$sql = "SELECT * FROM users WHERE level = 'Pasien'";
 	return $this->db->query($sql);
 }

 function dokter($kode_poli)
 {
  $sql = "SELECT * FROM users WHERE level = 'Dokter' AND kode_poli = $kode_poli";
  return $this->db->query($sql);
 }

 function ambil_poli()
 {
 	$sql = "SELECT * FROM poli";
 	return $this->db->query($sql);
 }

 function antrian($kode_poli,$tanggal_antrian,$nama_dokter)
 {
 	$tanggal = date('Y-m-d');


 	$sql = "SELECT * FROM antrian  WHERE kode_poli = $kode_poli AND tanggal_pesan LIKE '$tanggal%' AND tanggal_antrian LIKE '$tanggal_antrian%' AND nama_dokter LIKE '%$nama_dokter%'";
 	return $this->db->query($sql);
 }

 function ambil_id_poli($kode_poli)
 {
 	$sql = "SELECT * FROM poli WHERE kode_poli = $kode_poli";
 	return $this->db->query($sql);
 }
 function lihat_dokum_index()
  {
    $tanggal = date('Y-m-d');
    $sql = "SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli WHERE users.kode_poli = '1'";
    return $this->db->query($sql);
  }

  function dokter_bangsat($kode_poli)
  {

      $sql = "SELECT * FROM users JOIN poli ON users.kode_poli = poli.kode_poli WHERE users.kode_poli = $kode_poli";
      return $this->db->query($sql);
  } 


 function lihat_dogi_index()
  {
    $tanggal = date('Y-m-d');
    $sql = "SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli LIKE '$tanggal%'";
    return $this->db->query($sql);
  }
   function lihat_donak_index()
  {
    $tanggal = date('Y-m-d');
    $sql = "SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli LIKE '$tanggal%'";
    return $this->db->query($sql);
  }
 function lihat_bidan_index()
  {
    $tanggal = date('Y-m-d');
    $sql = "SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli LIKE '$tanggal%'";
    return $this->db->query($sql);
  }

  function lihat_dokum($tanggal_antrian)
  {
    date_default_timezone_set('Asia/Jakarta');
  	$tanggal_pesan = date('Y-m-d');
  	$sql = "SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli WHERE antrian.kode_poli = '1' AND tanggal_antrian LIKE '$tanggal_antrian%' ORDER BY tanggal_antrian DESC";
  	return $this->db->query($sql);
  }
  function lihat_dokum_pasien($tanggal_antrian,$dokter)
  {
    date_default_timezone_set('Asia/Jakarta');
    $tanggal_pesan = date('Y-m-d');
    $sql = "SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli WHERE antrian.kode_poli = '1' AND nama_dokter = '$dokter' AND tanggal_antrian LIKE '$tanggal_antrian%' ORDER BY tanggal_antrian ASC";
    return $this->db->query($sql);
  }
  function lihat_dokum_tanggal($from,$to)
  {
    date_default_timezone_set('Asia/Jakarta');
    $tanggal_antrian = date('Y-m-d');
    $sql = "SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli WHERE antrian.kode_poli = '1' AND tanggal_antrian >= '$from' AND tanggal_antrian <= '$to' ORDER BY tanggal_antrian ASC";
    return $this->db->query($sql);
  }

   function lihat_dokum_sendiri($tanggal_antrian,$id_user)
  {
    date_default_timezone_set('Asia/Jakarta');
    $tanggal_pesan = date('Y-m-d');
    $sql = "SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli WHERE users.id_user = $id_user AND antrian.kode_poli = '1' AND tanggal_antrian LIKE '$tanggal_antrian%' ORDER BY antrian.nomor_antrian ASC";
    return $this->db->query($sql);
  }



  function lihat_dogi($tanggal_antrian)
  {
  	$tanggal = date('Y-m-d');
  	$sql = "SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli WHERE antrian.kode_poli = '2' AND tanggal_antrian LIKE '$tanggal_antrian%' ORDER BY tanggal_antrian DESC";
  	return $this->db->query($sql);
  }
  function lihat_dogi_pasien($tanggal_antrian,$dokter)
  {
    $tanggal = date('Y-m-d');
    $sql = "SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli WHERE antrian.kode_poli = '2' AND nama_dokter = '$dokter' AND tanggal_antrian LIKE '$tanggal_antrian%' ORDER BY tanggal_antrian ASC";
    return $this->db->query($sql);
  }
  function lihat_dogi_tanggal($from,$to)
  {
    $tanggal_antrian = date('Y-m-d');
    $sql = "SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli WHERE antrian.kode_poli = '2' AND tanggal_antrian >= '$from' AND tanggal_antrian <= '$to' ORDER BY  tanggal_antrian ASC";
    return $this->db->query($sql);
  }
   function lihat_dogi_sendiri($tanggal_antrian,$id_user)
  {
    $tanggal = date('Y-m-d');
    $sql = "SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli WHERE users.id_user = $id_user AND antrian.kode_poli = '2' AND tanggal_antrian LIKE '$tanggal_antrian%' ORDER BY tanggal_antrian ASC";
    return $this->db->query($sql);
  }


  function lihat_donak($tanggal_antrian)
  {
  	$tanggal = date('Y-m-d');
  	$sql = "SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli WHERE antrian.kode_poli = '3' AND tanggal_antrian LIKE '$tanggal_antrian%' ORDER BY tanggal_antrian DESC";
  	return $this->db->query($sql);
  }
  function lihat_donak_pasien($tanggal_antrian,$dokter)
  {
    $tanggal = date('Y-m-d');
    $sql = "SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli WHERE antrian.kode_poli = '3' AND nama_dokter = '$dokter' AND tanggal_antrian LIKE '$tanggal_antrian%' ORDER BY tanggal_antrian ASC";
    return $this->db->query($sql);
  }
function lihat_donak_tanggal($from,$to)
  {
    $tanggal_antrian = date('Y-m-d');
    $sql = "SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli WHERE antrian.kode_poli = '3' AND tanggal_antrian >= '$from' AND tanggal_antrian <= '$to' ORDER BY  tanggal_antrian ASC";
    return $this->db->query($sql);
    
  }

function lihat_donak_sendiri($tanggal_antrian,$id_user)
  {
    $tanggal = date('Y-m-d');
    $sql = "SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli WHERE users.id_user = $id_user AND antrian.kode_poli = '3' AND tanggal_antrian LIKE '$tanggal_antrian%' ORDER BY tanggal_antrian ASC";
    return $this->db->query($sql);
  }



  function lihat_bidan($tanggal_antrian)
  {
  	$tanggal = date('Y-m-d');
  	$sql ="SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli 
  	WHERE antrian.kode_poli = '4' AND tanggal_antrian LIKE '$tanggal_antrian%' ORDER BY tanggal_antrian DESC";
  	return $this->db->query($sql);
  }
  function lihat_bidan_pasien($tanggal_antrian,$dokter)
  {
    $tanggal = date('Y-m-d');
    $sql ="SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli 
    WHERE antrian.kode_poli = '4' AND nama_dokter = '$dokter' AND tanggal_antrian LIKE '$tanggal_antrian%' ORDER BY tanggal_antrian ASC";
    return $this->db->query($sql);
  }
  function lihat_bidan_tanggal($from,$to)
  {
    $tanggal = date('Y-m-d');
    $sql ="SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli 
    WHERE antrian.kode_poli = '4' AND tanggal_antrian >= '$from' AND tanggal_antrian <= '$to' ORDER BY tanggal_antrian ASC";
    return $this->db->query($sql);
  }

  function lihat_bidan_sendiri($tanggal_antrian,$id_user)
  {
    $tanggal = date('Y-m-d');
    $sql ="SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli 
    WHERE users.id_user = $id_user AND antrian.kode_poli = '4' AND tanggal_antrian LIKE '$tanggal_antrian%' ORDER BY tanggal_antrian ASC";
    return $this->db->query($sql);
  }

  function list_dokter()
  {
	 $sql = "SELECT * FROM users JOIN poli ON users.kode_poli = poli.kode_poli WHERE level = 'Dokter' ";
	 return $this->db->query($sql);
  }

  function total_dokter()
  {
    $where = array('level' => 'Dokter' );
    return $this->db->get_where('users',$where);
  }

  function total_pasien()
  {
    $where = array('level' => 'pasien' );
    return $this->db->get_where('users',$where);
  }
  function total_antrian()
  {
    $tanggal = date('Y-m-d');
    $sql = "SELECT * FROM antrian WHERE status = 'belum diperiksa' AND tanggal_pesan LIKE '$tanggal%'";
    return $this->db->query($sql);
  }

  function antrian_dokter($kode_poli,$nama_dokter)
  {
    $tanggal = date('Y-m-d');
    $sql ="SELECT *, users.nama AS nama_pasien FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli 
    WHERE antrian.kode_poli = $kode_poli AND tanggal_pesan LIKE '$tanggal%' AND nama_dokter = '$nama_dokter'";
    return $this->db->query($sql);
  }

  function cek_antrian($id_user)
  {
    $tanggal = date('Y-m-d');
    $sql = "SELECT * FROM antrian WHERE id_user = $id_user AND tanggal_pesan LIKE '$tanggal%'";
    return $this->db->query($sql);
  }

  function m_hapus_dokter($id)
  {
      $this->db->where('id_user',$id);
      $this->db->delete('users');
  }

  function m_hapus_pasien($id)
  {
    $this->db->where('id_user',$id);
    $this->db->delete('users');
  }

  function ambil_nama($id_user)
  {
    $sql = "SELECT * FROM users WHERE id_user = $id_user";
    return $this->db->query($sql);
  }

  function ambil_nama_poli($kode_poli)
  {
    $sql = "SELECT * FROM poli WHERE kode_poli = $kode_poli";
    return $this->db->query($sql);
  }

  function update_antrian($keluhan,$id_antrian)
  {
    $sql = "UPDATE antrian SET keluhan_penyakit = '$keluhan', status = 'sudah diperiksa' WHERE id_antrian = $id_antrian";
    return $this->db->query($sql);
  }
  function perhari($hari2)
  {
    $sql = "SELECT * FROM users JOIN poli ON users.kode_poli = poli.kode_poli WHERE users.hari = '$hari2'";
    return $this->db->query($sql);
  }
function cek_data($where,$isi)
{

  return $this->db->get_where('users',array($where => $isi)); 
}
function laporan_perpoli($from,$to,$kode_poli)
{
  date_default_timezone_set('Asia/Jakarta');
    $tanggal_antrian = date('Y-m-d');
    $sql = "SELECT * FROM antrian JOIN users ON antrian.id_user = users.id_user JOIN poli ON antrian.kode_poli = poli.kode_poli WHERE antrian.kode_poli = '$kode_poli' AND tanggal_antrian >= '$from' AND tanggal_antrian <= '$to' ORDER BY tanggal_antrian ASC";
    return $this->db->query($sql);
}

 
  

  //function ambil_jam($nama_dokter)
  //{
    //$sql = "SELECT * FROM users WHERE nama = '$nama_dokter'";
    //return $this->db->query($sql);
  //}
}