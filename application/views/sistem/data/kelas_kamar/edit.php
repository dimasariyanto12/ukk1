	<section class="content-header">
		<h1>
			Edit Kelas Kamar
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
											
											
												<?php echo form_open('sistem/kelas_kamar_update/','class="form-horizontal"'); ?>
												<div class="form-body">
													<h3 class="form-section"></h3>
													<div class="row">
														<input type="hidden" name="id_kelas_kamar" value="<?php echo $id_kelas_kamar;?>" >
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label col-md-3">Kelas Kamar</label>
																<div class="col-md-9">
																	<input type="text" class="form-control" placeholder="" name="nama_kelas_kamar" value="<?php echo $nama_kelas_kamar;?>">
																	
																</div>
															</div>
														</div>
														
													</div>
												
													
													
												
												</div>
												<div class="form-actions">
												<div class="panel-footer">
																														<a href="<?php echo base_url();?>sistem/kelas_kamar" button class="btn btn-danger pull"><i class="fa fa-arrow-circle-left">Back</i></a>
																												
																			<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Update</button>
																		
																										</div>  
													</div>
												</div>
											<?php echo form_close();?>  
											
										</div>
									</div>