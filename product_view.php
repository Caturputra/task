<?php include 'config.php'; ?>

<?php include 'layout/header.php'; ?>

<!-- Body dari tampilan per product -->

<div class="back">
	<h2>Product Details</h2>
</div>
</div>
<!---->
<div class="container">
	<div class="title"><h3>Keranjang Anda</h3></div>
	<table class="table table-hover table-condensed">
		<tr>
			<th><center>No</center></th>
			<th><center>Item</center></th>
			<th><center>Quantity</center></th>
			<th><center>Sub Total</center></th>
		</tr>
		<?php
		//MENAMPILKAN DETAIL KERANJANG BELANJA//

		$total = 0;
		//mysql_select_db($database_conn, $conn);
		if (isset($_SESSION['items'])) {
			foreach ($_SESSION['items'] as $key => $val) {
				$query = mysqli_query($var_con, "SELECT * FROM oc_product WHERE product_id = '$key'");
				$data = mysqli_fetch_array($query);

				$jumlah_harga = $data['product_price'] * $val;
				$total += $jumlah_harga;
				$no = 1;
				?>
				<tr>
					<td><center><?php echo $no ++; ?></center></td>
					<td><center><?php echo $data['product_name']; ?></center></td>
					<td><center><?php echo number_format($val); ?> Pcs</center></td>
					<td><center>Rp <?php echo number_format($jumlah_harga); ?></center></td>
				</tr>

				<?php
				//mysql_free_result($query);
			}
			//$total += $sub;
		}?>
		<?php
		if($total == 0){ ?>
			<td colspan="4" align="center"><?php echo "Keranjang Kosong!"; ?></td>
			<?php } else { ?>

				<td colspan="4" style="font-size: 18px;"><b><div class="pull-right">Total Belanja Anda : Rp <?php echo number_format($total); ?>,- </div> </b></td>

				<?php	}
				?>
			</table>
			<p><div align="right">
				<a href="detail_cart.php" class="btn btn-success">Details Keranjang</a>
			</div></p>
		</div>
		<!-- start: Row -->

		<div class="row">
			<div class="col-sm-6">
				<?php
				$query = mysqli_query($var_con, "SELECT * FROM oc_product WHERE product_id='$_GET[product_id]'");
				$data  = mysqli_fetch_array($query);
				?>
				<!--<div class="span4">-->
				<!--<div class="icons-box">-->
				<div class="hero-unit" style="margin-left: 20px;">
					<table>
						<tr>
							<td colspan="4"><div class="title"><h3><?php echo $data['product_name']; ?></h3></div></td>
						</tr>
						<tr>
							<td></td>
							<td size="200"><h3>Harga</h3></td>
							<td><h3>:</h3></td>
							<td><div><h3>Rp.<?php echo number_format($data['product_price'],2,",",".");?></h3></div></td>
						</tr>
						<tr>
							<td></td>
							<td><h3>Stock</h3></td>
							<td><h3>:</h3></td>
							<td><div><h3><?php if ($data['qty'] >= 1){
								echo '<strong style="color: blue;">In Stock</strong>';
							} else {
								echo '<strong style="color: red;">Out Of Stock</strong>';
							}; ?></h3></div></td>
						</tr>
						<tr>
							<td></td>
							<td><h3>Keterangan</h3></td>
							<td><h3>:</h3></td>
							<td><div><h3><?php echo $data['product_desc']; ?></h3></div></td>
						</tr>
						<!--	<p>

					</p> -->
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><div class="clear"> <a href="cart.php?act=add&amp;barang_id=<?php echo $data['product_id']; ?>&amp;ref=product_view.php?product_id=<?php echo $data['product_id'];?>" class="btn btn-lg btn-danger">Beli &raquo;</a></div></td>
					</tr>

				</table>
			</div>


			<div class="product">
				<div class="container">
					<div class="col-md-3 product-price">

						<div class="rsidebar span_1_of_left">
							<?php include 'layout/categories.php'; ?>
						</div>

						<?php include 'layout/tags.php'; ?>

					</div> <!-- end of product price -->

					<div class="col-md-9 product-price1">
						<div class="col-md-5 single-top">
							<div class="flexslider">
								<ul class="slides">
									<?php
									$var_pid = $_GET['product_id'];

									$var_sqlimg = "SELECT * FROM oc_product_image WHERE product_id = '{$var_pid}'";
									$var_queryimg = mysqli_query($var_con, $var_sqlimg);
									while($var_dataimg = mysqli_fetch_array($var_queryimg)) {
										?>
										<li data-thumb="admin/<?= $var_dataimg['product_image_path']; ?>">
											<img src="admin/<?= $var_dataimg['product_image_path']; ?>" />
										</li>
										<?php } ?>
									</ul>
								</div>
							</div> <!-- end of single top -->
							<?php
							/*
							** Menampilkan product
							*/
							$var_sqlid = "SELECT * FROM oc_product_image i JOIN oc_product p on p.product_id = i.product_id JOIN oc_product_desc d on d.product_id = i.product_id WHERE i.product_id = '{$var_pid}'";
							$var_queryid = mysqli_query($var_con, $var_sqlid);
							$var_data = mysqli_fetch_array($var_queryid);
							?>
							<div class="col-md-7 single-top-in simpleCart_shelfItem">
								<div class="single-para">
									<h4><?= $var_data['product_name']; ?></h4>
									<div class="star-on">
										<ul class="star-footer">
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
										</ul>
										<div class="review">
											<a href="#"> 1 customer review </a>

										</div>
										<div class="clearfix"> </div>
									</div>

									<h5 class="item_price"><?= number_format($var_data['product_price'],0,",","."); ?></h5>
									<form class="" action="" method="post">
										<div class="form-group">
											<label for="frm_qty" class="control-label"></label>
											<input type="number" class="form-control" id="frm_qty" name="frm_qty" placeholder="Quantity">
										</div>
									</form>
									<a href="product_view.php?product_id=<?= urldecode($var_data['product_id'])?>" class="add-cart item_add">ADD TO CART</a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div> <!-- end of top-product -->
						<div class="clearfix"> </div>
					</div>
				</div>

				<?php /*header for front */ include 'layout/footer.php'; ?>
