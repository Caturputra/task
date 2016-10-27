<?php
  /*
  ** Fungsi untuk validasi form input
  */
  function validateSecurity($var_data) {
    //$data = mysqli_escape_string($var_con, $var_data);
    $data = addslashes($var_data);
    $data = htmlentities($var_data);
    $data = strip_tags($var_data);
    $data = trim($var_data);
    return $data;
  }
?>
