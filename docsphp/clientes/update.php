<?php
$connect = mysqli_connect("localhost", "teste", "mysql", "vcb1");

// echo "$_POST[id]";

if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 if($_POST["column_name"] == 'dddcli' || $_POST["column_name"] == 'numerocli' || $_POST["column_name"] == 'tipotelci'){
   $query = "UPDATE telecli SET ".$_POST["column_name"]."='".$value."' WHERE idcli = '".$_POST["id"]."'";
 }
 else{
   $query = "UPDATE clientes SET ".$_POST["column_name"]."='".$value."' WHERE idclientes = '".$_POST["id"]."'";
 }

 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
}
?>
