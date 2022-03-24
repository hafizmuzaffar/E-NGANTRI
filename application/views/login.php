<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V1</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo base_url('assets3/Login_v1/') ?>images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets3/Login_v1/') ?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets3/Login_v1/') ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets3/Login_v1/') ?>vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets3/Login_v1/') ?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets3/Login_v1/') ?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets3/Login_v1/') ?>css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets3/Login_v1/') ?>css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          
          <script type="text/javascript">    
                //menampilkan jam dan tanggal
            //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
            function tampilkanwaktu(){
                //buat object date berdasarkan waktu saat ini
                var waktu = new Date();
                //ambil nilai jam, 
                //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length
                var sh = waktu.getHours() + ""; 
                //ambil nilai menit
                var sm = waktu.getMinutes() + "";
                //ambil nilai detik
                var ss = waktu.getSeconds() + "";
                //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
                document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
            }
                </script>
                <body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">               
                <span id="clock"></span> 
                <?php
                $hari = date('l');
                /*$new = date('l, F d, Y', strtotime($Today));*/
                if ($hari=="Sunday") {
                  echo "Minggu";
                }elseif ($hari=="Monday") {
                  echo "Senin";
                }elseif ($hari=="Tuesday") {
                  echo "Selasa";
                }elseif ($hari=="Wednesday") {
                  echo "Rabu";
                }elseif ($hari=="Thursday") {
                  echo("Kamis");
                }elseif ($hari=="Friday") {
                  echo "Jum'at";
                }elseif ($hari=="Saturday") {
                  echo "Sabtu";
                }
                ?>,
                <?php
                $tgl =date('d');
                echo $tgl;
                $bulan =date('F');
                if ($bulan=="January") {
                  echo " Januari ";
                }elseif ($bulan=="February") {
                  echo " Februari ";
                }elseif ($bulan=="March") {
                  echo " Maret ";
                }elseif ($bulan=="April") {
                  echo " April ";
                }elseif ($bulan=="May") {
                  echo " Mei ";
                }elseif ($bulan=="June") {
                  echo " Juni ";
                }elseif ($bulan=="July") {
                  echo " Juli ";
                }elseif ($bulan=="August") {
                  echo " Agustus ";
                }elseif ($bulan=="September") {
                  echo " September ";
                }elseif ($bulan=="October") {
                  echo " Oktober ";
                }elseif ($bulan=="November") {
                  echo " November ";
                }elseif ($bulan=="December") {
                  echo " Desember ";
                }
                $tahun=date('Y');
                echo $tahun;
                ?>
        </div>

        <form class="login100-form validate-form" method="POST" action="<?php echo base_url('login/auth') ?>">
          <span class="login100-form-title">
            Member Login
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="Email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
          </div>

          <div class="text-center p-t-136">
            <a href="<?php echo base_url('welcome/daftar_pasien'); ?>" class="primary-btn text-uppercase" href="daftar_pasien">
              Create your Account
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  

  
<!--===============================================================================================-->  
  <script src="<?php echo base_url('assets3/Login_v1/') ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url('assets3/Login_v1/') ?>vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo base_url('assets3/Login_v1/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url('assets3/Login_v1/') ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url('assets3/Login_v1/') ?>vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="<?php echo base_url('assets3/Login_v1/') ?>js/main.js"></script>

</body>
</html>