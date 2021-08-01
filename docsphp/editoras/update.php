<?php
$connect = mysqli_connect("localhost", "teste", "mysql", "vcb1");

// echo "$_POST";

if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 if($_POST["column_name"] == 'nomeedit'){
   $query = "UPDATE editoras SET ".$_POST["column_name"]."='".$value."' WHERE ideditoras = '".$_POST["id"]."'";
 }
 else{
   $query = "UPDATE represedit SET ".$_POST["column_name"]."='".$value."' WHERE idrepresedit = '".$_POST["id"]."'";
 }

 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
}
?>
