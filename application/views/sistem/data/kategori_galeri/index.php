<section class="content-header">
	<h1>
		Galeri
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Galeri</a></li>
		<li class="active">Kategori Galeri</li>
	</ol>
</section><br>


<div class="row">
	<div class="col-md-12">
		
		<?php 
		
		if ($this->session->flashdata('hapus')){
			echo "<div class='alert alert-danger'>
			<span>Kategori Galeri Delete</span>  
			</div>";
		}
		else if($this->session->flashdata('berhasil')){
			echo "<div class='alert alert-success'>
			<span>Kategori Galeri Save</span>  
			</div>";
		}
		else if($this->session->flashdata('update')){

			echo "<div class='alert alert-success'>
			<span>Kategori Galeri Update</span>  
			</div>";

		}
		else if($this->session->flashdata('ada')){

			echo "<div class='alert alert-danger'>
			<span>Kategori Galeri Exist</span>  
			</div>";

		}
		
		?>
		<div class="portlet box green">
		<div class="box-header">
		
		<a class="btn  btn-primary pull-left" data-toggle="modal" data-target="#modal-default" >
									Add <i class="fa fa-plus"></i>
								</a><br><br>
			<div class="portlet-body">
				
				<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
					<thead>
						<tr>
							<th width="2">No</th>
							<th>Aksi</th>
							<th>Kategori Galeri</th>

							
						</tr>
					</thead>
					<tbody>
						<?php
						$no=1;
						
						foreach ($kategori_galeri->result_array() as $tampil) { ?>
							<tr >

								<td width="2"><?php echo $no;?></td>
								<td><a  href="<?php echo base_url();?>sistem/kategori_galeri_edit/<?php echo $tampil['id_kategori_galeri'];?>"><i class="fa fa-edit"></i></a> &nbsp;

									<a  href="<?php echo base_url();?>sistem/kategori_galeri_delete/<?php echo $tampil['id_kategori_galeri'];?>" onclick="return confirm('Yakin Ingin Menghapus <?php echo $tampil['nama_kategori_galeri'];?>?')"> <i class="fa fa-times"></i></a>
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

<!-- /.modal-Tambah -->

	<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Kategori Galeri</h4>
              </div>
			  <?php if(validation_errors()) { ?>
			  <?php echo validation_errors(); ?>
									</div>
									<?php 
									} 
									?>
											
												<?php echo form_open('sistem/kategori_galeri_simpan/','class="form-horizontal"'); ?>
              <div class="modal-body">
			  
			  <div class="form-group">
			  <label class="control-label col-md-3">Kategori Galeri</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="" name="nama_kategori_galeri" required="">
              </div>
			  </div>
			  <br>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
				<?php echo form_close();?>  
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

		<!-- /.modal-Tambah -->

	<div class="modal fade" id="modal-edit">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Kategori Galeri</h4>
              </div>
			  <?php if(validation_errors()) { ?>
			  <?php echo validation_errors(); ?>
									</div>
									<?php 
									} 
									?>
											
												<?php echo form_open('sistem/kategori_galeri_simpan/','class="form-horizontal"'); ?>
              <div class="modal-body">
			  
			  <div class="form-group">
			  <label class="control-label col-md-3">Kategori Galeri</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="" name="nama_kategori_galeri" required="">
              </div>
			  </div>
			  <br>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
				<?php echo form_close();?>  
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->