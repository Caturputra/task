<?php
  include_once 'login_check.php';
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

    <script type="text/javascript" src="../assets/javascript/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/javascript/common.js"></script>
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
            <a href="?page=home"><i class="fa fa-dashboard fw"></i> <span>Dashboard</span></a>
          </li>

          <li id="menu-catalog">
            <a class="parent"><i class="fa fa-tags fw"></i> <span>Catalog</span></a>
            <ul>
              <li><a href="?page=category_add">Add Category</a></li>
              <li><a href="?page=product_add">Add Product</a></li>
            </ul>
          </li>
        </ul>
      </nav>

      <div id="content">
        <br>
        <div class="container-fluid">
          <?php
            $pages_dir = 'product';
            if(!empty($_GET['page'])){
              $pages = scandir($pages_dir, 0);
              unset($pages[0], $pages[1]);

              $p = $_GET['page'];
              if(in_array($p.'.php', $pages)){
                include($pages_dir.'/'.$p.'.php');
              } else {
                echo '<div class="page-header">
                      <h1>404! Page Not Found</h1>
                  </div>
                ';
              }
            } else {
              include($pages_dir.'/home.php');
            }
          ?>
        </div>
        </div>
    </div>
  </body>
</html>
