<section class="content-header">
	<h1>
		Buku Tamu
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Manager</a></li>
		<li class="active">Buku Tamu</li>
	</ol>
</section><br>

<div class="row">
				<div class="col-md-12">
					
				<?php 

				if ($this->session->flashdata('hapus')){
				echo "<div class='alert alert-danger'>
				<span>Data Tamu sudah dihapus</span>  
				</div>";
				}
				else if($this->session->flashdata('berhasil')){
				echo "<div class='alert alert-success'>
				<span>Tamu berhasil ditambah</span>  
				</div>";
				}
				else if($this->session->flashdata('update')){

				echo "<div class='alert alert-success'>
				<span>Data tamu sudah diperbarui</span>  
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
        <i class="fa fa-plus"></i>Tambah Tamu 
								</a><br><br>


						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">			
									
								</div>
							</div>
                            <table id="example1" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th width="10" >No</th>							
                                <th>Nama</th>	
                                <th>No KTP</th>	
                                <th>Email</th>	
                                <th>No Telpon</th>	
                                <th width="20">Aksi</th>				
							</tr>
							</thead>
							<tbody>
											<?php
										$no=1;
										
											foreach ($tamu->result_array() as $tampil) {
												$id_tamu=$tampil['id_tamu']; ?>
										<tr >

											<td><?php echo $no;?></td>
                                            <td><?php echo $tampil['nama'];?></td>
                                            <td><?php echo $tampil['no_ktp'];?></td>
                                            <td><?php echo $tampil['email'];?></td>
                                            <td><?php echo $tampil['telp'];?></td>
                                            <td><a data-toggle="modal" data-target="#m_modal_2<?php echo $tampil['id_tamu'];?>"><i class="fa fa-edit"></i></a> &nbsp;
                                        <a  href="<?php echo base_url();?>sistem/tamu_delete/<?php echo $tampil['id_tamu'];?>" onclick="return confirm('Yakin Ingin Menghapus <?php echo $tampil['nama'];?>?')"> <i class="fa fa-times"></i></a>
																					
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
		<div class="modal-dialog " role="document">
			<div class="modal-content">
				 <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Tamu</h4>
              </div>	
              <div class="modal-body">
              <div class="row">
                <?php echo form_open('sistem/tamu_simpan/'); ?>
                
                        <div class="col-xs-6">						
							<input type="text" class="form-control" name="nama" required="" placeholder="Nama Tamu" autocomplete="off">
                        </div>
                        
                        <div class="col-xs-6">						
							<input type="number" class="form-control" name="no_ktp" required="" placeholder="No KTP" autocomplete="off">
                        </div><br><br>

                        <div class="col-xs-6">						
							<input type="email" class="form-control" name="email" required="" placeholder="Email" autocomplete="off">
                        </div>

                        <div class="col-xs-6">						
							<input type="number" class="form-control" name="telp" required="" placeholder="No Telpon" autocomplete="off">
                        </div><br><br>

                        <div class="col-xs-12">						
							<input type="text" class="form-control " name="alamat" required="" placeholder="Alamat" autocomplete="off">
                        </div>
                        
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
										
										
											foreach ($tamu->result_array() as $tampil) {
												$id_tamu=$tampil['id_tamu'];
                                                ?>
                                                
	<div class="modal fade" id="m_modal_2<?php echo $tampil['id_tamu'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
		<div class="modal-dialog " role="document">
		<div class="modal-content">
				 <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data Tamu</h4>
              </div>	
              <div class="modal-body">
              <div class="row">
				<?php echo form_open('sistem/kelas_kamar_update/'); ?>
						
                
							<input type="hidden" name="id_tamu" value="<?php echo $id_tamu;?>">
							
                            <div class="col-xs-6">						
							<input type="text" class="form-control" name="nama"  required="" value="<?php echo $tampil['nama'];?>"  autocomplete="off">
                        </div>
                        
                        <div class="col-xs-6">						
							<input type="number" class="form-control" name="no_ktp" required=""  value="<?php echo $tampil['no_ktp'];?>" autocomplete="off">
                        </div><br><br>

                        <div class="col-xs-6">						
							<input type="email" class="form-control" name="email" required="" value="<?php echo $tampil['email'];?>" autocomplete="off">
                        </div>

                        <div class="col-xs-6">						
							<input type="number" class="form-control" name="telp" required="" value="<?php echo $tampil['telp'];?>" autocomplete="off">
                        </div><br><br>

                        <div class="col-xs-12">						
							<input type="text" class="form-control " name="alamat" required=""value="<?php echo $tampil['alamat'];?>" autocomplete="off">
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