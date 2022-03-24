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
<body>


    <center>

            <p>Nama pasien : <?php echo $nama_pasien; ?></p>
            <p>Poli : <?php echo $poli; ?></p>
            <p>Nama Dokter :<?php echo $nama_dokter; ?></p>
             <p>No. antrian : <?php echo $antrian; ?></p>
              <p>tanggal pesan : <?php echo $tanggal_pesan; ?></p>
              <p>tanggal antrian<?php echo $tanggal_antrian; ?></p>
              <p>Metode pembayaran :<?php echo $metode_pembayaran; ?></p>
              <p>No Asuransi : <?php echo $no_asuransi; ?></p>

              <form action="<?php echo base_url('pasien/lihat_antrian'); ?>" method="POST">
                

              </form>
              <a href="<?php echo base_url('welcome/lihat_antrian'); ?>">Lihat Antrian</a>
              <form action="<?php echo base_url('pasien/cetak'); ?>" method="POST">
                <input type="hidden" name="nama" value="<?php echo $nama_pasien; ?>">
                <input type="hidden" name="poli" value="<?php echo $poli; ?>">
                <input type="hidden" name="nama_dokter" value="<?php echo $nama_dokter; ?>">
                <input type="hidden" name="antrian" value="<?php echo $antrian; ?>">
                <input type="hidden" name="tanggal_pesan" value="<?php echo $tanggal_pesan; ?>">
                <input type="hidden" name="tanggal_antrian" value="<?php echo $tanggal_antrian; ?>">
                <input type="hidden" name="metode_pembayaran" value="<?php echo $metode_pembayaran; ?>">
                <input type="hidden" name="no_asuransi" value="<?php echo $no_asuransi; ?>">
                <input type="submit" name="submit" value="Cetak Antrian" class="btn btn-primary">
              </form>

            </center>




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