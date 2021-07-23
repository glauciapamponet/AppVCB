<?php
$connect = mysqli_connect("localhost", "teste", "mysql", "vcb");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM vendas WHERE idvendas = '".$_POST["id"]."'";

 if(mysqli_query($connect, $query))
 {
  echo 'Deletado!';
 }
}
?>
