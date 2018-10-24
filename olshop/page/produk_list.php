<?php include "proses/koneksi.php";?>
<?php 
$filter		= (isset($_GET['keyword']) && $_GET['keyword'] !='')?" where nama_produk LIKE '%".$_GET['keyword']."%'":"";
$res_data	= mysql_query("select * from produk");
$maxrow		= 5;
$startrow	= (isset($_GET['page']))?$_GET['page']*$maxrow:0;
$total_data	= mysql_num_rows($res_data);
$max_page	= ceil($total_data/$maxrow);
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="hidden" name="mod" value="produk_list">
	<div class="input-group mb-3">
		<input type="text" class="form-control" name="keyword" placeholder="masukkan kata kunci">
		<div class="input-group-suspend">
		<button class="btn btn-outline-primary" type="submit">Cari Data</button>
		</div>
	</div>	
</form>
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
	$query = "select * from produk $filter LIMIT $startrow,$maxrow";
	$res = mysql_query($query);
	$no=1 + $startrow;
	while($row=mysql_fetch_array($res)){
	?>
      <tr>
        <td><?php echo $no;?></td>
        <td><img src="<?php echo $row['Gambar'];?>" width="80"> </td>
        <td><?php echo $row['NamaProduk'];?></td>
        <td><?php echo $row['Harga'];?></td>
		<td><?php echo $row['Qty'];?></td>
        <td><a href="index.php?mod=produk_form&id=<?php echo $row['ProdukID']; ?>" >Edit</a>
		| <a onclick="return confirm('Yakin data ini akan dihapus? ')" href="proses/produk_delete.php?id=<?php echo $row['ProdukID']; ?>">Delete</a>
		
		</td>
		
      </tr>
	<?php $no++; } ?>
    </tbody>
  </table>
  
 <ul class="pagination">
  <?php 
  for($i=1; $i<=$max_page; $i++){
	  if($i==1)
		  echo "<li class='page-item'> <a href='index.php?mod=produk_list'>".$i."</a></li>";
	  else{
		  $link = $i-1;
	  echo "<li class='page-item'> <a href='index.php?mod=produk_list&page=$link'>".$i."</a></li>";}
  }
  ?>
  </ul>
  </div>
</div>

