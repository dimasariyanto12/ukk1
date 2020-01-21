<section class="content-header">
	<h1>
		Kritik/Saran
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-envelope"></i> Kritik/Saran</a></li>
	
	</ol>
</section><br>

			<div class="row">
				<div class="col-md-12">
					
					
					<div class="portlet box green">
						<div class="portlet-title">
						 

							
						</div>

						<div class="portlet-body">
							
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Telp</th>
								<th>Krtik/Saran</th>
								
								
							</tr>
							</thead>
							<tbody>
											<?php
										$no=1;
										
											foreach ($saran->result_array() as $tampil) { ?>
										<tr >

											<td><?php echo $no;?></td>
											<td><?php echo $tampil['nama_saran'];?></td>
											<td><?php echo $tampil['email_saran'];?></td>
											<td><?php echo $tampil['telp_saran'];?></td>
											<td><?php echo $tampil['isi_saran'];?></td>
											
											
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