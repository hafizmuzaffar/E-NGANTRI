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
			<a class="navbar-brand" href="<?php echo base_url('');?>">DOKTER</a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
							
				<li class="<?php if ($title == 'Dashboard Dokter')
				{
					echo 'active';
					}
				?>">
					<a href="<?php echo base_url();?>index.php/dokter/">
						<i class="icon-credit-card"></i> Dashboard Dokter
					</a>
				</li>
                <li class="<?php if ($title == 'Data Pasien')
				{
					echo 'active';
					}
				?>">
					<a href="<?php echo base_url();?>index.php/dokter/data_pasien">
						<i class="icon-people"></i> Data Pasien
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
							<h4><i class="icon-arrow-left52 position-left"></i> Dashboard Dokter</h4>
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
				
				 <table border="5" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Poli</th>
                                <th>nama-dokter</th>
                                <th>Nomor Antrian</th>
                                <th>Tanggal Antrian</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                                <th>action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($antrian as $dk) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $dk->nama_pasien; ?></td>
                                <td><?php echo $dk->nama_poli; ?></td>
                                <td><?php echo $dk->nama_dokter; ?></td>
                                <td><?php echo $dk->nomor_antrian; ?></td>
                                <td><?php echo $dk->tanggal_antrian; ?></td>
                                 <td><?php echo $dk->status; ?></td>
                                 <?php if ($dk->status  == 'sudah diperiksa') {
                                 	$read = "readonly";
                                 }else{
                                 	$read = "";
                                 } ?>
                                 <td><form action="<?php echo base_url('dokter/sudah_antrian') ?>" method="POST"><input type="text" name="keluhan_penyakit" value="<?php echo $dk->keluhan_penyakit; ?>" <?php echo $read; ?>><input type="hidden" name="id_antrian" value="<?php echo $dk->id_antrian; ?>"></td>
                                 <td><?php if ($dk->status == 'belum diperiksa') { ?>
                                 	<input type="submit" name="submit" value="sudah diperiksa" class="btn btn-primary"><?php } ?></form></td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                    <br><br>
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
                    