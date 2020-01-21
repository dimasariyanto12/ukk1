<section class="content-header">
	<h1>
		Upload File
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Galeri</a></li>
		<li class="active">Upload File</li>
	</ol>
</section><br>

<div class="row">
				<div class="col-md-12">
					
					<?php 
									
													if ($this->session->flashdata('hapus')){
									echo "<div class='alert alert-danger'>
												                   <span>Galeri Delete</span>  
												                </div>";
													}
													else if($this->session->flashdata('berhasil')){
														echo "<div class='alert alert-success'>
												                   <span>Galeri Save</span>  
												                </div>";
													}
													else if($this->session->flashdata('update')){

														echo "<div class='alert alert-success'>
												                   <span>Galeri Update</span>  
												                </div>";

													}
													else if($this->session->flashdata('ada')){

														echo "<div class='alert alert-danger'>
												                   <span>Galeri Exist</span>  
												                </div>";

													}
												
							?>
      <div class="portlet box green">
   <div class="box-header">
   <a class="btn  btn-primary pull-left" href="<?= base_url()?>sistem/galeri_tambah" >
          Add <i class="fa fa-plus"></i>
         </a>



						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">

									<div class="col-md-6">
										<div class="btn-group">
										
									</div>
									
								</div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>No</th>
								<th>Aksi</th>
								<th>Galeri</th>
								<th>Kategori</th>
								
								
								
							</tr>
							</thead>
							<tbody>
											<?php
										$no=1;
										
											foreach ($galeri->result_array() as $tampil) { ?>
										<tr >

											<td><?php echo $no;?></td>
											<td><a  href="<?php echo base_url();?>sistem/galeri_edit/<?php echo $tampil['id_galeri'];?>"><i class="fa fa-edit"></i></a> &nbsp;
											<a  href="<?php echo base_url();?>sistem/galeri_delete/<?php echo $tampil['id_galeri'];?>" onclick="return confirm('Yakin Ingin Menghapus <?php echo $tampil['nama_galeri'];?>?')"> <i class="fa fa-times"></i></a>
											<td><?php echo $tampil['nama_galeri'];?></td>
											<td><?php echo $tampil['nama_kategori_galeri'];?></td>
										
											
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