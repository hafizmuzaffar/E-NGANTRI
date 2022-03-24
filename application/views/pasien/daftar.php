<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('assets/'); ?>img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Medical</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/linearicons.css">
      <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.css">
      <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/magnific-popup.css">
      <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/jquery-ui.css">        
      <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/nice-select.css">              
      <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/animate.min.css">
      <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/owl.carousel.css">     
      <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/jquery-ui.css">      
      <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/main.css">
    </head>
<body style="background-color: #93B874">



	 <section class="team-area section-gap">
            <div class="container">
                <form class="form-wrap " action="<?php echo base_url('pasien/daftar_antrian_simpan'); ?>" method="POST">
              
                   
                  <h3 class="pb-20 text-center mb-30" Pilih Tanngal Pesan>
                    <input type="hidden" class="form-control" name="tanggal_pesan" placeholder="Pilih Tanggal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'pilih_tanggal_pesan'" required >Pilih Tanggal Pesan<br><br>
                       <input id="datepicker1" name="tanggal_pesan" class="form-control"  placeholder="Tanggal Pesan" autocomplete="off" required>
                  <h3 class="pb-20 text-center mb-30">Pilih Dokter Sesuai Berikut</h3>
                    <select class="form-control" name="pilih_dokter" required='pilih_dokter'>
                    <option>Pilih Dokter</option>
                      <?php foreach ($dokum as $key ) { ?>
                    <option value="<?php echo $key['nama'] ?>"><?php echo $key['nama'] ?> (jam kerja :<?php echo $key['jam_awal'] ?> - Jam Akhir :<?php echo $key['jam_akhir'] ?>)</option>
                      <?php } ?>
                  </select> <br>
              
                  <input type="hidden" name="kode_poli" value="<?php echo $this->uri->segment(3); ?>">
                  <?php if ($this->session->userdata('level') == 'Petugas') {?>
                  <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
                    
                  <?php } ?>
                  
                

                 <br> <br>
                  
                <center><a class="btn btn-success" href="<?php echo base_url('pasien/pilih_poli'); ?>">kembali</a><input type="submit" name="submit" value="daftar antrian" class="btn btn-primary">
                  </center>
                 </form>
            </div>
        </section>

		<script src="<?php echo base_url('assets/'); ?>js/vendor/jquery-2.2.4.min.js"></script>
      <script src="<?php echo base_url('assets/'); ?>js/popper.min.js"></script>
      <script src="<?php echo base_url('assets/'); ?>js/vendor/bootstrap.min.js"></script>      
      <script src="<?php echo base_url('assets/'); ?>https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script src="<?php echo base_url('assets/'); ?>js/jquery-ui.js"></script>         
        <script src="<?php echo base_url('assets/'); ?>js/easing.min.js"></script>      
      <script src="<?php echo base_url('assets/'); ?>js/hoverIntent.js"></script>
      <script src="<?php echo base_url('assets/'); ?>js/superfish.min.js"></script> 
      <script src="<?php echo base_url('assets/'); ?>js/jquery.ajaxchimp.min.js"></script>
      <script src="<?php echo base_url('assets/'); ?>js/jquery.magnific-popup.min.js"></script> 
        <script src="<?php echo base_url('assets/'); ?>js/jquery.tabs.min.js"></script>           
      <script src="<?php echo base_url('assets/'); ?>js/jquery.nice-select.min.js"></script>  
      <script src="<?php echo base_url('assets/'); ?>js/owl.carousel.min.js"></script>                  
      <script src="<?php echo base_url('assets/'); ?>js/mail-script.js"></script> 
      <script src="<?php echo base_url('assets/'); ?>js/main.js"></script>  
	</body>
	</html>