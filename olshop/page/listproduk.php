<?php include "proses/koneksi.php"; ?>
<?php
$filter = (isset($_GET['keyword']) && $_GET['keyword'] !='')?" WHERE nama_produk LIKE '%".$_GET['keyword']."%'":"";

$res_data = mysql_query("SELECT * FROM produk $filter");

$maxrow 	= 5;
$startrow 	= (isset($_GET['page']))?$_GET['page']*$maxrow:0;
$total_data = mysql_num_rows($res_data);
$max_page 	= ceil($total_data/$maxrow);


?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="hidden" name="mod" value="produk_list">
	<div class="input-group mb-3">
	  <input type="text" class="form-control" name="keyword" placeholder="Masukan kata kunci yg dicari">
	  <div class="input-group-append">
		<button class="btn btn-outline-primary" type="submit">Cari Data</button>
	  </div>
	</div>
</form>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Gambar</th>
        <th>Nama Produk</th>
        <th>Kode Produk</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
<?php 
	$query = "SELECT * FROM produk $filter LIMIT $startrow,$maxrow";

	$res = mysql_query($query);
	$no =1 + $startrow; 
	while($row=mysql_fetch_array($res)){ 
	?>

      <tr>
        <td><?php echo $no; ?></td>
        <td><img src="<?php echo $row['gambar']; ?>" width="80"></td>
        <td><?php echo $row['nama_produk']; ?></td>
        <td><?php echo $row['produkId']; ?></td>
		<td><?php echo $row['harga']; ?></td>
        <td><?php echo $row['qty']; ?></td>
        <td>
			<a href="index.php?mod=produk_form&id=<?php echo $row['produkId']; ?>"> Edit </a> |
			<a onClick="return confirm('Yakin data ini dihapus ?');" href="proses/produk_delete.php?id=<?php echo $row['produkId']; ?>"> Delete </a>
			
		</td>
      </tr>
	<?php $no++; } ?>
	
    </tbody>
  </table>

<ul class="pagination">
<?php 
for($i=1; $i<=$max_page; $i++){
	if($i==1)
		echo "<li class='page-item'> <a class='page-link' href='index.php?mod=produk_list'>".$i."</a> </li>";
	else{
		$link = $i-1;
		echo "<li class='page-item'> <a class='page-link' href='index.php?mod=produk_list&page=$link'>".$i."</a> </li>";
	}
}
	
?>
</ul>
