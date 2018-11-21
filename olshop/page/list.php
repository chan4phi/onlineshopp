<?php include "proses/koneksi.php"; ?>
<?php

$cari = (isset($_GET['keyword']) && $_GET['keyword'] !='')?" where NamaProduk like '%".$_GET['keyword']."%'":"";



$res_data   = mysql_query("SELECT * FROM produk $cari");
$maxrow 	= 5;
$startrow   = (isset($_GET['page']))?$_GET['page']*$maxrow:0;
$total_data=mysql_num_rows($res_data);
$max_page = ceil($total_data/$maxrow);
?>



<div class="col-6">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="hidden" name="mod" value="list">
	<div class="input-group mb-3">
		<input type="text" class="form-control" name="keyword" placeholder="masukan kata kunci">
		<div class="input-group-append">
		<button class="btn btn-outline-primary" type="submit">Cari Produk</button>
		<button type="reset-page" class="btn btn-outline-primary">Back</button>
		</div>
		</div>
		</form>
</div>
  
		
<table class= "table table-bordered">
	<thead>
	<tr>
	<th>No</th>
	<th>Gambar</th>
	<th>Nama Produk</th>
	<th>Harga</th>
	<th>stok</th>
	<th>Aksi</th>


<?php
$query = "SELECT * FROM produk $cari LIMIT $startrow,$maxrow";
$res   = mysql_query($query);
$no =1;
while($row=mysql_fetch_array($res)){
	?>
	<tr>
	<td><?php echo $no; ?></td>
	<td><img src="<?php echo $row['Gambar']; ?>" width="80"></td>
	<td><?php echo $row['NamaProduk']; ?></td>
	<td><?php echo $row['Harga']; ?></td>
	<td><?php echo $row['Qty']; ?></td>
	<td>
		<a href = "index.php?mod=formproduk&id=<?php echo $row['IDProduk']; ?>"> Edit </a> |
		<a onClick="return confirm('Anda Yakin Akan Menghapus Data ini?');" href = "proses/delete.php?id=<?php echo $row['IDProduk']; ?>"> Delete </a>
		</td>
	</tr>
	
<?php $no++;} ?>

</tbody>
</table>

<h3> <b>Halaman :</b></h3>

 <ul class="pagination">
 <?php
 for($i=1; $i<=$max_page; $i++){
	 if($i==1)
		echo  " <li class='page-item'> <a class='page-link' href='index.php?mod=list'>".$i."</a> </li>" ;
else{
		$link = $i-1;
		echo "<li class='page-item'> <a class='page-link' href='index.php?mod=list&page=$link'>".$i."</a> </li>";
		
	}
    
}
   
?>
</ul>



