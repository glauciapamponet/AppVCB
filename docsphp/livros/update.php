<?php
$connect = mysqli_connect("localhost", "teste", "mysql", "vcb1");

// echo "$_POST[id]";

if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
   $query = "UPDATE livros SET ".$_POST["column_name"]."='".$value."' WHERE idlivros = '".$_POST["id"]."'";

 if(mysqli_query($connect, $query)){
  echo 'Atualizado!';
 }
}
?>
