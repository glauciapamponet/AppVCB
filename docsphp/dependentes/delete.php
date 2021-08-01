<?php
$connect = mysqli_connect("localhost", "teste", "mysql", "vcb1");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM dependentes WHERE iddependente = '".$_POST["id"]."'";

 if(mysqli_query($connect, $query))
 {
  echo 'Deletado!';
 }
}
?>
