<?php
$connect = mysqli_connect("localhost", "teste", "mysql", "vcb");

// echo "$_POST";

if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 if($_POST["column_name"] == 'corredorestoque'){
   $query = "UPDATE estoquista SET ".$_POST["column_name"]."='".$value."' WHERE funcionarios_idfuncionarios = '".$_POST["id"]."'";
 }
 elseif ($_POST["column_name"] == 'comissaovend') {
   $query = "UPDATE vendedor SET ".$_POST["column_name"]."='".$value."' WHERE funcionarios_idfuncionarios = '".$_POST["id"]."'";
 }else{
   $query = "UPDATE funcionarios SET ".$_POST["column_name"]."='".$value."' WHERE idfuncionarios = '".$_POST["id"]."'";
 }

 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
}
?>
