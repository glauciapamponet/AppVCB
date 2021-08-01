<?php
$connect = mysqli_connect("localhost", "teste", "mysql", "vcb1");

// echo "$_POST[id]";

if(isset($_POST["id"]))
{
  $value = mysqli_real_escape_string($connect, $_POST["value"]);
  $query = "UPDATE dependentes SET ".$_POST["column_name"]."='".$value."' WHERE iddependente = '".$_POST["id"]."'";

 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
}
?>
