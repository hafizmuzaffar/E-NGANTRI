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
    <body style="background-color: black;">  <div class="container">
         <font color="white">
       <form class="form-wrap " action="<?php echo base_url('welcome/index'); ?>" method="POST">
              

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

                <?php if (empty($dokum)) {
                  
                }else{ ?>

                
                <center><h3><font color="white">Antrian Poli Umum</font></h3></center>
     
                  <table border="6" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Poli</th>
                                <th>Nama Dokter</th>
                                <th>Nomor Antrian</th>
                                <th>Tanggal Daftar</th>
                                <th>Tanggal Antrian</th>
                                <th>Status</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($dokum as $dk) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $dk->nama; ?></td>
                                <td><?php echo $dk->nama_poli; ?></td>
                                <td><?php echo $dk->nama_dokter; ?></td>
                                <td><?php echo $dk->nomor_antrian; ?></td>
                                <td><?php echo $dk->tanggal_pesan; ?></td>
                                <td><?php echo $dk->tanggal_antrian; ?></td>
                                 <td><?php echo $dk->status; ?></td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                  <?php }?>
                   <?php if (empty($dogi)) {
                  
                }else{ ?>
                    <center><h3><font color="white">Antrian Poli Gigi</font></h3></center>
                    <table border=""6 class="table ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Poli</th>
                                <th>Nama Dokter</th>
                                <th>Nomor Antrian</th>
                                <th>Tanggal Daftar</th>
                                <th>Tanggal Antrian</th>
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($dogi as $dk) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $dk->nama; ?></td>
                                <td><?php echo $dk->nama_poli; ?></td>
                                <td><?php echo $dk->nama_dokter; ?></td>
                                <td><?php echo $dk->nomor_antrian; ?></td>
                                <td><?php echo $dk->tanggal_pesan; ?></td>
                                 <td><?php echo $dk->tanggal_antrian; ?></td>
                                 <td><?php echo $dk->status; ?></td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                  <?php  } ?>
                   <?php if (empty($donak)) {
                  
                }else{ ?>
                    <center><h3><font color="white">Antrian Poli Anak</font></h3></center>
                    <table border="5" class="table ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Poli</th>
                                <th>Nama Dokter</th>
                                <th>Nomor Antrian</th>
                                <th>Tanggal Daftar</th>
                                <th>Tanggal Antrian</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($donak as $dk) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $dk->nama; ?></td>
                                <td><?php echo $dk->nama_poli; ?></td>
                                <td><?php echo $dk->nama_dokter; ?></td>
                                <td><?php echo $dk->nomor_antrian; ?></td>
                                <td><?php echo $dk->tanggal_pesan; ?></td>
                                 <td><?php echo $dk->tanggal_antrian; ?></td>
                                 <td><?php echo $dk->status; ?></td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                  <?php } ?>
                   <?php if (empty($bidan)) {
                  
                }else{ ?>
                    <center><h3><font color="white">Antrian Poli Bidan<font></font></h3></center>
                    <table border="5" class="table ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Poli</th>
                                <th>Nama Dokter</th>
                                <th>Nomor Antrian</th>
                                <th>Tanggal Daftar</th>
                                <th>Tanggal Antrian</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($bidan as $dk) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $dk->nama; ?></td>
                                <td><?php echo $dk->nama_poli; ?></td>
                                <td><?php echo $dk->nama_dokter; ?></td>
                                <td><?php echo $dk->nomor_antrian; ?></td>
                                <td><?php echo $dk->tanggal_pesan; ?></td>
                                 <td><?php echo $dk->tanggal_antrian; ?></td>
                                 <td><?php echo $dk->status; ?></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                            </font>
                            </tbody>
                        </tbody>

                    </table>
                  <?php }?>
                    <center><input type="submit" name="submit" value="kembali" class="btn btn-primary"></center>
                 </div></font>
            </div> </div> 


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