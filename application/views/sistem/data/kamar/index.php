<section class="content-header">
	<h1>
		Kelas Kamar
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Kamar</a></li>
		<li class="active">Kelas Kamar</li>
	</ol>
</section><br>

<div class="row">
				<div class="col-md-12">
					
					<?php 
									
													if ($this->session->flashdata('hapus')){
									echo "<div class='alert alert-danger'>
												                   <span>Kamar Delete</span>  
												                </div>";
													}
													else if($this->session->flashdata('berhasil')){
														echo "<div class='alert alert-success'>
												                   <span>Kamar Save</span>  
												                </div>";
													}
													else if($this->session->flashdata('update')){

														echo "<div class='alert alert-success'>
												                   <span>Kamar Update</span>  
												                </div>";

													}
													else if($this->session->flashdata('ada')){

														echo "<div class='alert alert-danger'>
												                   <span>Kamar Exist</span>  
												                </div>";

													}
												
							?>
						<div class="portlet box green">
		<div class="box-header">
		<a class="btn  btn-primary pull-left" href="<?= base_url()?>sistem/kamar_tambah" >
									Add <i class="fa fa-plus"></i>
								</a>

						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">

							
									
								</div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>No</th>
								<th>Aksi</th>
								<th>Nomer Kamar</th>
								<th>Harga Kamar</th>
								<th>Kelas Kamar</th>
								<th>Gambar Kamar</th>
								
								
							</tr>
							</thead>
							<tbody>
											<?php
										$no=1;
										
											foreach ($kamar->result_array() as $tampil) { ?>
										<tr >

											<td><?php echo $no;?></td>
											<td><a  href="<?php echo base_url();?>sistem/kamar_edit/<?php echo $tampil['id_kamar'];?>"><i class="fa fa-edit"></i></a> &nbsp;
											<a  href="<?php echo base_url();?>sistem/kamar_delete/<?php echo $tampil['id_kamar'];?>" onclick="return confirm('Yakin Ingin Menghapus <?php echo $tampil['nomer_kamar'];?>?')"> <i class="fa fa-times"></i></a>
											<td><?php echo $tampil['nomer_kamar'];?></td>
											<td><?php echo rupiah($tampil['harga_kamar']);?></td>
											<td><?php echo $tampil['nama_kelas_kamar'];?></td>
											<td>
												<a  class="btn green" href="<?php echo base_url();?>sistem/kamar_gambar/<?php echo $tampil['id_kamar'];?>"><i class="fa fa-picture-o"></i></a>
											</td>
											
											
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