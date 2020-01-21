<section class="content-header">
	<h1>
		Galeri
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php base_url();?>sistem/kategori"><i class="fa fa-dashboard"></i>Galery</a></li>
		<li class="active">Kategori Galeri</li>
	</ol>
</section><br>

									<div class="portlet-body form">
										<?php if(validation_errors()) { ?>
								<div class="alert alert-danger">
								  <button type="button" class="close" data-dismiss="alert">×</button>
									<?php echo validation_errors(); ?>
								</div>
								<?php 
								} 
								?>
										
											<?php echo form_open('sistem/kategori_galeri_simpan/','class="form-horizontal"'); ?>
											<div class="form-body">
												<h3 class="form-section"></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kategori Galeri</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="" name="nama_kategori_galeri">
																
															</div>
														</div>
													</div>
													
												</div>
											
												
												
											
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" class="btn btn-success">Save</button>
																</div>
														</div>
													</div>
													<div class="col-md-6">
													</div>
												</div>
											</div>
										<?php echo form_close();?>  
										
									</div>
								</div>