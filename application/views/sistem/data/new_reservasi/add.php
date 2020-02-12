 <section class="content-header">
  <h1>
   Pemesanan Kamar
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i> Pemesanan Kamar</a></li> 
  </ol>
 </section><br>




 <div class="portlet box green">
          <div class="portlet-title">           
            <?php echo form_open_multipart('sistem/new_reservasi_simpan','class="form-horizontal"'); ?>
            <div class="form-body">
             <h3 class="form-section"></h3>
             <div class="row">  

              <div class="col-md-6">
               <div class="form-group">
                <label class="control-label col-md-3">Tanggal Masuk</label>
                <div class="col-md-9">
                <div class="input-group date">
                  <div class="input-group-addon">
                     <i class="fa fa-calendar"></i>
                   </div>	
                   <input class="form-control datepicker"  name="tgl_reservasi_masuk" id="tgl_reservasi_masuk" size="16" type="text" value="" autocomplete="" required="" placeholder="Check In" >
                 </div>
                </div>
								</div>
              </div>

              
														<div class="col-md-6">
               <div class="form-group">
                <label class="control-label col-md-2">Tanggal Keluar</label>
                <div class="col-md-9">
                <div class="input-group date">
                    <div class="input-group-addon">
                     <i class="fa fa-calendar"></i>
                   </div>
                   <input  type="text" class="form-control datepicker"  name="tgl_reservasi_keluar" id="tgl_reservasi_keluar"   required="" value="" placeholder="Check Out">
                 </div>
                </div>
																</div>
              </div>     
              
             </div>
             <div class="row">
              <div class="col-md-6">
               <div class="form-group">
                <label class="control-label col-md-3">Kelas Kamar - Nomer Kamar</label>
                <div class="col-md-9">
                 <select data-placeholder="Select..." name="kamar_id" class="form-control select2me" required=""	>
                  <option value="">----PILIH KAMAR----</option>					
                  <?php
                  foreach ($kamar->result_array() as $tampil) { ?>
                  <option value="<?php echo $tampil['id_kamar'];?>"><?php echo $tampil['nama_kelas_kamar'];?> - <?php echo $tampil['nomer_kamar'];?></option>
                  <?php
                  }
                  ?>
                 </select>
                 
                </div>
               </div>
              </div>

         

              <div class="col-md-6">
               <div class="form-group">
                <label class="control-label col-md-2">Tamu</label>
                <div class="col-md-9">
                 <select data-placeholder="Select..." name="id_tamu" class="form-control select2me" required=""	>
                  <option value="">----PILIH TAMU----</option>					
                  <?php
                  foreach ($tamu->result_array() as $tampil) { ?>
                  <option value="<?php echo $tampil['id_tamu'];?>"><?php echo $tampil['nama'];?></option>
                  <?php
                  }
                  ?>
                 </select>
                 
                </div>
               </div>
              </div>
														
             </div>

													<div class="panel-footer">
                           <a href="<?php echo base_url();?>sistem/reservasi" button class="btn btn-danger pull"><i class="fa fa-arrow-circle-left">Back</i></a>
																										
                 <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Save</button>
																
                       </div>   
 
           <?php echo form_close();?>  
           
        