<?php
include 'config.php';
?>
<?php include 'layout/header.php'; ?>

<style media="screen">

.header-product {
  margin: 10px 10px auto;
  text-align: center;
  color: black;
}

.header-item {
  margin-bottom: 300px;
}

.header-item h2 {
  text-align: left;
  font-size: 2em;
  color: black;
}

.tab_img {
  width: 200px;
  align-items: center;
}

.item-desc {
  text-transform: uppercase;;
  text-align: justify;
}

.item-desc p.desc {
  color: black;
  font-size: 2em;
  font-style: bold;
}
</style>

<div class="banner">
  <div class="banner-top">
    <h2>OurStore</h2>
    <p>Anything about computer like Mouse, Keyboard, RAM, ETCS.</span></p>
  </div>

  <div class="now">
    <a class="morebtn" href="product_all.php">Explore</a>
    <a class="morebtn at-in" href="product_view.php">Shop Now</a>
    <div class="clearfix"> </div>
  </div> <!-- .now -->
</div> <!-- .banner -->
<div class="clearfix"> </div>
</div> <!-- .header -->

<div class="container">
  <div class="item-container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="header-product">
          <h1>Latest Product</h1>
        </div>
      </div>
    </div>
    <!-- untuk dekstop and laptop -->
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <div class="header-item">
          <h2>Desktop and Laptop</h2>
          <?php
          $var_sql1 = "SELECT * FROM oc_product_image i JOIN oc_product p on p.product_id = i.product_id JOIN oc_product_desc d on d.product_id = i.product_id WHERE p.category_id = 1 GROUP BY i.product_id ORDER BY i.product_id DESC LIMIT 0,3";
          $var_query1 = mysqli_query($var_con, $var_sql1);
          while ($var_data = mysqli_fetch_array($var_query1)) {
            ?>
            <div class="col-sm-4 col-lg-4">
              <div class="tab_img">
                <img src="admin/<?= $var_data['product_image_path']; ?>" class="img-responsive" alt="<?= $var_data['product_image_name'];?>" width="600"/>
                <div class="item-desc">
                  <p class="desc"><?= $var_data['product_desc']; ?></p>
                  <p>Price : <?= number_format($var_data['product_price'],0,",","."); ?></p>
                </div> <!-- .tab_desc -->
              </div> <!-- .tab_img -->
              <p><a class="btn btn-primary btn-block" href="product_view.php?product_id=<?= urldecode($var_data['product_id'])?>" >Add to cart</a></p>
            </div> <!-- .resp tab conten -->
            <?php } ?></div>
          </div> <!-- end of col -->
        </div> <!-- end of desktop and laptop -->

        <!-- untuk peripherals -->
        <div class="row">
          <div class="col-sm-12 col-lg-12">
            <div class="header-item">
              <h2>Peripherals</h2>
              <?php
              $var_sql1 = "SELECT * FROM oc_product_image i JOIN oc_product p on p.product_id = i.product_id JOIN oc_product_desc d on d.product_id = i.product_id WHERE p.category_id = 2 GROUP BY i.product_id ORDER BY i.product_id DESC LIMIT 0,3";
              $var_query1 = mysqli_query($var_con, $var_sql1);
              while ($var_data = mysqli_fetch_array($var_query1)) {
                ?>
                <div class="col-sm-4 col-lg-4">
                  <div class="tab_img">
                    <img src="admin/<?= $var_data['product_image_path']; ?>" class="img-responsive" alt="<?= $var_data['product_image_name'];?>" width="600"/>
                    <div class="item-desc">
                      <p class="desc"><?= $var_data['product_desc']; ?></p>
                      <p>Price : <?= number_format($var_data['product_price'],0,",","."); ?></p>
                    </div> <!-- .tab_desc -->
                  </div> <!-- .tab_img -->
                  <p><a class="btn btn-primary btn-block" href="product_view.php?product_id=<?= urldecode($var_data['product_id'])?>" >Add to cart</a></p>
                </div> <!-- .resp tab conten -->
                <?php } ?></div>
              </div> <!-- end of col -->
            </div> <!-- end of desktop and laptop -->

            <!-- untuk RAM -->
            <div class="row">
              <div class="col-sm-12 col-lg-12">
                <div class="header-item">
                  <h2>Random Access Memory</h2>
                  <?php
                  $var_sql1 = "SELECT * FROM oc_product_image i JOIN oc_product p on p.product_id = i.product_id JOIN oc_product_desc d on d.product_id = i.product_id WHERE p.category_id = 3 GROUP BY i.product_id ORDER BY i.product_id DESC LIMIT 0,3";
                  $var_query1 = mysqli_query($var_con, $var_sql1);
                  while ($var_data = mysqli_fetch_array($var_query1)) {
                    ?>
                    <div class="col-sm-4 col-lg-4">
                      <div class="tab_img">
                        <img src="admin/<?= $var_data['product_image_path']; ?>" class="img-responsive" alt="<?= $var_data['product_image_name'];?>" width="600"/>
                        <div class="item-desc">
                          <p class="desc"><?= $var_data['product_desc']; ?></p>
                          <p>Price : <?= number_format($var_data['product_price'],0,",","."); ?></p>
                        </div> <!-- .tab_desc -->
                      </div> <!-- .tab_img -->
                      <p><a class="btn btn-primary btn-block" href="product_view.php?product_id=<?= urldecode($var_data['product_id'])?>" >Add to cart</a></p>
                    </div> <!-- .resp tab conten -->
                    <?php } ?></div>
                  </div> <!-- end of col -->
                </div> <!-- end of desktop and laptop -->

                <!-- untuk printer -->
                <div class="row">
                  <div class="col-sm-12 col-lg-12">
                    <div class="header-item">
                      <h2>Printer</h2>
                      <?php
                      $var_sql1 = "SELECT * FROM oc_product_image i JOIN oc_product p on p.product_id = i.product_id JOIN oc_product_desc d on d.product_id = i.product_id WHERE p.category_id = 4 GROUP BY i.product_id ORDER BY i.product_id DESC LIMIT 0,3";
                      $var_query1 = mysqli_query($var_con, $var_sql1);
                      while ($var_data = mysqli_fetch_array($var_query1)) {
                        ?>
                        <div class="col-sm-4 col-lg-4">
                          <div class="tab_img">
                            <img src="admin/<?= $var_data['product_image_path']; ?>" class="img-responsive" alt="<?= $var_data['product_image_name'];?>" width="600"/>
                            <div class="item-desc">
                              <p class="desc"><?= $var_data['product_desc']; ?></p>
                              <p>Price : <?= number_format($var_data['product_price'],0,",","."); ?></p>
                            </div> <!-- .tab_desc -->
                          </div> <!-- .tab_img -->
                          <p><a class="btn btn-primary btn-block" href="product_view.php?product_id=<?= urldecode($var_data['product_id'])?>" >Add to cart</a></p>
                        </div> <!-- .resp tab conten -->
                        <?php } ?></div>
                      </div> <!-- end of col -->
                    </div> <!-- end of desktop and laptop -->
                  </div> <!-- end of item-container -->
                </div> <!-- enf of container -->

                <?php include 'layout/footer.php'; ?>
