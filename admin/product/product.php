<div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><i class="fa fa-th-list fa-lg"></i>Product List</h3>
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
          <div class="align-right">
            <a href="?page=product_add" class="btn btn-primary"><i class="fa fa-plus"> Product</i></a>
            <a href="" class="btn btn-danger"><i class="fa fa-trash"> Delete</i></a>
          </div>
          <br>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="align-center">
                <th><input type="checkbox" name="frm_checkboxId"></th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
              </thead>
              <tbody>
                <?php
                  require '../config.php';
                  /*
                  ** Untuk menampilkn product ke dalam table
                  */
                  $var_sql = "SELECT * FROM oc_product p JOIN oc_product_desc d on d.product_id = p.product_id JOIN oc_product_image i ON i.product_id = p.product_id GROUP BY i.product_id ORDER BY p.product_id ASC ";
                  $var_query = mysqli_query($var_con, $var_sql);
                  while ($var_data = mysqli_fetch_array($var_query)) {
                ?>
                <tr>
                  <td><input type="checkbox" name="frm_checkboxId" value="<?= $var_data['product_id']; ?>"></td>
                  <td><img class="img-responsive" width="50" height="100" src="../admin/<?= $var_data['product_image_path']; ?>" alt="<?= $var_data['product_image_name']; ?>" /></td>
                  <td><?= $var_data['product_name']; ?></td>
                  <td><?= number_format($var_data['product_price'],0,",","."); ?></td>
                  <td><?= $var_data['qty']; ?></td>
                  <td><a href="?page=product_update&product_id=<?= $var_data['product_id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </form>
  </div>
