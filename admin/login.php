<?php
  include 'login_check.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
  <title>Administration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <link href="../assets/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
  <link href="../assets/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
  <link type="text/css" href="../assets/stylesheet/stylesheet.css" rel="stylesheet" media="screen" />

  <script type="text/javascript" src="../assets/javascript/jquery.js"></script>
  <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
  <div id="container">
    <header id="header" class="navbar navbar-static-top">
      <div class="navbar-header">
        <a href="" class="navbar-brand">OurStore</a>
      </div>
    </header><br><br>
    <div id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-offset-4 col-sm-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="panel-title"><i class="fa fa-lock"></i> Please enter your login details.</h1>
              </div>
              <div class="panel-body">
                <?php if ( isset($var_message) ) : ?>
  								<div class="alert alert-danger">
  									<i class="fa fa-key fa-lg"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  									<strong><?= $var_message; ?></strong>
  								</div>
  						  <?php endif; ?>
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="input-username">Username</label>
                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" name="frm_username" value="" placeholder="Username" id="input-username" class="form-control" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="input-password">Password</label>
                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      <input type="password" name="frm_password" value="" placeholder="Password" id="input-password" class="form-control" />
                    </div>
                  </div>
                  <div class="text-right">
                    <button type="submit" class="btn btn-primary" name="btn_login"><i class="fa fa-key"></i> Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
