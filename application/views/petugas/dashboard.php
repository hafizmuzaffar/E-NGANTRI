<!-- Traffic sources -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h6 class="panel-title">Selamat Datang, <b><?php echo $this->session->userdata('admin_name');?></b>, Anda login sebagai Administrator</h6>
                            <hr>
							<div class="heading-elements">
								
							</div>
						</div>

						<div class="container-fluid">
							<div class="row">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="17%">&nbsp;</td>
    <td width="63%"><center>Selamat datang di halaman dashboard dokter. Pada aplikasi ini Anda dapat melihat data semua pasien<br>
      yang telah terdaftar sebagai pasien. Baik pasien yang melakukan pendaftaran secara online maupun <br>
      yang melakukan pendaftaran manual ke rumah sakit. <br>
      <br>
      Silahkan pilih pasien yang ingin Anda masukan hasil peeriksaan dengan memilih pasien berdasarkan Nomor Token pasien. <br>
      Anda dapat mengisi hasil pemeriksaan dan merubah status pesien menjadi 'Selesai' agar pasien dapat melihat <br>
      hasil pemeriksaan Anda secara online dengan memasukan Nomor Token pasien pada halaman pengunjung. <br>
      <br>
      Terimakasih, salam Administrator</center></td>
    <td width="20%">&nbsp;</td>
  </tr>
</table>
<br><br><br>
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
											<a href="#" class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-watch2"></i></a>
										</li>
										<li class="text-left">
											<div class="text-semibold">Pasien Pending</div>
											<div class="text-muted"><?=$totalpasien0; ?> Pending</div>
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
											<div class="text-semibold">Pasien Proses</div>
											<div class="text-muted"><span class="status-mark border-success position-left"></span><?=$totalpasien1; ?> Pasien</div>
										</li>
									</ul>

									<div class="col-lg-10 col-lg-offset-1">
										<div class="content-group" id="total-online"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="position-relative" id="traffic-sources"></div>
					</div>
					<!-- /traffic sources -->
