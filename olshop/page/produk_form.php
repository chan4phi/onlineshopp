<?php
	$id = "";
	$nama_produk="";
	$harga="";
	$qty="";
	$action ="proses/produk_add.php";
 if(isset($_GET['id'])){
	 $id = $_GET['id'];
	 include"proses/koneksi.php";
	 $query = "select * from produk where produkID = '".$id."'";
	 $row = mysql_query($query);
	 $res = mysql_fetch_array($row);
	 $nama_produk= $res['NamaProduk'];
	 $harga= $res['Harga'];
	 $qty= $res['Qty'];
	 $action ="proses/produk_update.php";
}
 ?>

 <form class="form-horizontal" method= "POST" action="proses/produk_add.php" action="<?php echo $action; ?>" enctype="multipart/form-data">
  <div class="form-group">
  <input type="hidden" value="<?php echo $id; ?>" name="id">
    <label class="control-label col-sm-4">Nama_Produk:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $nama_produk; ?>" name="nama_produk" placeholder="Nama Produk">
    </div>
  </div>
  
  
  <div class="form-group">
    <label class="control-label col-sm-2">Harga:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $harga; ?>" name="harga" placeholder="Harga">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2">Quantity:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo $qty; ?>" name="qty" placeholder="Qty">
      </div>
    </div>
  </div>
  
  <div class="form-group">
	<label class="control-label col-sm-2">Gambar:</label>
		<div class="col-sm-4">
			<input type="file" class="form-control" name="gambar">
    </div>
  </div>
  
	<button type="reset" class="btn btn-warning">Batal</button>
	<button type="submit" class="btn btn-info">Simpan</button>
</form> 