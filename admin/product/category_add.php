<?php
  if (isset($_POST['btn_add_cat'])) {
    $var_cat_name = validateSecurity($_POST['frm_cat_name']);
    $var_cat_parent = validateSecurity($_POST['frm_cat_parent']);

    if (empty($var_cat_name)) {
      $var_message = "Name of category cannot Blank!";
    }
  }
?>

<div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Add Category</h3>
    </div>
    <div class="panel-body">
      <div clas="row">
        <div class="col-sm-8">
          <?php if ( isset($var_message) ) : ?>
            <div class="alert alert-warning">
              <i class="fa fa-warning fa-lg"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong><?= $var_message; ?></strong>
            </div>
          <?php endif; ?>
          <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="frm_cat_name" class="control-label col-sm-2">Name</label>
              <div class="col-sm-6">
                  <input type="text" class="form-control" id="frm_cat_name" name="frm_cat_name">
              </div>
            </div>

            <div class="form-group">
              <label for="frm_cat_parent" class="control-label col-sm-2">Category</label>
              <div class="col-sm-6">
                  <select class="form-control" name="frm_cat_parent" id="frm_cat_parent">
                    <option value=""></option>
                  </select>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="panel-footer">
      <button type="submit" class="btn btn-primary" name="btn_add_cat">Insert</button>
    </div>
  </form>
  </div>
