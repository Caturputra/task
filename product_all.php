<?php include 'config.php'; ?>
<?php include 'layout/header.php'; ?>

<!-- Body -->
<body>

  <div class="back">
    <h2>Products</h2>
  </div>
</div>

  <div class="product">
    <div class="container">
      <div class="col-md-3 product-price">
        <div class=" rsidebar span_1_of_left">
          <?php include 'layout/categories.php'; ?>
        </div>

        <?php include 'layout/tags.php'; ?>

        <?php include 'layout/bottom.php'; ?>

        <br>
      </div> <!-- /.product-price -->

      <!-- data produk -->
      <div class="col-md-9 product-price1">
        <div class="mens-toolbar">
          <p class="showing">Showing 1–9 of 21 results</p>
          <div class="sort">
            <select>
              <option value=""> Sorting By Rate</option>
              <option value="">Sorting By Color </option>
              <option value="">Sorting By Price </option>
            </select>
          </div>

          <div class="clearfix"></div>
        </div> <!-- /.mens-toolbar -->

        <div class="product-right-top">
          <div class="top-product">
            <?php
              /*
              ** Menampilkan product
              */
              $var_sqlimg = "SELECT distinct * FROM oc_product_image i JOIN oc_product p on p.product_id = i.product_id JOIN oc_product_desc d on d.product_id = i.product_id WHERE i.product_id = p.product_id and i.product_id = d.product_id GROUP by i.product_id";
              $var_queryimg = mysqli_query($var_con, $var_sqlimg);
              while ($var_img = mysqli_fetch_array($var_queryimg)) {

            ?>
            <div class="col-md-4 chain-grid  simpleCart_shelfItem">
              <div class="grid-span-1">
              		<a  href="product_view.php?product_id=<?php echo urlencode($var_img['product_id'])?>"><img class="img-responsive " src="admin/<?= $var_img['product_image_path']?>" alt="<?= $var_img['product_image_name']?>">
                  <div class="link">
                    <ul>
                      <li><i class="glyphicon glyphicon-search"> </i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="grid-chain-bottom ">
                <a href="product_view.php?product_id=<?= urlencode($var_img['product_id']);?>"><?= $var_img['product_name'] ?></a>
                <div class="star-price">
                  <div class="price-at-bottom ">
                    <span class="item_price">Price : Rp <?= number_format($var_img['product_price'],2,",","."); ?></span>
                  </div>
                  <div class="clearfix"> </div>
                </div>
                <div class="cart-add" style="text-align: center !important; width: 350px;">
                  <a class="add1 item_add" href="product_view.php?product_id=<?= urldecode($var_img['product_id']); ?>">ADD TO CART <i> </i></a>
                  <a class="add1 item_add" href="product_view.php?product_id=<?= urldecode($var_img['product_id']); ?>">Detail <i> </i></a>
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div> <!-- /.simpleCart_shelfItem -->
            <?php } ?>

            <div class="clearfix"> </div>
          </div> <!-- /.top-product-->
        </div> <!-- /.product-right-top -->
        <ul class="start">
          <li><a href="#"><i> </i></a></li>
          <li><span>1</span></li>
          <li class="arrow"><a href="#">2</a></li>
          <li class="arrow"><a href="#">3</a></li>


          <li><a href="#"><i class="next"> </i></a></li>
        </ul>
        <div class="clearfix"> </div>
      </div> <!--product-price1 -->
    </div> <!-- /.container -->
  </div> <!-- /.product -->

  <?php include 'layout/footer.php' ?>
