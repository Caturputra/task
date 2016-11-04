<?php $var_title = "Home"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" charset="utf-8" />
  <title><?php echo $var_title; ?></title>
  <link href="./assets/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
  <link href="./assets/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
  <link type="text/css" href="./assets/stylesheet/stylesheet.css" rel="stylesheet" media="screen" />
  <link type="text/css" href="./assets/stylesheet/style.css" rel="stylesheet" media="screen" />
  <link type="text/css" href="./assets/stylesheet/memenu.css" rel="stylesheet" media="screen" />
  <link type="text/css" href="./assets/stylesheet/flexslider.css" rel="stylesheet" media="screen" />
  <link type="text/css" href="./assets/stylesheet/jquery-ui.css" rel="stylesheet" media="screen" />
  <link type="text/css" href="./assets/stylesheet/sweetalert.css" rel="stylesheet" media="screen" />

  <script type="text/javascript" src="./assets/javascript/jquery-1.6.2.min.js"></script>
  <script type="text/javascript" src="./assets/javascript/jquery.flexslider.js"></script>
  <script type="text/javascript" src="./assets/javascript/memenu.js"></script>
  <script type="text/javascript" src="./assets/javascript/easing.js"></script>
  <script type="text/javascript" src="./assets/javascript/easyResponsiveTabs.js"></script>
  <script type="text/javascript" src="./assets/javascript/move-top.js"></script>
  <script type="text/javascript" src="./assets/javascript/jquery-ui.min.js"></script>
  <script type="text/javascript" src="./assets/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./assets/javascript/sweetalert.min.js"></script>
  <script type="text/javascript" src="./assets/javascript/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="./assets/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./assets/javascript/common.js"></script>

  <script type="text/javascript">
  var j2 = jQuery.noConflict(true);
  </script>
  <script type="text/javascript">
  $(document).ready(function(){
    $(".pesan").click(function(){
      swal({
        title: "Your item succesfully added!",
        text: "Closed in 2 seconds.",
        timer: 2000,
        showConfirmButton: false
      });
    });
  });
  $(document).ready(function() {

    $('.flexslider').flexslider({
      animation: "slide",
      controlNav: "thumbnails"
    });

    $(".memenu").memenu();

    $(function() {
      var menu_ul = $('.menu > li > ul '),
      menu_a  = $('.menu > li > a');
      menu_ul.hide();
      menu_a.click(function(e) {
        e.preventDefault();
        if(!$(this).hasClass('active')) {
          menu_a.removeClass('active');
          menu_ul.filter(':visible').slideUp('normal');
          $(this).addClass('active').next().stop(true,true).slideDown('normal');
        } else {
          $(this).removeClass('active');
          $(this).next().stop(true,true).slideUp('normal');
        }
      });
    });
  });
  </script>
</head>
<body>
  <!--header-->
  <div class="header-info">
    <div class="container">
      <div class="header-top-in">
        <ul class="support">
          <li><a href="mailto:info@example.com"><i class="glyphicon glyphicon-envelope"> </i>info@example.com</a></li>
          <li><span><i class="glyphicon glyphicon-earphone" class="tele-in"> </i>0 462 261 61 61</span></li>
        </ul>
        <ul class=" support-right">
          <li><a href=""><i class="glyphicon glyphicon-user" class="men"> </i>Login</a></li>
          <li><a href=""><i class="glyphicon glyphicon-lock" class="tele"> </i>Create an Account</a></li>
        </ul>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div> <!-- .header-info -->

  <div class="header header5">
    <div class="header-top">
      <div class="header-bottom">
        <div class="container">
          <div class="logo">
            <h1><a href="index.php">Our<span>Store</span></a></h1>
          </div>

          <div class="top-nav">
            <ul class="memenu skyblue">
              <li class="active"><a href="index.php">Home</a></li>
              <li class="grid"><a href="#">Desktop and Laptop</a>
                <div class="mepanel">
                  <div class="row">
                    <div class="col1 me-one">
                      <h4>Shop</h4>
                      <ul>
                        <li><a href="product_all.php?id=dekstop">All Desktop and Laptop</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li> <!-- .submenu -->
              <li class="grid"><a href="#">Peripherals</a></li>
              <li class="grid"><a href="#">Memory</a></li>
              <li class="grid"><a href="#">Printer</a></li>
            </ul> <!-- memenu -->

            <div class="clearfix"> </div>
          </div> <!-- .top-nav -->

          <div class="cart box_1">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Cart
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                <br/>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="panel panel-primary panel-warning">
                        <div class="panel-heading">
                          <h3 class="panel-title" style="color: black;"><i class="fa fa-github-square"></i>Keranjang Anda</h3>
                          &nbsp;<small> (Your cart)</small>
                        </div>
                        <div class="panel-body">

                          <table class="table table-hover table-striped">
                            <tr>
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
                                $query = mysqli_query($var_con, "SELECT * FROM oc_product p JOIN oc_product_desc d ON d.product_id = p.product_id WHERE p.product_id = '$key'");
                                $data = mysqli_fetch_array($query);
                                $jumlah_harga = $data['product_price'] * $val;
                                $total += $jumlah_harga;
                                ?>
                                <tr>
                                  <td><center><i class="fa fa-gift fa-lg"></i> <?php echo $data['product_name']; ?></center></td>
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

                            </div>
                            <div class="panel-footer">
                              <p><div align="right">
                                <a href="detail_cart.php" class="btn btn-success">Details Keranjang</a>
                              </div></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </ul>
                  </div>
                  <div class="clearfix"> </div>
                </div> <!-- .cart_boc -->

                <div class="clearfix"> </div>

              </div> <!-- .container -->
              <div class="clearfix"> </div>
            </div> <!-- .header-bottom -->
          </div> <!-- .header top -->
