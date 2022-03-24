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
              <form class="form-wrap" action="<?php echo base_url('welcome/daftar_dokter_simpan'); ?>" method="POST">
                <h3 class="pb-20 text-center mb-30">Tambah Dokter</h3>    
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'" > <br>
                <input type="text" class="form-control" name="alamat" placeholder="Alamat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'" > <br>
                 <select class="form-control" name="jenis_kelamin">
                    <option data-display="">Jenis Kelamin</option>
                    <option value="1">Pria</option>
                    <option value="2">Wanita</option>
                  </select> <br>
                <input type="number" class="form-control" name="nomor_tlp" placeholder="Nomor Telepone " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Telephone'" > <br>
                <input type="email" class="form-control" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" > <br>
                <input type="password" class="form-control" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" > <br>
                <input type="date" name="tgl_lahir" class="form-control"  placeholder="Tanggal Lahir" autocomplete="off"> <br>
                <input type="text" name="hari" class="form-control"  placeholder="Hari" autocomplete="off"> <br>
                <input type="number" class="form-control" name="kode_poli" placeholder="Kode Poli" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kode Poli'" maxlength="4" max="4" min="1"> <br>
                <input type="text" class="form-control" name="jam_awal" placeholder="Jam Awal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jam Awal'"> <br>
                <input type="text" class="form-control" name="jam_akhir" placeholder="Jam Akhir" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jam Akhir'"> <br>

                 <br> 
                 
                <button class="primary-btn text-uppercase">Daftar Dokter</button>
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