			<section class="content-header">
					<h1>
							Tentang Kami
					</h1>
					<ol class="breadcrumb">
							<li><a href="#"><i class="fa fa-gear"></i> Pengaturan</a></li>
							<li class="active">Tentang Kami</li>
					</ol>
			</section><br>

																	<?php 
																																							
																																																							if ($this->session->flashdata('update')){
																																							echo "<div class='alert alert-success'>
																																																																					<span>Update Sukses</span>  
																																																																			</div>";
																																																							}
																																																					

																																																							?>
																																													

																																													<div class="row">
											<div class="col-md-12">
													
													
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
																																											
																																															<?php echo form_open_multipart('sistem/tentang_kami_update/','class="form-horizontal"'); ?>

																																															<?php 

																																															foreach ($tentang_kami->result_array() as $value) { ?>
																																																	

																																															<div class="form-body">
																																																			<h3 class="form-section"></h3>
																																																			<div class="row">
																																																							<input type="hidden" name="id_tentang_hotel" value="<?php echo $value['id_tentang_hotel'];?>">
																															
																																																							<div class="col-md-9">
																																																											<div class="form-group">
																																																															<label class="control-label col-md-3">Nama</label>
																																																															<div class="col-md-6">
																																																																			
																																																																			<input type="text" class="form-control span6 " name="nama_hotel" id="nama_hotel" value="<?php echo $value['nama_hotel'];?>" />
																																																															</div>
																																																											</div>
																																																							</div>

																																																							<div class="col-md-9">
																																																											<div class="form-group">
																																																															<label class="control-label col-md-3">Alamat</label>
																																																															<div class="col-md-6">
																																																																			
																																																																			<input type="text" class="form-control span6 " name="alamat_tentang_hotel" id="alamat_tentang_hotel" value="<?php echo $value['alamat_tentang_hotel'];?>" />
																																																															</div>
																																																											</div>
																																																							</div>
																																																							

																																																					
																																																							
																																																			</div>
																																																			<div class="row">
																																																					
																																																							<div class="col-md-9">
																																																											<div class="form-group">
																																																															<label class="control-label col-md-3">Email</label>
																																																															<div class="col-md-6">
																																																																			
																																																																			<input type="text" class="form-control span6 " name="email_tentang_hotel" id="email_tentang_hotel" value="<?php echo $value['email_tentang_hotel'];?>" />
																																																															</div>
																																																											</div>
																																																							</div>

																																																							<div class="col-md-9">
																																																											<div class="form-group">
																																																															<label class="control-label col-md-3">Telp</label>
																																																															<div class="col-md-6">
																																																																			
																																																																			<input type="text" class="form-control span6 " name="telp_tentang_hotel" id="telp_tentang_hotel" value="<?php echo $value['telp_tentang_hotel'];?>" />
																																																															</div>
																																																											</div>
																																																							</div>
																																																							

																																																					
																																																							
																																																			</div>
																																																			<div class="row">
																																																					
																																																							<div class="col-md-9">
																																																											<div class="form-group">
																																																															<label class="control-label col-md-3">Facebook</label>
																																																															<div class="col-md-6">
																																																																			
																																																																			<input type="text" class="form-control span6 " name="fb" id="fb" value="<?php echo $value['fb'];?>" />
																																																															</div>
																																																											</div>
																																																							</div>

																																																							<div class="col-md-9">
																																																											<div class="form-group">
																																																															<label class="control-label col-md-3">Twitter</label>
																																																															<div class="col-md-6">
																																																																			
																																																																			<input type="text" class="form-control span6 " name="tw" id="tw" value="<?php echo $value['tw'];?>" />
																																																															</div>
																																																											</div>
																																																							</div>
																																																							<div class="col-md-9">
																																																											<div class="form-group">
																																																															<label class="control-label col-md-3">Gplus</label>
																																																															<div class="col-md-6">
																																																																			
																																																																			<input type="text" class="form-control span6 " name="gp" id="gp" value="<?php echo $value['gp'];?>" />
																																																															</div>
																																																											</div>
																																																							</div>
																																																							

																																																					
																																																							
																																																			</div>

																																																			<div class="row">
																																																							

																																																							<div class="col-md-9">
																																																											<div class="form-group">
																																																															<label class="control-label col-md-3">Tentang Hotel</label>
																																																															<div class="col-md-9">
																																																																			<textarea name="isi_tentang_hotel" id="isi_tentang_hotel"  rows="6" class="wysihtml5 form-control" value="<?php echo $value['isi_tentang_hotel'];?>"><?php echo $value['isi_tentang_hotel'];?></textarea>
																																																																			
																																																															</div>
																																																											</div>
																																																							</div>

																																																			
																																																							
																																																			</div>

																																																			

																																																			<div class="row">
																																																							<div class="col-md-9">
																																																											<div class="form-group">
																																																															<label class="control-label col-md-3">Logo</label>
																																																															<div class="col-md-9">
																																																																			<input type="file" name="userfile">
																																																															</div>

																																																											</div>

																																																							</div>

																																																							<div class="col-md-9">
																																																											<div class="form-group">
																																																															<label class="control-label col-md-3"></label>
																																																															<div class="col-md-9">
																																																																			Jika Logo Tidak ada, maka kosongkan saja!, Untuk FB, TW, dan GP http:// Jangan Dihapus
																																																															</div>

																																																											</div>

																																																							</div>
																																																			</div>

																																															
																																													
																																															<div class="form-actions">
																																															<div class="panel-footer">
																																																												
																																																									
																																							<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;		Update</button>
																																					
																									
																			
																											</div>	
																																																			</div>
																																															</div>
																																															<?php
																																													}
																																															?>
																																											<?php echo form_close();?>  
																																											
																																							</div>
																																			</div>
																																			</div>
																																			