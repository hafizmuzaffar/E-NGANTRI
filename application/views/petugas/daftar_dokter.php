<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>


  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url();?>assets4/backend/images/logo_icon_dark.png" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url();?>assets4/web/backend/images/logo_icon_dark.png" type="image/x-icon">

  <!-- Global stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets4/backend/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets4/backend/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets4/backend/css/core.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets4/backend/css/components.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets4/backend/css/colors.css" rel="stylesheet" type="text/css">
  <!-- /global stylesheets -->

  <!-- Core JS files -->
  <script type="text/javascript" src="<?php echo base_url();?>assets4/backend/js/plugins/loaders/pace.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets4/backend/js/core/libraries/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets4/backend/js/core/libraries/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets4/backend/js/plugins/loaders/blockui.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets4/backend/js/clock.js"></script>
  <!-- /core JS files -->

  <!-- Theme JS files -->
  <script type="text/javascript" src="<?php echo base_url();?>assets4/backend/js/plugins/visualization/d3/d3.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets4/backend/js/plugins/visualization/d3/d3_tooltip.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets4/backend/js/plugins/forms/styling/switchery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets4/backend/js/plugins/forms/styling/uniform.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets4/backend/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets4/backend/js/plugins/ui/moment/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets4/backend/js/plugins/pickers/daterangepicker.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>assets4/backend/js/plugins/ui/nicescroll.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets4/backend/js/plugins/ui/drilldown.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>assets4/backend/js/core/app.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets4/backend/js/pages/dashboard_boxed_full.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>assets4/backend/js/plugins/ui/ripple.min.js"></script>
  <!-- /theme JS files -->

</head>

<body onLoad="goforit();" class="layout-boxed navbar-top">

  <!-- Main navbar -->
  <div class="navbar navbar-inverse bg-indigo navbar-fixed-top">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url('');?>">PETUGAS</a>

      <ul class="nav navbar-nav visible-xs-block">
        <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
      </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
      <ul class="nav navbar-nav">
              
        <li class="<?php if ($title == 'Petugas')
        {
          
          }
        ?>">
          <a href="<?php echo base_url();?>petugas/">
            <i class="icon-credit-card"></i> Dashboard Petugas
          </a>
        </li>
                <li class="<?php if ($title == 'Data Pasien')
        {
          echo 'active';
          }
        ?>">
          <a href="<?php echo base_url();?>petugas/daftar_pasien">
            <i class="icon-people"></i> Data Pasien
          </a>
        </li>
         <li class="<?php if ($title == 'Data Dokter')
        {
          echo 'active';
          }
            if($title == 'Tambah Data Dokter')
            {
              echo 'active';
              }
              
              if($title == 'Edit Data Dokter')
            {
              echo 'active';
              }
        ?>">
          <a href="<?php echo base_url();?>petugas/daftar_dokter">
            <i class="icon-users"></i> Data Dokter
          </a>
        </li>
         <li class="<?php if ($title == 'Data Spesialis')
        {
          echo 'active';
          }
        ?>">
          <a href="<?php echo base_url();?>petugas/daftar_antrian">
            <i class="icon-bubbles4"></i> Data Antrian
          </a>
        </li>

                
      </ul>

      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown dropdown-user">
          <a class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo base_url();?>assets4/backend/images/dokter.png" alt="">
            <span><?php echo $this->session->userdata('nama_dokter');?></span>
            <i class="caret"></i>
          </a>

          <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="<?php echo base_url (''); ?>"><?php echo $this->session->userdata('nama'); ?></a></li>
            <li><a href="<?php echo base_url();?>login/logout"><i class="icon-switch2"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!-- /main navbar -->


  <!-- Page container -->
  <div class="page-container">

    <!-- Page content -->
    <div class="page-content">

      <!-- Main content -->
      <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-default">
          <div class="page-header-content">
            <div class="page-title">
              <h4><i class="icon-arrow-left52 position-left"></i> Data Dokter</h4>
            </div>

            <div class="heading-elements">
              <img src="<?php echo base_url();?>assets4/backend/images/husada.png" alt="">
            </div>
          </div>

          <div class="breadcrumb-line">
            <ul class="breadcrumb">
              <li><a href="<?php echo base_url();?>"><i class="icon-home2 position-left"></i> Home</a></li>
              <li class="active">Dashboard</li>
            </ul>

            <ul class="breadcrumb-elements">
              <li><a href="#"><i class="icon-calendar2 position-left"></i> <span id="clock"></span></a></li>
              
            </ul>
          </div>
        </div>

            <div class="panel-heading">
              <div class="row">

<a href="<?php echo base_url();?>index.php/petugas/tambah_dokter" class="btn btn-primary btn-sm"><i class="icon-add"></i> Tambah Data Dokter</a> <br /><br />
<table width="100%" border="1" class="table" bordercolor="#66CCCC" cellspacing="0" cellpadding="0">
  <tr class="bg-blue">
    <td align="center">No.</td>
    <td align="center">Spesialis</td>
    <td align="center">Nama Dokter</td>
    <td align="center">Jam Kerja</td>
    <td align="center">Hari Kerja</td>
    <td align="center">Email (Login)</td>
    <td align="center">Edit</td>
    <td align="center">Delete</td>
    </tr>
    <?php $no=1; ?>
    <?php foreach ($dokter as $p) { ?>
  <tr>
    <td align="center"><?php echo $no++; ?></td>
    <td align="center"><?php echo $p->nama_poli; ?> </td>
    <td align="center"><?php echo $p->nama; ?></td>
    <td align="center"><?php echo $p->jam_awal; ?> - <?php echo $p->jam_akhir; ?></td>
    <td align="center"><?php echo $p->hari; ?></td>
    <td><?php echo $p->email; ?> </td>

    <td align="center"><a href="<?=
    base_url('petugas/edit_dokter/'.$p->id_user);?>"><i class="icon-menu"></i></a></td>
    <td align="center"><a href="<?= base_url('petugas/p_hapus_dokter/'.$p->id_user);?>" onclick="return konfirmasi();"><i class="icon-trash"></i></td></a>
    </tr>
    <?php } ?>
</table>

                                
              </div>
          

            <div class="position-relative" id="traffic-sources"></div>
          </div>
            </div>
            </div>   
            <div class="col-lg-4">
                  <ul class="list-inline text-center">
                    <li>
                      <a href="#" class="btn border-teal text-teal btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-users"></i></a>
                    </li>
                    <li class="text-left">
                      <div class="text-semibold">Data Dokter</div>
                      <div class="text-muted"><?=$totaldokter; ?> Dokter</div>
                    </li>
                  </ul>

                  <div class="col-lg-10 col-lg-offset-1">
                    <div class="content-group" id="new-visitors"></div>
                  </div>
                </div>

                <div class="col-lg-4">
                  <ul class="list-inline text-center">
                    <li>
                      <a href="#" class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-users"></i></a>
                    </li>
                    <li class="text-left">
                      <div class="text-semibold">Data Pasien</div>
                      <div class="text-muted"><?=$totalpasien; ?> Pasien</div>
                    </li>
                  </ul>

                  <div class="col-lg-10 col-lg-offset-1">
                    <div class="content-group" id="new-sessions"></div>
                  </div>
                </div>

                <div class="col-lg-4">
                  <ul class="list-inline text-center">
                    <li>
                      <a href="#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-people"></i></a>
                    </li>
                    <li class="text-left">
                      <div class="text-semibold">Data Antrian Hari Ini</div>
                      <div class="text-muted"><?=$totalantrian; ?> Antrian</div>
                    </li>
                  </ul>

                  <div class="col-lg-10 col-lg-offset-1">
                    <div class="content-group" id="total-online"></div>
                  </div>
                </div>
              </div>
            </div>          