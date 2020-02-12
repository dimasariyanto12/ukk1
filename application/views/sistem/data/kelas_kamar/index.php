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
				<span>Kelas Kamar Delete</span>  
				</div>";
				}
				else if($this->session->flashdata('berhasil')){
				echo "<div class='alert alert-success'>
				<span>Kelas Kamar Save</span>  
				</div>";
				}
				else if($this->session->flashdata('update')){

				echo "<div class='alert alert-success'>
				<span>Kelas Kamar Update</span>  
				</div>";

				}
				else if($this->session->flashdata('ada')){

				echo "<div class='alert alert-danger'>
				<span>Kelas Kamar Exist</span>  
				</div>";

				}

				?>
						<div class="portlet box green">
		<div class="box-header">
		<a class="btn  btn-primary pull-left" data-toggle="modal" data-target="#m_modal_1" >
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
								<th>Kelas Kamar</th>					
							</tr>
							</thead>
							<tbody>
											<?php
										$no=1;
										
											foreach ($kelas_kamar->result_array() as $tampil) {
												$id_kamar=$tampil['id_kelas_kamar']; ?>
										<tr >

											<td><?php echo $no;?></td>
											<td><a data-toggle="modal" data-target="#m_modal_2<?php echo $tampil['id_kelas_kamar'];?>"><i class="fa fa-edit"></i></a> &nbsp;
										


											<a  href="<?php echo base_url();?>sistem/kelas_kamar_delete/<?php echo $tampil['id_kelas_kamar'];?>" onclick="return confirm('Yakin Ingin Menghapus <?php echo $tampil['nama_kelas_kamar'];?>?')"> <i class="fa fa-times"></i></a>
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

			<div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">
						Add Kelas Kamar
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							&times;
						</span>
					</button>
				</div>
			
				<div class="modal-body">
				<?php echo form_open('sistem/kelas_kamar_simpan/'); ?>
						<div class="form-group">
							<label for="recipient-name" class="form-control-label">
								Kelas Kamar:
							</label>
							<input type="text" class="form-control" placeholder="" name="nama_kelas_kamar" required="" autocomplete="off">
						</div>				
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btn-primary">
						Save
					</button>
					<?php echo form_close();?> 
				</div>
			</div>
		</div>
	</div>
	<!--end::Modal-->

	<?php
										$no=1;
										
											foreach ($kelas_kamar->result_array() as $tampil) {
												$id_kamar=$tampil['id_kelas_kamar'];
												$nm_kamar=$tampil['nama_kelas_kamar']; ?>
	<div class="modal fade" id="m_modal_2<?php echo $tampil['id_kelas_kamar'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">
						Edit Kelas Kamar
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							&times;
						</span>
					</button>
				</div>
			
				<div class="modal-body">
				<?php echo form_open('sistem/kelas_kamar_update/'); ?>
						<div class="form-group">
							<label for="recipient-name" class="form-control-label">
								Kelas Kamar:
							</label>
							<input type="hidden" name="id_kelas_kamar" value="<?php echo $id_kamar;?>">
							<input type="text" class="form-control" placeholder="" name="nama_kelas_kamar"  value="<?php echo $nm_kamar;?>" required="" autocomplete="off">
						</div>				
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btn-primary">
						Update
					</button>
					<?php echo form_close();?> 
				</div>
			</div>
		</div>
	</div>
											<?php } ?>