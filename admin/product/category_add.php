<?php
  require '../config.php';

  if (isset($_POST['btn_add_cat'])) {
    $var_cat_name = validateSecurity($_POST['frm_cat_name']);
    $var_cat_desc = validateSecurity($_POST['frm_cat_desc']);
    $var_cat_parent = validateSecurity($_POST['frm_cat_parent']);
    $var_cat_order = validateSecurity($_POST['frm_cat_order']);

    var_dump($var_cat_parent);

    if (empty($var_cat_name)) {
      $var_message = "We need category name.";
    }

    if (strlen($var_cat_name) > 32) {
      $var_message = "Category name must between 1 > 32.";
    }

    if (!empty($var_cat_name) && !empty($var_cat_parent)) {
      if ($var_cat_parent = 0) {
        $var_data = array(
          'category_name' => $var_cat_name,
          'category_parent' => $var_cat_parent,
          'category_desc' => $var_cat_desc,
          'sort_order' => $var_cat_order
        );
        if(insert($var_con, "oc_category", $var_data)) {
          echo '<script>
          var conn=confirm("Data is inserted.");
          if(conn==true){
               window.location.assign("?page=category");
          }
          </script>';
        } else {
          $var_message = "Data not inserted.";
        }
      } else {
        $var_data = array(
          'category_name' => $var_cat_name,
          'category_parent' => $var_cat_parent,
          'category_desc' => $var_cat_desc,
          'sort_order' => $var_cat_order
        );
        if(insert($var_con, "oc_category", $var_data)) {
          echo '<script>
          var conn=confirm("Data is inserted.");
          if(conn==true){
               window.location.assign("?page=category");
          }
          </script>';
        } else {
          $var_message = "Data not inserted.";
        }
      }
    }
  }
?>

<div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><i class="fa fa-edit fa-lg"></i>Add Category</h3>
    </div>
    <div class="panel-body">
      <div clas="row">
        <div class="col-sm-12">
          <?php if ( isset($var_message) ) : ?>
            <div class="alert alert-warning">
              <i class="fa fa-warning fa-lg"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong><?= $var_message; ?></strong>
            </div>
          <?php endif; ?>

          <form action="" class="form-horizontal" method="POST">
            <div class="form-group">
              <label for="frm_cat_name" class="control-label col-sm-1"><i class="fa fa-share-square-o"></i>Name</label>
              <div class="col-sm-11">
                <input type="text" class="form-control" id="frm_cat_name" name="frm_cat_name">
              </div>
            </div>

            <div class="form-group">
              <label for="frm_cat_desc" class="control-label col-sm-1">Description</label>
              <div class="col-sm-11">
                <textarea class="form-control" name="frm_cat_desc" id="frm_cat_desc" rows="8" cols="40"></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="frm_cat_parent" class="control-label col-sm-1">Parent</label>
              <div class="col-sm-11">
                <select class="form-control" name="frm_cat_parent" id="frm_cat_parent">
                  <option value="0">None</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="frm_cat_parent" class="control-label col-sm-1">Sort Order</label>
              <div class="col-sm-11">
                <input type="number" class="form-control" name="frm_cat_order" value="">
              </div>
            </div>

        </div> <!-- end panel body -->
      </div>
    </div>
    <div class="panel-footer">
      <button type="submit" class="btn btn-primary" name="btn_add_cat">Insert</button>
      <a href="?page=category" class="btn btn-default" name="btn_cancel_cat">Cancel</a>
    </form>
    </div>
  </form>
  </div>
