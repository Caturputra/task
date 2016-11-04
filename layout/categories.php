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
      echo "<ul class=\"menu\">";
      while ($var_data2 = mysqli_fetch_array($var_querycat2)) {
        $var_subdata2 = $var_data2['category_id'];
          echo "<li class=\"cute\">";
            echo "<a href=\"#\">";
              echo $var_data2['category_name'];
            echo "</a>";

            $var_sqlcat3 = "SELECT * FROM oc_category WHERE category_parent = '{$var_subdata2}'";
            $var_querycat3 = mysqli_query($var_con, $var_sqlcat3);
            echo "<ul class=\"kid-menu\">";

            while ($var_data3 = mysqli_fetch_array($var_querycat3)) {
              echo "<li class=\"cute\">";
                echo "<a href=\"#\">";
                  echo "<i class=\"fa fa-link\"></i> " . $var_data3['category_name'];
                echo "</a>";

            }
          echo "</ul>";
        echo "</li>";
      }
        echo "</ul>";
      echo "</li>";
    echo "</ul>";
  }
?>
