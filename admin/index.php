<?php
  include 'login_check.php';
  $var_username = $_SESSION['username'];

  if (empty($var_username)) {
    header('location: login.php');
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="../assets/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="../assets/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link type="text/css" href="../assets/stylesheet/stylesheet.css" rel="stylesheet" media="screen" />

    <script type="text/javascript" src="../assets/javascript/jquery.js"></script>
    <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div id="container">
      <header id="header" class="navbar navbar-static-top">
        <div class="navbar-header">
          <a type="button" id="button-menu" class="pull-left"><i class="fa fa-indent fa-lg"></i></a>
          <a href="" class="navbar-brand">OurStore</a>
        </div>

        <nav class="nav pull-right">
          <!-- Home link harus dibuat -->
          <li>
            <a href="logout.php"><span class="hidden-xs hidden-sm hidden-md">Logout</span> <i class="fa fa-sign-out fa-lg"></i></a>
          </li>
        </nav>
      </header>

      <nav id="column-left">
        <div id="profile">
          <div>
            <i class="fa fa-opencart"></i>
          </div>
          <div>
            <h4><?= $_SESSION['username']; ?></h4>
            <small>Administrator</small>
          </div>
        </div>

        <ul id="menu">
          <li id="menu-dashboard">
            <a href="Q"><i class="fa fa-dashboard fw"></i> <span>Dashboard</span></a>
          </li>

          <li id="menu-catalog">
            <a class="parent"><i class="fa fa-tags fw"></i> <span>Catalog</span></a>
          </li>
        </ul>
      </nav>

      <div id="content">
        <br>
          <div class="container">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Insert Product</h3>
              </div>
              <div class="panel-body">
                <div clas="row">
                  <div class="col-sm-8">
                    <form action="" class="form-horizontal" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="frm_product_name" class="control-label col-sm-2">Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="frm_product_name" name="frm_product_name">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="frm_product_desc" class="control-label col-sm-2">Descripton</label>
                        <div class="col-sm-6">
                            <textarea class="form-control" name="frm_product_desc" rows="8" cols="40"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="frm_product_height" class="control-label col-sm-2">Height</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="frm_product_height" name="frm_product_height">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="frm_product_weight" class="control-label col-sm-2">Weight</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="frm_product_weight" name="frm_product_weight">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="frm_product_price" class="control-label col-sm-2">Price</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="frm_product_price" name="frm_product_price">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="frm_product_desc" class="control-label col-sm-2">Category</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="frm_product_category">
                              <option value=<?php ?>><?php  ?></option>
                            </select>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="panel-footer">
                <button type="button" class="btn btn-primary" name="btn_upload">Insert</button>
              </div>
            </div>
            <form>
          </div>
      </div>
    </div>

  </body>
</html>
