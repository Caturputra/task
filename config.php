<?php
  session_start();

  $var_host = 'localhost';
  $var_user = 'root';
  $var_pass = 'caturputra';
  $var_name = 'opencartdb';

  $var_con = mysqli_connect($var_host, $var_user, $var_pass, $var_name);

  if (!$var_con) {
    die();
  }

  include 'inc/function.php';
?>
