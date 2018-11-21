<form class="col-lg-12" action="proses/beli_pesanan.php" method="POST">
	<div class="col-lg-12">
		<h2>Daftar Keranjang</h2>
	</div>
	<div style="clear:both">&nbsp;</div>

	<div class="col-lg-12">
		<div style="float:right">
			<a href="proses/beli_batal.php" ><button type="button" class="btn btn-secondary">Kosongkan Keranjang</button></a>
			<button type="submit" class="btn btn-success">Proses Pesanan</button>
		</div>
	</div>
	<div style="clear:both">&nbsp;</div>
	<table class="table">
	  <thead>
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">Kode Produk</th>
		  <th scope="col">Nama Produk</th>
		  <th scope="col">Qty</th>
		  <th scope="col">Harga Satuan</th>
		  <th scope="col">Total</th>
		  <th scope="col">Aksi</th>
		</tr>
	  </thead>
	  <tbody>
		<?php 
		$n =1;
		$listKeranjang  = (isset($_SESSION['pesanan']))?$_SESSION['pesanan']:array();
		foreach($listKeranjang as $row){ 
			$query = "select * from produk where produkId='".$row."'";
			$res = mysql_query($query);
			$data = mysql_fetch_array($res);
		?>
		<tr>
		  <th scope="row"><?php echo $n; ?></th>
		  <td>
			<input type="hidden" name="idproduk[]" value="<?php echo $row; ?>">
			<?php echo $row; ?></td>
		  <td><?php echo $data['nama_produk']; ?></td>
		  <td>
			<input type="number" name="qty[]" value="1" class ="qty" id="qty-<?php echo $row; ?>">
		  </td>
		  <td>
			Rp. <?php echo number_format($data['harga']); ?>
			<input name="harga[]" type="hidden" id="harga-<?php echo $row; ?>" value="<?php echo $data['harga']; ?>" class="qty">
		  </td>
		  <td>Rp. <b><span id="total-<?php echo $row; ?>"><?php echo number_format($data['harga']); ?></span></b></td>
		  <td>
			<a href="proses/beli_hapus.php?id=<?php echo $row; ?>">
				<button type="button" class="btn btn-success">Hapus</button>
			</a>
		  </td>
		</tr>
		<?php $n++; } ?>
	  </tbody>
	</table>
</form>

<script>
$(document).ready(function(){
	$('.qty').change(function(){
		var qty  = $(this).val();
		var curid = $(this).attr('id');
		var splid = curid.split('-');
		var harga = $('#harga-'+splid[1]).val();
		var total = parseInt(qty) * parseInt(harga);
		$('#total-'+splid[1]).html(numberWithCommas(total));
	});
});

function numberWithCommas(x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x))
        x = x.replace(pattern, "$1,$2");
    return x;
}
</script>

