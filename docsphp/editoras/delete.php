<?php
$connect = mysqli_connect("localhost", "teste", "mysql", "vcb");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM editoras WHERE ideditoras = '".$_POST["id"]."'";

 if(mysqli_query($connect, $query))
 {
  echo 'Deletado!';
 }
}
?>