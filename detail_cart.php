<?php include 'config.php'; ?>

<?php include 'layout/header.php'; ?>

<!-- Body dari tampilan per product -->

<div class="back">
	<h2>Your Cart Detail</h2>
</div>
</div>
<!---->
<div class="container">
  <div class="title"><h3>Detail Keranjang Belanja</h3></div>
<table class="table table-hover table-condensed">
<tr>
					<th><center>ID Customer</center></th>
          <th><center>Kode Barang</center></th>
					<th><center>Nama Barang</center></th>
					<th><center>Harga Satuan</center></th>
					<th><center>Jumlah</center></th>
					<th><center>Sub Total</center></th>
					<th><center>Opsi</center></th>
				</tr>
			    <?php
				//MENAMPILKAN DETAIL KERANJANG BELANJA//

    $total = 0;
    //mysql_select_db($database_conn, $conn);
    if (isset($_SESSION['items'])) {
        foreach ($_SESSION['items'] as $key => $val) {
            $query = mysqli_query($var_con, "SELECT * FROM oc_product p JOIN oc_product_desc d ON d.product_id = p.product_id WHERE p.product_id = '$key'");
            $data = mysqli_fetch_array($query);

            $jumlah_harga = $data['product_price'] * $val;
            $total += $jumlah_harga;
            $no = 1;
            ?>
                <tr>
                <td><center><?php echo $sid; ?></center></td>
                <td><center><?php echo $data['product_id']; ?></center></td>
                <td><center><?php echo $data['product_name']; ?></center></td>
                <td><center><?php echo number_format($data['product_price']); ?></center></td>
                <td><center><?php echo number_format($val); ?></center></td>
                <td><center><?php echo number_format($jumlah_harga); ?></center></td>
                <td><center>
									<a href="cart.php?act=plus&amp;product_id=<?php echo $key; ?>&amp;ref=detail_cart.php" class="btn btn-xs btn-success">Tambah</a>
									<a href="cart.php?act=min&amp;product_id=<?php echo $key; ?>&amp;ref=detail_cart.php" class="btn btn-xs btn-warning">Kurang</a>
									<a href="cart.php?act=del&amp;product_id=<?php echo $key; ?>&amp;ref=detail_cart.php" class="btn btn-xs btn-danger">Hapus</a></center></td>
                </tr>

					<?php
                    //mysql_free_result($query);
						}
							//$total += $sub;
						}?>
                         <?php
				if($total == 0){
					echo '<tr><td colspan="5" align="center">Ups, Keranjang kosong!</td></tr></table>';
					echo '<p><div align="right">
						<a href="product_all.php" class="btn btn-info btn-lg">&laquo; Continue Shopping</a>
						</div></p>';
				} else {
					echo '
						<tr style="background-color: #DDD;"><td colspan="4" align="right"><b>Total :</b></td><td align="right"><b>Rp. '.number_format($total,2,",",".").'</b></td></td></td><td></td></tr></table>
						<p><div align="right">
						<a href="product_all.php" class="btn btn-sm btn-info">&laquo; CONTINUE SHOPPING</a>
						<a href="checkout.php?total='.$total.'" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> CHECK OUT &raquo;</a>
						</div></p>
					';
				}
				?>

</table>
</div>

				<?php /*header for front */ include 'layout/footer.php'; ?>
