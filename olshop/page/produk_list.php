<?php include "proses/koneksi.php";?>
<div class="container">
                                                                                       
  <div class="table-responsive">          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Gambar</th>
		<th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Pilihan</th>
      </tr>
    </thead>
    <tbody>
	
	<?php 
	$query = "select * from produk";
	$res = mysql_query($query);
	$no=1;
	while($row=mysql_fetch_array($res)){
	?>
      <tr>
        <td><?php echo $row['produkID'];?></td>
        <td><img src="<?php echo $row['Gambar'];?>" width="80"> </td>
        <td><?php echo $row['NamaProduk'];?></td>
        <td><?php echo $row['Harga'];?></td>
		<td><?php echo $row['Qty'];?></td>
        <td><a href="index.php?mod=produk_form&id=<?php echo row['produkID']; ?>" >Edit
		| <a onclick="return confirm('Yakin data ini akan dihapus? ')" href="proses/produk_delete.php?id=<?php echo row['produkID']; ?>">Delete
		
		</td>
		
      </tr>
	<?php } ?>
    </tbody>
  </table>
  </div>
</div>

