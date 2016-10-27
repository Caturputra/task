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

  /*
  ** Fungsi untuk input data
  */
  function insert($connection, $tblname, array $val_cols){

		$keysString = implode(", ", array_keys($val_cols));

		// print key and value for the array
		$i=0;
		foreach($val_cols as $key=>$value) {
			$StValue[$i] = "'".$value."'";
		    $i++;
		}

		$StValues = implode(", ",$StValue);

		if (mysqli_connect_errno()) {
		  $var_message =  "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		if(mysqli_query($connection,"INSERT INTO $tblname ($keysString) VALUES ($StValues)"))
		{
			$var_message =  "Successfully Inserted data<br>";
		}
		else{
			$var_message =  "Data not Inserted";
		}
	}

  /*
  ** Fungsi untuk update data
  */
  function update($connection, $tblname, array $set_val_cols, array $cod_val_cols){

		$i=0;
		foreach($set_val_cols as $key=>$value) {
			$set[$i] = $key." = '".$value."'";
		    $i++;
		}

		$Stset = implode(", ",$set);

		$i=0;
		foreach($cod_val_cols as $key=>$value) {
			$cod[$i] = $key." = '".$value."'";
		    $i++;
		}

		$Stcod = implode(" AND ",$cod);

		if(mysqli_query($connection,"UPDATE $tblname SET $Stset WHERE $Stcod")){
			if(mysqli_affected_rows($connection)){
				$var_message =  "Data updated successfully<br>";
			}
			else{
				$var_message =  "The data you want to updated is no loger exists<br>";
			}
		}
		else{
			$var_message =  "Error updating record: " . mysqli_error($conn);
		}
	}

  /*
  ** Fungsi untuk hapus data
  */
  function delete($connection, $tblname, array $val_cols){

    $i=0;
    foreach($val_cols as $key=>$value) {
        $exp[$i] = $key." = '".$value."'";
        $i++;
    }

    $Stexp = implode(" AND ",$exp);

    if(mysqli_query($connection,"DELETE FROM $tblname WHERE $Stexp")){
        if(mysqli_affected_rows($connection)){
            $var_message =  "Data has been deleted successfully<br>";
        }
        else{
            $var_message =  "The data you want to delete is no loger exists<br>";
        }
    }
    else{
        $var_message =  "Error deleting data: " . mysqli_error($connection);
    }
  }

  /*
  ** Fungsi untuk ambil data
  */
  function fetch($connection, $table, array $columns){
    $columns = implode(",",$columns);
    $result = mysqli_query($connection, "SELECT $columns FROM $table");

    if(mysqli_connect_errno())
      {
      $var_message =  "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    //return tow dimentional array as required columns result
    return mysqli_fetch_all($result,MYSQLI_ASSOC);
   }
?>
