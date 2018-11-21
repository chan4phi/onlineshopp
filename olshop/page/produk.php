
        <div class="col-lg-3">

          <h1 class="my-4">Shop Name</h1>
          <div class="list-group">
		  <?php foreach($cfg_kategori as $row){ ?>
            <a href="index.php?ktg=<?php echo $row; ?>" class="list-group-item"><?php echo $row; ?></a>
		  <?php } ?>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
			
			<?php 
				$filter = (isset($_GET['ktg']))?' WHERE kategori like "%'.$_GET['ktg'].'%"':''; 
				$q = "SELECT * FROM produk $filter";
				$res = mysql_query($q);
				while($row=mysql_fetch_array($res)){
			?>
				<div class="col-lg-4 col-md-6 mb-4">
				  <div class="card h-100">
					
					<div style="background:url('<?php echo $row['gambar']; ?>');  background-position: center;  width:252px; height:200px; background-repeat: no-repeat;"></div>
					<div class="card-body">
					  <h4 class="card-title">
						<a href="#"><?php echo $row['nama_produk']; ?></a>
					  </h4>
					  <h5>Rp. <?php echo number_format($row['harga']); ?></h5>
					  <p class="card-text">keterangan</p>
					</div>
					<div class="card-footer">
					  <small class="text-muted">Stok : <?php echo number_format($row['qty']); ?>| ktg : <?php echo $row['kategori']; ?></small>
						<div style="float:right;">
							<a href="proses/beli.php?id=<?php echo $row['produkId']; ?>">
								<button type="button" class="btn btn-sm btn-success">Beli</button>
							</a>
						</div>
					</div>
				  </div>
				</div>
			<?php } ?>
            

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->
