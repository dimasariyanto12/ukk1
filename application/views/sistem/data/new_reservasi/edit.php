 <section class="content-header">
  <h1>
  Perpanjang Kamar
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i> Pemesanan Kamar</a></li> 
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
										
											<?php echo form_open_multipart('sistem/new_reservasi_perpanjang_simpan/','class="form-horizontal"'); ?>
											<div class="form-body">

												<input type="hidden" name="id_reservasi" value="<?php echo $id_reservasi;?>">
												<h3 class="form-section"></h3>
												<div class="row">
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Tanggal Masuk</label>
															<div class="col-md-9">
																 <input class="form-control " name="tgl_reservasi_masuk" id="tgl_reservasi_masuk" size="16" type="text" value="<?php echo $tgl_reservasi_masuk;?>" readonly/>
                                                              
															</div>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-2">Tanggal Keluar</label>
															<div class="col-md-9">
																 <input class="form-control datepicker" name="tgl_reservasi_keluar" id="tgl_reservasi_keluar" size="16" type="text" value="<?php echo $tgl_reservasi_keluar;?>"/>
                                                              
															</div>
														</div>
													</div>
													
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Nomer Kamar</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="" name="nomer_kamar" value="<?php echo $nomer_kamar;?>" disabled>
																
															</div>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-2">Nama</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="" name="nama" value="<?php echo $nama;?>" disabled>
																
															</div>
														</div>
													</div>
													
												</div>
												<div class="row">
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Tlp</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="" name="telp" value="<?php echo $telp;?>" disabled>
																
															</div>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-2">Alamat</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="" name="alamat" value="<?php echo $alamat;?>" disabled>
																
															</div>
														</div>
													</div>
													
												</div>
												


											</div>
											<div class="form-actions">
													<div class="panel-footer">
                           <a href="<?php echo base_url();?>sistem/home" button class="btn btn-danger pull"><i class="fa fa-arrow-circle-left">Back</i></a>
																										
                 <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Save</button>
																
                       </div>   
										<?php echo form_close();?>  
										
									</div>
								</div>