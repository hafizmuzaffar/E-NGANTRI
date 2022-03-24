  <!DOCTYPE html>
  <html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
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
    <title>E-NGANTRI</title>

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
      <header id="header">
        <div class="header-top">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 col-sm-6 col-4 header-top-left">
                 
                <font color="white">
               
              </div>
              
            </div>                  
          </div>
      </div>
        <div class="container main-menu">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo" >
              <a href=""><img src="<?php echo base_url('assets/'); ?>img/logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li><a href="<?php echo base_url (''); ?>"><?php echo $this->session->userdata('nama'); ?></a></li>
                <li><a href="<?php echo base_url('pasien/pilih_poli'); ?>">Daftar Antrian</a></li>
                 <li><a href="<?php echo base_url('welcome/tentang'); ?>">Tentang</a></li>
                 <li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>                            
                  </ul>
                </li>                                                     
              </ul>
            </nav><!-- #nav-menu-container -->            
          </div>
        </div>
      </header><!-- #header -->

      <!-- start banner Area -->
      <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>  
        <div class="container">
          <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-8 col-md-12">
              <h1>
               Puskesmas Sarijadi   
              </h1>
              <p class="pt-10 pb-10 text-white">
              Jalan Sari Asih No.76, Sarijadi, Sukasari, Sarijadi, Sukasari, Kota Bandung, Jawa Barat 40151
              </p>
              <a class="primary-btn text-uppercase" href="<?php echo base_url('pasien/pilih_tanggal_antrian_sendiri'); ?>">Lihat Antrian Sendiri</a>
              <a href="<?php echo base_url('welcome/pilih_poli_dokter'); ?>" class="primary-btn text-uppercase">Lihat Antrian Umum</a>
            </div>                    
          </div>
        </div>          
      </section>
      <!-- End banner Area -->

      <script src="<?php echo base_url('assets/'); ?>js/vendor/jquery-2.2.4.min.js"></script>
      <script src="<?php echo base_url('assets/'); ?>js/popper.min.js"></script>
      <script src="<?php echo base_url('assets/'); ?>js/vendor/bootstrap.min.js"></script>      
      <script src="<?php echo base_url('assets/'); ?>https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA">
      </script>
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