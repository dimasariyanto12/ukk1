<section class="content-header">
	<h1>
		Tambah Kamar
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Kamar</a></li>
		<li class="active">Kelas Kamar</li>
	</ol>
</section><br>



<div class="portlet box green">
									<div class="portlet-title">
										
									</div>
									<div class="portlet-body form">
										<?php if(validation_errors()) { ?>
								<div class="alert alert-danger">
								  <button type="button" class="close" data-dismiss="alert">×</button>
									<?php echo validation_errors(); ?>
								</div>
								<?php 
								} 
								?>
										
											<?php echo form_open_multipart('sistem/kamar_simpan/','class="form-horizontal"'); ?>
											<div class="form-body">
												<h3 class="form-section"></h3>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label col-md-3">Kelas kamar</label>
															<div class="col-md-6">
																<select data-placeholder="Select..." name="kelas_kamar_id" class="form-control select2me">
																	<option value=""></option>					
																	<?php
																	foreach ($kelas_kamar->result_array() as $tampil) { ?>
																	<option value="<?php echo $tampil['id_kelas_kamar'];?>"><?php echo $tampil['nama_kelas_kamar'];?></option>
																	<?php
																	}
																	?>
																</select>
																
															</div>
														</div>
													</div>
													
												</div>
												<div class="row">
													
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label col-md-3">Nomer Kamar</label>
															<div class="col-md-6">
																<input type="text" class="form-control" placeholder="" name="nomer_kamar">
																
															</div>
														</div>
													</div>

													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label col-md-3">Harga Kamar</label>
															<div class="col-md-6">
																<input type="number" class="form-control" placeholder="" name="harga_kamar">
																
															</div>
														</div>
													</div>
													
												</div>

												<div class="row">
													

													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label col-md-3">Keterangan</label>
															<div class="col-md-9">
																<textarea name="fasilitas_kamar" id="fasilitas_kamar"  rows="6" class="wysihtml5 form-control" ></textarea>
																
															</div>
														</div>
													</div>

												
													
												</div>

									
											</div>
											<div class="form-actions">
											<div class="panel-footer">
																													<a href="<?php echo base_url();?>sistem/galeri" button class="btn btn-danger pull"><i class="fa fa-arrow-circle-left">Back</i></a>
																											
																		<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Save</button>
																	
																								</div>  
												</div>
											</div>
										<?php echo form_close();?>  
										
									</div>
								</div>