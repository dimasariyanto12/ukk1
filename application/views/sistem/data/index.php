<section class="content-header">
	<h1>
		Dashboard
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section><br>


<div class="box">
	<div class="box-header">
		<h3 class="box-title">Pemesanan Baru</h3>
		
		<div class="btn-group">
			<a class="btn btn-primary" href="<?php echo base_url();?>sistem/new_reservasi_tambah">
				Add <i class="fa fa-plus"></i>
			</a>
			
		</div>
		<div class="box-body">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Aksi</th>
						<th>Nama</th>
						<th>Telp</th>
						<th>Alamat</th>
						<th>Tanggal Masuk</th>
						<th>Tanggal Keluar</th>
						<th>Kamar</th>
					</tr>
				</thead>
				<?php
				$no=1;
				
				foreach ($new_reservasi->result_array() as $tampil) { ?>
					<tr >

						<td><?php echo $no;?></td>
						<td>
							<a  class="btn btn-success " href="<?php echo base_url();?>sistem/new_reservasi_in/<?php echo $tampil['id_reservasi'];?>/1"> CHECK IN</a> 
						</td>   
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
		</tfoot>
	</table>
</div>
</div>



<div class="row">
	<div class="col-md-12">
		
		
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="box-header">
					<h3 class="box-title">Kamar Kosong</h3>
				</div>


				
			</div>

			<div class="portlet-body">
				
				<table class="table table-striped table-hover table-bordered" id="sample_editable_2">
					<thead>
						<tr>
							<th>No</th>
							<th>Nomer Kamar</th>
							<th>Harga Kamar</th>
							<th>Kelas Kamar</th>	
						</tr>
					</thead>
					<tbody>
						<?php
						$no=1;
						
						foreach ($kamar->result_array() as $tampil) { ?>
							<tr >

								<td><?php echo $no;?></td>
								<td><?php echo $tampil['nomer_kamar'];?></td>
								<td><?php echo rupiah($tampil['harga_kamar']);?></td>
								<td><?php echo $tampil['nama_kelas_kamar'];?></td>
								
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

