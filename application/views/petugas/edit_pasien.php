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
  <div class="col-lg-6 col-md-6 appointment-right pt-60 pb-60">
              <form class="form-wrap" action="<?php echo base_url('petugas/edit_pasien_simpan'); ?>" method="POST">
                <h3 class="pb-20 text-center mb-30">Edit Data Pasien</h3>    
                <input type="hidden" class="form-control" name="id_user" placeholder="ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ID'" value="<?php echo $pasien['id_user']; ?>" > <br>
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'" value="<?php echo $pasien['nama']; ?>" > <br>
                <input type="number" class="form-control" name="nik" placeholder="Nik" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nik'" value="<?php echo $pasien['nik']; ?>"> <br>
                <input type="text" class="form-control" name="alamat" placeholder="Alamat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'" value="<?php echo $pasien['alamat']; ?>"> <br>
                 <select class="form-control" name="jenis_kelamin" value="<?php echo $pasien['jenis_kelamin']; ?>">
                    <option data-display="">Jenis Kelamin</option>
                    <option value="1">Pria</option>
                    <option value="2">Wanita</option>
                  </select> <br>
                <input type="number" class="form-control" name="nomor_tlp" placeholder="Nomor Telepone " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Telephone'" value="<?php echo $pasien['nomor_tlp']; ?>" > <br>
                <input type="email" class="form-control" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" value="<?php echo $pasien['email']; ?>" > <br>
                <input type="password" class="form-control" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" > <br>
                  <select class="form-control" name="pilih_metode_pembayaran" value="<?php echo $pasien['pilih_metode_pembayaran']; ?>">
                    <option data-display="">Jenis Pasien</option>
                    <option value="1">Tunai</option>
                    <option value="2">BPJS</option>
                    <option value="3">ASKES</option>
                  </select> <br>
                    <input type="number" class="form-control" name="no_asuransi" placeholder="Nomor Asuransi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" > <br>
                <input type="date" name="tgl_lahir" class="form-control"  placeholder="Tanggal Lahir" autocomplete="off" value="<?php echo $pasien['tgl_lahir']; ?>"> <br>

                 <br> 
                 
                <button class="primary-btn text-uppercase">Daftar Pasien</button>
                 </form>
            </div>
          </div>
        </div>
      <script   src="<?php echo base_url('assets/'); ?>js/vendor/jquery-2.2.4.min.js"></script>
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