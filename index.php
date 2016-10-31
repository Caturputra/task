<?php
  include 'config.php';
?>
    <?php include 'layout/header.php'; ?>

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

    <div class="sap_tabs">
      <div class="container">
        <label class="line"></label>
        <h2>Latest Product</h2>
        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
          <ul class="resp-tabs-list">
            <li class="resp-tabs-item" aria-controls="tab_item-0" role="tab"><span>Desktop and Laptop</span></li>
            <li class="resp-tabs-item" aria-controls="tab_item-1" role="tab"><span>Peripherals</span></li>
            <li class="resp-tabs-item" aria-controls="tab_item-2" role="tab"><span>RAM</span></li>
            <li class="resp-tabs-item" aria-controls="tab_item-3" role="tab"><span>Printers</span></li>
            <div class="clearfix"></div>
          </ul>

          <!-- container item -->
          <div class="resp-tabs-container">
            <?php
              $var_sql1 = "SELECT distinct * FROM oc_product_image i JOIN oc_product p on p.product_id = i.product_id JOIN oc_product_desc d on d.product_id = i.product_id WHERE i.product_id = p.product_id and i.product_id = d.product_id WHERE p.category_parent = 0 GROUP by i.product_id LIMIT 0,3";
              $var_query1 = mysqli_query($var_con, $var_sql1);
              while ($var_data = mysqli_fetch_array($var_query1)) {


            ?>
            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
              <div class="tab_img">
                <div class="img-top simpleCart_shelfItem">
                  <img src="admin/<?= $var_data['product_image_path']; ?>" class="img-responsive" alt="<?= $var_data['product_image_name'];?>"/>
                  <div class="tab_desc">
                    <ul class="round-top">
                      <li><a href="product_view.php?product_id="><i class="glyphicon glyphicon-search"> </i></a></li>
                      <li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
                     </ul>

                    <div class="agency ">
                      <div class="agency-left">
                        <h6 class="jean">Fashion Goggles</h6>
                        <span class="dollor item_price">$50.00</span>

                        <div class="clearfix"> </div>
                      </div>

                      <div class="agency-right">
                        <ul class="social">
                          <li><a href="#"><i class="item_add"> </i></a></li>
                        </ul>

                        <ul class="social-in">
                          <li><a href="#"><i> </i></a></li>
                          <li><a href="#"><i > </i></a></li>
                          <li><a href="#"><i> </i></a></li>
                          <li><a href="#"><i > </i></a></li>
                          <li><a href="#"><i > </i></a></li>
                        </ul>

                        <div class="clearfix"> </div>
                      </div>
                    </div> <!-- .agency -->
                  </div> <!-- .tab_desc -->
                </div> <!-- .simpleCart -->
              </div> <!-- .tab_img -->
            </div> <!-- .resp tab content -->
            <?php } ?>
            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
              <div class="tab_img">
                <div class="img-top simpleCart_shelfItem">
                  <img src="images/pi2.jpg" class="img-responsive" alt=""/>
                  <div class="tab_desc">
                    <ul class="round-top">
                      <li><a href="single.html"><i class="glyphicon glyphicon-search"> </i></a></li>
                      <li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
                     </ul>

                    <div class="agency ">
                      <div class="agency-left">
                        <h6 class="jean">Fashion Goggles</h6>
                        <span class="dollor item_price">$50.00</span>

                        <div class="clearfix"> </div>
                      </div>

                      <div class="agency-right">
                        <ul class="social">
                          <li><a href="#"><i class="item_add"> </i></a></li>
                        </ul>

                        <ul class="social-in">
                          <li><a href="#"><i> </i></a></li>
                          <li><a href="#"><i > </i></a></li>
                          <li><a href="#"><i> </i></a></li>
                          <li><a href="#"><i > </i></a></li>
                          <li><a href="#"><i > </i></a></li>
                        </ul>

                        <div class="clearfix"> </div>
                      </div>
                    </div> <!-- .agency -->
                  </div> <!-- .tab_desc -->
                </div> <!-- .simpleCart -->
              </div> <!-- .tab_img -->
            </div> <!-- .resp tab content -->

            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
              <div class="tab_img">
                <div class="img-top simpleCart_shelfItem">
                  <img src="images/pi2.jpg" class="img-responsive" alt=""/>
                  <div class="tab_desc">
                    <ul class="round-top">
                      <li><a href="single.html"><i class="glyphicon glyphicon-search"> </i></a></li>
                      <li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
                     </ul>

                    <div class="agency ">
                      <div class="agency-left">
                        <h6 class="jean">Fashion Goggles</h6>
                        <span class="dollor item_price">$50.00</span>

                        <div class="clearfix"> </div>
                      </div>

                      <div class="agency-right">
                        <ul class="social">
                          <li><a href="#"><i class="item_add"> </i></a></li>
                        </ul>

                        <ul class="social-in">
                          <li><a href="#"><i> </i></a></li>
                          <li><a href="#"><i > </i></a></li>
                          <li><a href="#"><i> </i></a></li>
                          <li><a href="#"><i > </i></a></li>
                          <li><a href="#"><i > </i></a></li>
                        </ul>

                        <div class="clearfix"> </div>
                      </div>
                    </div> <!-- .agency -->
                  </div> <!-- .tab_desc -->
                </div> <!-- .simpleCart -->
              </div> <!-- .tab_img -->
            </div> <!-- .resp tab content -->
          </div> <!-- .resp tab container -->
        </div> <!-- #horizontalTab -->
      </div> <!-- .container -->
    </div> <!-- .sap-tabs -->

    <?php include 'layout/footer.php'; ?>
