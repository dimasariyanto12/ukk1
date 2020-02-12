						<section class="content-header">
							<h1>
								Transaksi Baru
							</h1>
							<ol class="breadcrumb">
								<li><a href="#"><i class="fa fa-dashboard"></i> Kamar</a></li>
								<li class="active">Kelas Kamar</li>
							</ol>
						</section><br>

					<div class="row">
					<div class="col-md-12">

					<?php 

					if($this->session->flashdata('in')){
					echo "<div class='alert alert-success'>
					<span>Pemesanan Check IN SUCCESS</span>  
					</div>";
					}
					else if($this->session->flashdata('out')){

					echo "<div class='alert alert-success'>
					<span>Pemesanan Check OUT SUCCESS</span>  
					</div>";

					}
					else if($this->session->flashdata('berhasil')){

					echo "<div class='alert alert-success'>
					<span>Pemesanan Baru SUCCESS</span>  
					</div>";

					}

					else if($this->session->flashdata('perpanjang')){

					echo "<div class='alert alert-success'>
					<span>Perpanjang SUCCESS</span>  
					</div>";

					}


					?>
											

			<div class="portlet box green">
			<div class="box-header">
			<a class="btn  btn-primary pull-left " href="<?=base_url()?>sistem/new_reservasi_tambah" ><i class="fa fa-plus"></i>
			Tambah Reservasi 
			</a><br><br>

			<div class="portlet-body">
			<div class="table-toolbar">
			<div class="row">						
			</div>
			</div>
			<table id="example1" class="table table-bordered table-striped">
			<thead>
			<tr>
			<th>No</th>

			<th>Nama</th>
			<th>Telp</th>
			<th>Tanggal Masuk</th>
			<th>Tanggal Keluar</th>
			<th>Kamar</th>
			<th>Aksi</th>


			</tr>
			</thead>
			<tbody>
					<?php
				$no=1;
				
					foreach ($new_reservasi->result_array() as $tampil) { ?>
				<tr >

					<td><?php echo $no;?></td>
					
					<td><?php echo $tampil['nama'];?></td>
					<td><?php echo $tampil['telp'];?></td>
					<td><?php echo tgl_indo($tampil['tgl_reservasi_masuk']);?></td>
					<td><?php echo tgl_indo($tampil['tgl_reservasi_keluar']);?></td>
					<td><?php echo $tampil['nomer_kamar'];?></td>
					
					<td>
						<?php
						if ($tampil['status_reservasi']==0) { ?>

						<a  class="btn btn-success" href="<?php echo base_url();?>sistem/new_reservasi_in/<?php echo $tampil['id_reservasi'];?>/1">Check IN</a> 
						<?php
						}
						else if ($tampil['status_reservasi']=="1") { ?>

						<a  class="btn btn-danger" href="<?php echo base_url();?>sistem/new_reservasi_out/<?php echo $tampil['id_reservasi'];?>/2" >Check Out</a>
						<a  class="btn btn-info" href="<?php echo base_url();?>sistem/new_reservasi_perpanjang/<?php echo $tampil['id_reservasi'];?>" >Perpanjang</a>
						<?php
						}
						else { ?>
							<span class="label label-sm label-success">Sudah Keluar</span>
						<?php
						}
						?>
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