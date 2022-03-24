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
  <div class="col-lg-6 col-md-6 appointment-right pt-60 pb-60">
    <form class="form-wrap" action="<?php echo base_url('welcome/daftar_pasien_simpan'); ?>" method="POST">
      <h3 class="pb-20 text-center mb-30">Daftar Akun Pasien</h3>
      <input type="number" class="form-control" name="nik" placeholder="masukan nomor nik" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NIK'" minlength="15" maxlength="16" required=""> <br>
      <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'" minlength="10" required> <br>
      <input type="text" class="form-control" name="alamat" placeholder="Alamat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'" required=""> <br>
      <select class="form-control" name="jenis_kelamin" required>
        <option data-display="">Jenis Kelamin</option>
        <option value="1">Pria</option>
        <option value="2">Wanita</option>
      </select> <br>

      <input type="number" class="form-control" name="nomor_tlp" placeholder="Nomor Telepone " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Telephone'" minlength="10" maxlength="13" required> <br>
      <input type="email" class="form-control" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required="harus di isi"> <br>
      <input type="password" class="form-control" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" minlength="5" required> <br>
      tanggal lahir
      <input type="date"="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" autocomplete="off" required> <br> <br>
      <h3 class="pb-20 text-center mb-30"> Jenis Pasien</h3>

      <!-- <select class="form-control" name="pilih_metode_pembayaran" required="">
                    <option value="TUNAI">TUNAI</option>
                    <option value="BPJS">BPJS</option>
                    <option value="ASKES">ASKES</option>
                  
                  </select> <br> -->
      <input type="hidden" name="kode_poli" value="<?php echo $this->uri->segment(3); ?>">
      <!-- <input type="number" class="form-control" name="no_asuransi" placeholder="Masukan No Asuransi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan No Asuransi'" minlength="13" maxlength="14" >*isi jika menggunakan asuransi<br><br> -->
      <center><a class="btn btn-success" href="<?php echo base_url('welcome/index'); ?>">kembali</a><input type="submit" name="submit" value="Daftar" class="btn btn-primary">

    </form>
  </div>
  </div>
  </div>
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