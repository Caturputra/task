<?php
  if (isset($_POST['btn_insert_product'])) {
    $var_name = validateSecurity($_POST['frm_product_name']);
    $var_desc = validateSecurity($_POST['frm_product_desc']);
    $var_height = validateSecurity($_POST['frm_product_height']);
    $var_weight = validateSecurity($_POST['frm_product_weight']);
    $var_price = validateSecurity($_POST['frm_product_price']);
    $var_cat = validateSecurity($_POST['frm_product_category']);

    if (empty($var_name)) {
      $var_message = "Name of product cannot empty!";
      $var_init = false;
    } else

    if (empty($var_desc)) {
      $var_message = "Decription of product cannot empty!";
      $var_init = false;
    } else

    if (empty($var_height)) {
      $var_message = "Height of product cannot empty!";
      $var_init = false;
    } else

    if (!is_numeric($var_height) || !is_numeric($var_weight) || !is_numeric($var_price)) {
      $var_message = "Height and weight must be number!";
      $var_init = false;
    } else

    if (empty($var_weight)) {
      $var_message = "Weight of product cannot empty!";
      $var_init = false;
    } else

    if (empty($var_price)) {
      $var_message = "Price of product cannot empty!";
      $var_init = false;
    } else

    if (!isset($_FILES['frm_img']['name'])) {
        $var_message = "Select image before!";
        $var_init = false;
    }  else {

      if (isset($_FILES['frm_img']['name'])) {
        // Untuk multiple upload
        /*
        ** Proses data ke product
        */
        $var_product = array(
          'product_id' => null,
          'product_price' => $var_price,
          'product_height' => $var_height,
          'product_weight' => $var_weight
        );
        insert($var_con, "oc_product", $var_product);

        /*
        ** Proses untuk memasukkan data ke deskripsi produk
        */
        $var_get_id = mysqli_insert_id($var_con);
        $var_product_desc = array(
          'product_name' => $var_name,
          'product_desc' => $var_desc,
          'product_id' => $var_get_id
        );
        insert($var_con, "oc_product_desc", $var_product_desc);

        foreach ($_FILES['frm_img']['tmp_name'] as $key => $tmp_name) {

        $var_img_name = addslashes($_FILES['frm_img']['name'][$key]);
        $var_img_temp = addslashes($_FILES['frm_img']['tmp_name'][$key]);
        $var_img_size = $_FILES['frm_img']['size'][$key];
        $var_img_type = strtolower(pathinfo($var_img_name, PATHINFO_EXTENSION));
        //$var_validate = getimagesize($var_img_size);
        $var_ext = array("jpeg", "png", "jpg");
        $var_dir = "uploaded/";
        $validate = true;

        if ($var_img_size > 2048000) {
          $var_message = "frm_image is bigger than 2 MB";
          $validate = false;
        } else

        if ($validate = false) {
          $var_message = "Operation to upload frm_image failure";
        } else {
          if (in_array($var_img_type, $var_ext) === true) {
            $var_new_name = "img-". rand(10000, 100000) . substr($var_frm_image_name, 0, -4) . '.' . $var_img_type;
            /* Proses upload ke gambar */
            if(move_uploaded_file($var_img_temp, $var_dir.$var_new_name)){

              /*
              ** Proses upload gambar ke database image
              */
              $var_data = array(
                'product_image_id' => null,
                'product_image_name' => $var_new_name,
                'product_image_path' => $var_dir.$var_new_name,
                'product_id' => $var_get_id
              );
              insert($var_con, "oc_product_image", $var_data);
            }
          }
        }
      }
    }
    }
  }
?>
