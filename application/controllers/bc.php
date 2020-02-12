public function new_reservasi_out_simpan () {

if($this->session->userdata("id_user")!=="" ) {

$this->form_validation->set_rules('uang_bayar', 'Pembayaran', 'required');
if ($this->form_validation->run()==false) {

$id = $this->uri->segment(3);

$query = $this->sistem_model->ReservasiId($id);

foreach ($query->result_array() as $value) {
$data['id_reservasi'] = $value['id_reservasi'];
$data['nama'] = $value['nama'];
$data['telp'] = $value['telp'];
$data['alamat'] = $value['alamat'];
$data['tgl_reservasi_masuk'] = $value['tgl_reservasi_masuk'];
$data['tgl_reservasi_kelua'] = $value['tgl_reservasi_keluar'];
$data['id_kamar'] = $value['id_kamar'];
$data['nomer_kamar'] = $value['nomer_kamar'];
$data['harga_kamar'] = $value['harga_kamar'];
$data['status_kamar'] = $value['status_kamar'];
$data['waktu'] = $value['waktu'];
}
$data['status_reservasi'] = $this->uri->segment(4);

$this->template_system->load('template_system','sistem/data/new_reservasi/out',$data);

$uang['1'] = $this->input->post('uang_bayar');
$uang['2'] = $data['harga_kamar'];
// var_dump($uang);
// die();
if ($uang['2']>$uang['1']) {
$this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> Pembayaran kurang!</div>');
redirect("sistem/new_reservasi_out".$id);

}
else{
//Update Status reservasi
$id['id_reservasi'] = $this->input->post("id_reservasi");
$up['status_reservasi'] = $this->input->post("status_reservasi");
$this->db->update("tbl_reservasi",$up,$id);


//Update Status Kamar
$id_kamar['id_kamar'] = $this->input->post("id_kamar");
$up2['status_kamar'] = 0;
$this->db->update("tbl_kamar",$up2,$id_kamar);


//Insert into reservasi pembayaran
$in['tgl_pembayaran'] = date('Y-m-d');
$in['nominal_pembayaran'] = $this->input->post("total_bayar");
$in['uang_bayar'] = $this->input->post("uang_bayar");
// $in['kembalian'] = $this->input->post("kembalian");
$in['kembalian'] = $this->input->post("uang_bayar") - $this->input->post("total_bayar");
$in['reservasi_id'] = $this->input->post("id_reservasi");

if($in['in']['uang_bayar'] < $in['in']['nominal_pembayaran'] ){ $this->session->flashdata('');
    }else{
    $this->db->insert("tbl_reservasi_pembayaran",$in);
    }


    $this->session->set_flashdata('out','OK');
    redirect("sistem/new_reservasi");

    }

    }

    }
    else{
    redirect('sistem');

    }

    }



    $id = $id = $this->uri->segment(3);
		$uang_bayar = $this->input->post('uang_bayar');
		$total_bayar = $this->input->post('total_bayar');
		if($uang_bayar){
			if($uang_bayar < $total_bayar){
				$this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> Pembayaran kurang!</div>');
				redirect("sistem/new_reservasi_out".$id);