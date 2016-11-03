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
        $var_subdata2 = $var_data2['category_id'];
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
