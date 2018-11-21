<?php include "proses/koneksi.php"; ?>

<table class="table table-bordered" id="example">
    <thead>
      <tr>
        <th>No</th>
        <th>ID Pembelian</th>
        <th>Tggl Beli</th>
        <th>Nama Lengkap</th>
        <th>Total Bayar</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
<?php 
	$query = "select pembelian_header.idPembelian, pembelian_header.TglBeli, pengguna.nama_lengkap, pembelian_header.totalBayar from pembelian_header join pengguna on pengguna.petugasid=pembelian_header.idPengguna";

	$res = mysql_query($query);
	$no =1; 
	while($row=mysql_fetch_array($res)){ 
	?>

      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['idPembelian']; ?></td>
        <td><?php echo $row['TglBeli']; ?></td>
        <td><?php echo $row['nama_lengkap']; ?></td>
		<td><?php echo $row['totalBayar']; ?></td>
        
        <td>
			<a href="index.php?mod=produk_form&id=<?php echo $row['idPembelian']; ?>"> Detail </a>
		</td>
      </tr>
	<?php $no++; } ?>
	
    </tbody>
  </table>

<link rel="stylesheet" type="text/css" href="vendor/DataTables/datatables.min.css"/>
<script type="text/javascript" src="vendor/datatables/DataTables.min.js"></script>
<script>
$(document).ready(function(){
	$('#example').DataTable();
});
</script>