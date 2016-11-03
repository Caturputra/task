<?php include 'product_add_process.php'; ?>

<div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><i class="fa fa-edit fa-lg"></i>Add Product</h3>
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
          <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="frm_product_name" class="control-label col-sm-1">Name</label>
              <div class="col-sm-11">
                  <input type="text" class="form-control" id="frm_product_name" name="frm_product_name">
              </div>
            </div>

            <div class="form-group">
              <label for="frm_product_desc" class="control-label col-sm-1">Descripton</label>
              <div class="col-sm-11">
                  <textarea class="form-control" name="frm_product_desc" rows="8" cols="40"></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="frm_product_height" class="control-label col-sm-1">Height</label>
              <div class="col-sm-11">
                  <input type="text" class="form-control" id="frm_product_height" name="frm_product_height">
              </div>
            </div>

            <div class="form-group">
              <label for="frm_product_weight" class="control-label col-sm-1">Weight</label>
              <div class="col-sm-11">
                  <input type="text" class="form-control" id="frm_product_weight" name="frm_product_weight">
              </div>
            </div>

            <div class="form-group">
              <label for="frm_product_price" class="control-label col-sm-1">Price</label>
              <div class="col-sm-11">
                  <input type="text" class="form-control" id="frm_product_price" name="frm_product_price">
              </div>
            </div>

            <div class="form-group">
              <label for="frm_product_qty" class="control-label col-sm-1">Quantity</label>
              <div class="col-sm-11">
                  <input type="number" class="form-control" id="frm_product_qty" name="frm_product_qty">
              </div>
            </div>

            <div class="form-group">
              <label for="frm_img" class="control-label col-sm-1">File input</label>
              <div class="col-sm-11">
                <input type="file" id="frm_img" class="form-control" name="frm_img[]" multiple="multiple"><br/>
                <img src="" id="frm_preview" weight="100" height="100"/>
                <span class="help-block">Bisa memilih lebih dari satu gambar</span>
              </div>
            </div>

            <div class="form-group">
              <label for="frm_product_desc" class="control-label col-sm-1">Category</label>
              <div class="col-sm-11">
                  <select class="form-control" name="frm_product_category">
                  <?php
                    $var_sql = "SELECT category_parent FROM oc_category";
                    $var_querycat = mysqli_query($var_con, $var_sql);
                    while ($var_data = mysqli_fetch_array($var_querycat)) {
                  ?>
                    <option value="<?= $var_data['category_id']?>"><?= $var_data['category_name']?></option>
                    <?php } ?>
                  </select>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="panel-footer">
      <button type="submit" class="btn btn-primary" name="btn_insert_product">Insert</button>
      <a href="?page=product" class="btn btn-default" name="btn_cancel_cat">Cancel</a>
    </div>
  </form>
  </div>
