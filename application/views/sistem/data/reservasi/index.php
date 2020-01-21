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
					
					
					<div class="portlet box green">
						<div class="portlet-title">
						 

							
						</div>

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
											<td><?php echo $tampil['nama_reservasi'];?></td>
											<td><?php echo $tampil['telp_reservasi'];?></td>
											<td><?php echo $tampil['alamat_reservasi'];?></td>
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