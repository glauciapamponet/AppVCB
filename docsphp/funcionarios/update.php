<?php
$connect = mysqli_connect("localhost", "teste", "mysql", "vcb");

// echo "$_POST[id]";

if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 if($_POST["column_name"] == 'corredorestoque'){
   $query = "UPDATE estoquista SET ".$_POST["column_name"]."='".$value."' WHERE funcionarios_idfuncionarios = '".$_POST["id"]."'";
 }
 elseif ($_POST["column_name"] == 'comissaovend') {
   $query = "UPDATE vendedor SET ".$_POST["column_name"]."='".$value."' WHERE funcionarios_idfuncionarios = '".$_POST["id"]."'";
 }
 elseif ($_POST["column_name"] == 'nomecargo') {
   $resultado_cargos = mysqli_query($connect, "SELECT idcargo FROM cargos WHERE nomecargo = '".$value."'");
   $row_cargo = mysqli_fetch_assoc($resultado_cargos);
   $query = "UPDATE funcionarios SET idcargo='".$row_cargo["idcargo"]."' WHERE idfuncionarios = '".$_POST["id"]."'";
  }
  elseif ($_POST["column_name"] == 'nome') {
    $resultado_turnos = mysqli_query($connect, "SELECT idturno FROM turnos WHERE nome = '".$value."'");
    $row_turnos = mysqli_fetch_assoc($resultado_turnos);
    $query = "UPDATE funcionarios SET idturno='".$row_turnos["idturno"]."' WHERE idfuncionarios = '".$_POST["id"]."'";
 }
 else{
   $query = "UPDATE funcionarios SET ".$_POST["column_name"]."='".$value."' WHERE idfuncionarios = '".$_POST["id"]."'";
 }

 if(mysqli_query($connect, $query))
 {
   echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
   echo "javascript:window.location='../../pages/funcionarios.php';</script>";

 }
 else{
   echo "Não deu não...";
 }
}
?>
