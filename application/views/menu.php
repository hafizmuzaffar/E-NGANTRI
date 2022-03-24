<nav class="navbar navbar-inverse">
<div class="container-fluid">
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
  <!--Akses Menu Untuk Admin-->
  <?php if($this->session->userdata('akses')=='1'):?>
      <li class="active"><a href="<?php echo base_url().'index.php/page'?>">Dashboard</a></li>
      <li><a href="<?php echo base_url().'index.php/page/data_mahasiswa'?>">Data Mahasiswa</a></li>
      <li><a href="<?php echo base_url().'index.php/page/input_nilai'?>">Input Nilai</a></li>
      <li><a href="<?php echo base_url().'index.php/page/krs'?>">KRS</a></li>
      <li><a href="<?php echo base_url().'index.php/page/lhs'?>">LHS</a></li>
  <!--Akses Menu Untuk Dosen-->
  <?php elseif($this->session->userdata('akses')=='2'):?>
      <li class="active"><a href="<?php echo base_url().'index.php/page'?>">Dashboard</a></li>
      <li><a href="<?php echo base_url().'index.php/page/data_mahasiswa'?>">Data Mahasiswa</a></li>
      <li><a href="<?php echo base_url().'index.php/page/input_nilai'?>">Input Nilai</a></li>
  <!--Akses Menu Untuk Mahasiswa-->
  <?php else:?>
      <li class="active"><a href="<?php echo base_url().'index.php/page'?>">Dashboard</a></li>
      <li><a href="<?php echo base_url().'index.php/page/krs'?>">KRS</a></li>
      <li><a href="<?php echo base_url().'index.php/page/lhs'?>">LHS</a></li>
  <?php endif;?>
  </ul>
 
  <ul class="nav navbar-nav navbar-right">
    <li><a href="<?php echo base_url().'index.php/login/logout'?>">Sign Out</a></li>
  </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav> 