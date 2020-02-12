<section class="content-header">
	<h1>
		Semua Reservasi
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Transaksi</a></li>
		<li class="active">Semua Reservasi</li>
	</ol>
</section><br>

<div class="row">
				<div class="col-md-12">
					
				<form method="post" action="">
			<div class="row">
				<div class="col-sm-3">
					<div class="form-group">
						<input id="tanggal" type="text" data-date-format="yyyy-mm-dd" class="form-control datepicker" name="tanggal_awal" placeholder="Dari Tanggal" required="" />
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<input id="tanggal2"  type="text" data-date-format="yyyy-mm-dd" class="form-control datepicker" name="tanggal_akhir" placeholder="Sampai Tanggal" />
					</div>
				</div>
				<div class="col-sm-3">
					<button class="btn btn-success" type="submit" name="laporan-transaksi">Lihat Laporan</button>
					<a class="btn btn-primary " href="<?= base_url() ?>sistem/print"target="_BLANK" >
                           <i class="fa fa-print"> Print</i></a>
				</div>
			
			</div>
			
			</form>
			
                        

                 
					<div class="portlet box green">
						<div class="portlet-title">
						 

							
						</div>
						 <div class="body">

						<div class="portlet-body">
							
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Telp</th>
								<th>Alamat</th>
								<th>Tanggal Masuk</th>
								<th>Tanggal Keluar</th>
								<th>Kamar</th>
								
								
							</tr>
							</thead>
							<tbody>
											<?php
										$no=1;
										
										foreach ($reservasi->result_array() as $tampil) { ?>
										<tr >

											<td><?php echo $no;?></td>
											<td><?php echo $tampil['nama'];?></td>
											<td><?php echo $tampil['telp'];?></td>
											<td><?php echo $tampil['alamat'];?></td>
											<td><?php echo tgl_indo($tampil['tgl_reservasi_masuk']);?></td>
											<td><?php echo tgl_indo($tampil['tgl_reservasi_keluar']);?></td>
											<td><?php echo $tampil['nomer_kamar'];?></td>
											
											
										</tr>
										<?php
										$no++;
										}
										?>
										
										
										
							</tbody>
							</table>
						</div>
					</div>
					
				</div>
			</div>
			