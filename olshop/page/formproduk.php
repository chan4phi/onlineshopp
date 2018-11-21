<?php 
	include"proses/koneksi.php";
	$id = "";
	$nama_produk="";
	$harga="";
	$qty="";
	$kategori="";
	$action ="proses/produk_add.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "select * from produk 
				where produkId ='".$id."'";
		$row = mysql_query($query);
		$res = mysql_fetch_array($row);
		$nama_produk= $res['nama_produk'];
		$harga= $res['harga'];
		$qty= $res['qty'];
		$kategori = $res['kategori'];
		$action ="proses/produk_update.php";
	}
	
	
?>
<form class="form-horizontal" method="POST" action="<?php echo $action; ?>" enctype="multipart/form-data">
  <input type="hidden" value="<?php echo $id; ?>" name="id">
  <div class="form-group">
    <label class="control-label col-sm-4">Nama Produk:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $nama_produk; ?>" placeholder="Nama Produk" name="nama_produk">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2">Harga:</label>
    <div class="col-sm-10">
      <input type="number" value="<?php echo $harga; ?>" class="form-control"  placeholder="Harga Produk" name="harga">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2">Kategori:</label>
    <div class="col-sm-10">
      <select name="kategori" class="form-control">
		<?php foreach($cfg_kategori as $row){
			if($kategori !='' && $row == $kategori){
				echo "<option value='".$row."' selected >$row</option>";
			}else
				echo "<option value='".$row."'>$row</option>";
		} ?>
	  </select>
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2">Qty / stok:</label>
    <div class="col-sm-10">
      <input type="number" value="<?php echo $qty; ?>" class="form-control"  placeholder="Qty" name="qty">
    </div>
  </div>
	
	<div class="form-group">
		<label class="control-label col-sm-2">Gambar</label>
		<div class="col-sm-10">
		  <input type="file" class="form-control"  name="gambar">
		</div>
	</div>
	<br>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="button" class="btn btn-danger">Batal</button>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form> 