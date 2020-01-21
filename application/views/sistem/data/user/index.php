<section class="content-header">
	<h1>
		User
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Pengaturan</a></li>
		<li class="active">User </li>
	</ol>
</section><br>
<div class="row">
				<div class="col-md-12">
					
					<?php 
									
													if ($this->session->flashdata('hapus')){
									echo "<div class='alert alert-danger'>
												                   <span>User Delete</span>  
												                </div>";
													}
													else if($this->session->flashdata('berhasil')){
														echo "<div class='alert alert-success'>
												                   <span>User Save</span>  
												                </div>";
													}
													else if($this->session->flashdata('update')){

														echo "<div class='alert alert-success'>
												                   <span>User Update</span>  
												                </div>";

													}
													else if($this->session->flashdata('ada')){

														echo "<div class='alert alert-danger'>
												                   <span>User Exist</span>  
												                </div>";

													}
												
							?>
					
					<div class="portlet box green">
		<div class="box-header">
		
						<div class="portlet-body">
							<div class="table-toolbar">
							<a class="btn  btn-primary pull-left" href="<?php echo base_url();?>sistem/user_tambah" >
									Add <i class="fa fa-plus"></i>
								</a><br><br>
								<div class="row">

								
											
										</div>
										
									</div>
									
								</div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>No</th>
								<th>Aksi</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Telp</th>
								<th>Username</th>
								<th>Password</th>
								<th>Group</th>
								
								
								
							</tr>
							</thead>
							<tbody>
											<?php
										$no=1;
										
											foreach ($user->result_array() as $tampil) { ?>
										<tr >

											<td><?php echo $no;?></td>
											<td><a  href="<?php echo base_url();?>sistem/user_edit/<?php echo $tampil['id_user'];?>"><i class="fa fa-edit"></i></a> &nbsp;
											<a  href="<?php echo base_url();?>sistem/user_delete/<?php echo $tampil['id_user'];?>" onclick="return confirm('Yakin Ingin Menghapus <?php echo $tampil['nama_user'];?>?')"> <i class="fa fa-times"></i></a>
											<td><?php echo $tampil['nama_user'];?></td>
											<td><?php echo $tampil['email_user'];?></td>
											<td><?php echo $tampil['telp_user'];?></td>
											<td><?php echo $tampil['username_user'];?></td>
											<td>***************</td>
											<td><?php echo $tampil['nama_user_group'];?></td>
										
											
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