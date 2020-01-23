<section class="content-header">
	<h1>
		Galeri
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Galeri</a></li>
		<li class="active">Kategori Galeri</li>
	</ol>
</section><br>


<div class="row">
	<div class="col-md-12">
		
		<?php 
		
		if ($this->session->flashdata('hapus')){
			echo "<div class='alert alert-danger'>
			<span>Kategori Galeri Delete</span>  
			</div>";
		}
		else if($this->session->flashdata('berhasil')){
			echo "<div class='alert alert-success'>
			<span>Kategori Galeri Save</span>  
			</div>";
		}
		else if($this->session->flashdata('update')){

			echo "<div class='alert alert-success'>
			<span>Kategori Galeri Update</span>  
			</div>";

		}
		else if($this->session->flashdata('ada')){

			echo "<div class='alert alert-danger'>
			<span>Kategori Galeri Exist</span>  
			</div>";

		}
		
		?>
		<div class="portlet box green">
		<div class="box-header">
		
		<a class="btn  btn-primary pull-left" data-toggle="modal" data-target="#modal-default" >
									Add <i class="fa fa-plus"></i>
								</a><br><br>
			<div class="portlet-body">
				
			 <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Kategori Galeri</th>                          
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            
                            foreach ($kategori_galeri->result_array() as $tampil) { 
                             
                             $id_kategori=$tampil['id_kategori_galeri'];
												                 $nm_kategori=$tampil['nama_kategori_galeri']; ?>
                                <tr >

                                    <td><?php echo $no;?></td>
                                    <td><a data-toggle="modal" data-target="#m_modal_2<?php echo $tampil['id_kategori_galeri'];?>"><i class="fa fa-edit"></i></a> &nbsp;

                                        <a  href="<?php echo base_url();?>sistem/kategori_galeri_delete/<?php echo $tampil['id_kategori_galeri'];?>" onclick="return confirm('Yakin Ingin Menghapus <?php echo $tampil['nama_kategori_galeri'];?>?')"> <i class="fa fa-times"></i></a>
                                        <td><?php echo $tampil['nama_kategori_galeri'];?></td>                                    
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
        
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                Add Kategori Galeri
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">
                                                    &times;
                                                </span>
                                            </button>
                                        </div>
                                    
                                        <div class="modal-body">
                                    
                                    
                                        <?php echo form_open('sistem/kategori_galeri_simpan/'); ?>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="form-control-label">
                                                        Kategori Galeri:
                                                    </label>
                                                    <input type="text" class="form-control" placeholder="" name="nama_kategori_galeri" required="" autocomplete="off">
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
										$no=1;
										
											foreach ($kategori_galeri->result_array() as $tampil) {
            $id_kategori=$tampil['id_kategori_galeri'];
            $nm_kategori=$tampil['nama_kategori_galeri']; ?>
	<div class="modal fade" id="m_modal_2<?php echo $tampil['id_kategori_galeri'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">
						Edit Kelas Kamar
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							&times;
						</span>
					</button>
				</div>
			
				<div class="modal-body">
				<?php echo form_open('sistem/kategori_galeri_update/'); ?>
						<div class="form-group">
							<label for="recipient-name" class="form-control-label">
								Kelas Kamar:
							</label>
							<input type="hidden" name="id_kategori_galeri" value="<?php echo $id_kategori;?>">
							<input type="text" class="form-control" placeholder="" name="nama_kategori_galeri"  value="<?php echo $nm_kategori;?>" required="" autocomplete="off">
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