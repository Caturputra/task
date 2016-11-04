<?php include 'config.php'; ?>

<?php include 'layout/header.php'; ?>

<!-- Body dari tampilan per product -->

<div class="back">
	<h2>Product Details</h2>
</div>
</div>
<!---->

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
									$var_pdid = $_GET['id'];


									$var_sqlimg = "SELECT * FROM oc_product_image WHERE product_id = '{$var_pid}' or product_id = '{$var_pdid}'";
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
							$var_sqlid = "SELECT * FROM oc_product_image i JOIN oc_product p on p.product_id = i.product_id JOIN oc_product_desc d on d.product_id = i.product_id WHERE i.product_id = '{$var_pid}' or i.product_id = '{$var_pdid}'";
							$var_queryid = mysqli_query($var_con, $var_sqlid);
							$var_data = mysqli_fetch_array($var_queryid);
							?>
							<div class="col-md-7 single-top-in simpleCart_shelfItem">
								<div class="single-para">
									<h4><?= $var_data['product_name']; ?></h4>
									<h5 class="item_price">Rp <?= number_format($var_data['product_price'],0,",","."); ?></h5>
									<h5>Stock :
										<?php if ($var_data['qty'] >= 1){
											echo '<strong style="color: blue;">In Stock</strong>';
										} else {
											echo '<strong style="color: red;">Out Of Stock</strong>';
										}; ?>
									</h5>
									<p>Description <br />
										<?php echo $var_data['product_desc']; ?>
									</p>
									<!-- <form class="" action="" method="post">
										<div class="form-group">
											<label for="frm_qty" class="control-label"></label>
											<input type="number" class="form-control" id="frm_qty" name="frm_qty" placeholder="Quantity">
										</div>
									</form> -->
									<a class="add-cart item_add pesan" href="cart.php?act=add&amp;product_id=<?php echo $var_data['product_id']; ?>&amp;ref=product_view.php?id=<?php echo $var_data['product_id'];?>">ADD TO CART</a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div> <!-- end of top-product -->
						<div class="clearfix"> </div>
					</div>
				</div>

				<?php /*header for front */ include 'layout/footer.php'; ?>
