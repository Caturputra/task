<div class="of-left">
  <h3 class="cate">CATEGORIES</h3>
</div>

<?php
  $var_sqlcat = "SELECT * FROM oc_category WHERE category_parent = 0";
  $var_querycat = mysqli_query($var_con, $var_sqlcat);
  foreach ($var_querycat as $var_data) {
    $var_subdata = $var_data['category_id'];
    echo "<ul class=\"menu\">";
      echo "<li class=\"item1\"> ";
        echo "<a href=\"#\">";
          echo $var_data['category_name'];
        echo "</a>";


      $var_sqlcat2 = "SELECT * FROM oc_category WHERE category_parent = '{$var_subdata}'";
      $var_querycat2 = mysqli_query($var_con, $var_sqlcat2);
      while ($var_data2 = mysqli_fetch_array($var_querycat2)) {
        $var_subdata2 = $var_data['category_id'];
        echo "<ul class=\"cute\">";
          echo "<li class=\"subitem1\">";
            echo "<a href=\"#\">";
              echo $var_data2['category_name'];
            echo "</a>";
          echo "</li>";
        echo "</ul>";
      }
      echo "</li>";
    echo "</ul>";
  }
?>


<!-- <?php

    $var_sqlcat = "SELECT * FROM oc_category WHERE category_parent = 0 ORDER BY category_name ASC";
    $var_querycat = mysqli_query($var_con, $var_sqlcat);
    foreach ($var_querycat as $data) {
    while ($var_data = mysqli_fetch_array($var_querycat)) {
      $var_subdata = $var_data['category_id'];
    ?>
    <ul class="menu">
      <?php
      $var_sqlcat2 = "SELECT * FROM oc_category WHERE category_parent = '{$var_subdata}' ORDER BY category_name ASC";
      $var_querycat2 = mysqli_query($var_con, $var_sqlcat2);

          ?>
          <li class="item1"><a href="#"><?= $var_data['category_name']; ?></a>
          <?php
        }
      ?>


    <?php
    $var_sqlsubcat = "SELECT * FROM oc_category WHERE category_parent = '{$var_subdata}'";
    $var_querysubcat = mysqli_query($var_con, $var_sqlsubcat);
      while ($var_data = mysqli_fetch_array($var_querysubcat)) {
        $var_subdata = $var_data['category_id'];
        ?>
        <ul class="cute">
          <li class="subitem1"><a href="<?= $var_data['category_id']?>"><?= $var_data['category_name'] ?></a></li>
        </ul>

    <?php
      }
    ?>
    </li>
  </ul>
      <?php
    }
?> -->
