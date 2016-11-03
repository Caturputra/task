<div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><i class="fa fa-th-list fa-lg"></i>Category List</h3>
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
            <a href="?page=category_add" class="btn btn-primary"><i class="fa fa-plus"> Category</i></a>
            <a href="" class="btn btn-danger"><i class="fa fa-trash"> Delete</i></a>
          </div>
          <br>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <th><input type="checkbox" name="frm_checkboxAll" value=""></th>
                <th>Category Name</th>
                <th>Sort Order</th>
                <th>Action</th>
              </thead>
              <tbody>
                <?php
                  require '../config.php';
                  /*
                  ** Untuk menampilkn category ke dalam table
                  */
                  $var_sql = "SELECT * FROM oc_category";
                  $var_query = mysqli_query($var_con, $var_sql);
                  while ($var_data = mysqli_fetch_array($var_query)) {
                ?>
                <tr>
                  <td><input type="checkbox" name="frm_checkboxId" value=""></td> <!-- Valuenya dari database> -->
                  <td><?= $var_data['category_name'] ?></td>
                  <td><?= $var_data['sort_order'] ?></td>
                  <td><a href="?page=category_update&cat_id=<?= $var_data['category_id']?>" class="btn btn-primary"><i class="fa fa-edit fa-lg"></i></a></td>
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
