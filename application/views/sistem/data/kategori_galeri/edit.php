	<section class="content-header">
		<h1>
				Edit Kategori Galeri
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Galeri</a></li>
			<li class="active">Kategori Galeri</li>
		</ol>
	</section><br>


	<div class="portlet box green">
										<div class="portlet-title">
											
											
										</div>
										<div class="portlet-body form">
											
											
												<?php echo form_open('sistem/kategori_galeri_update/','class="form-horizontal"'); ?>
												<div class="form-body">
													<h3 class="form-section"></h3>
													<div class="row">
														<input type="hidden" name="id_kategori_galeri" value="<?php echo $id_kategori_galeri;?>" >
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-3">Kategori Galeri</label>
																<div class="col-md-9">
																	<input type="text" class="form-control" placeholder="" name="nama_kategori_galeri" value="<?php echo $nama_kategori_galeri;?>">
																	
																</div>
															</div>
														</div>
														
													</div>

												</div>
												<div class="form-actions">
												<div class="panel-footer">
																													<a href="<?php echo base_url();?>sistem/kategori_galeri" button class="btn btn-danger pull"><i class="fa fa-arrow-circle-left">Back</i></a>
																											
																		<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Update</button>
																	
																								</div>   
												</div>
											<?php echo form_close();?>  
											
										</div>
									</div>
									

									
									