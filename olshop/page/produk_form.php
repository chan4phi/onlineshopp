 <form class="form-horizontal" method= "POST" action="proses/produk_add.php">
  <div class="form-group">
    <label class="control-label col-sm-4">Nama_Produk:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk">
    </div>
  </div>
  
  
  <div class="form-group">
    <label class="control-label col-sm-2">Harga:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="harga" placeholder="Harga">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2">Quantity:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="qty" placeholder="Qty">
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