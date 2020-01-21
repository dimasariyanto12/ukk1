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
		<a class="btn  btn-primary pull-left" data-toggle="modal" data-target="#modal-default" >
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
										
											foreach ($kelas_kamar->result_array() as $tampil) { ?>
										<tr >

											<td><?php echo $no;?></td>
											<td><a  href="<?php echo base_url();?>sistem/kelas_kamar_edit/<?php echo $tampil['id_kelas_kamar'];?>"><i class="fa fa-edit"></i></a> &nbsp;
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

			<!-- /.modal-Tambah -->

	<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Kelas Kamar</h4>
              </div>
			  <?php if(validation_errors()) { ?>
			  <?php echo validation_errors(); ?>
									</div>
									<?php 
									} 
									?>
											
           <?php echo form_open('sistem/kelas_kamar_simpan/','class="form-horizontal"'); ?>
              <div class="modal-body">
			  
			  <div class="form-group">
			  <label class="control-label col-md-3">Kelas Kamar</label>
															<div class="col-md-9">
               <input type="text" class="form-control" placeholder="" name="nama_kelas_kamar" required="">
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