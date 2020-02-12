<table border="1" cellspacing="0" align="center">
    <thead>
        <tr>
            <th style="width: 5%;">NO</th>
            <th>NAMA TAMU</th>
            <th>NOMOR KAMAR</th>
            <th>TANGGAL CHECKIN</th>
            <th>TANGGAL CHECKOUT</th>
            <th>ALAMAT</th>
        </tr>
    </thead>
    <tbody>
    	<?php 
    		$no = 1;
         
                foreach ($Reservasi->result_array() as $r) {
    	?>
    	<tr>
    		<th scope="row"><?php echo $no++ ?></th>
    		<td><?php echo $r['nama'] ?></td>
    		<td><?php echo $r['nomer_kamar'] ?></td>
    		<td><?php echo $r['tgl_reservasi_masuk'] ?></td>
    		<td><?php echo $r['tgl_reservasi_keluar'] ?></td>
    		<td><?php echo $r['alamat'] ?></td>

    	</tr>
                <?php } ?>
    </tbody>
</table>

<script>
    window.print();
</script>