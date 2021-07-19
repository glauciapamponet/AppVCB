<?php
    $servidor = "localhost";
    $usuario = "teste";
    $senha = "mysql";
    $dbname = "vcb";

    //Cria conexão
    $conex = mysqli_connect($servidor, $usuario, $senha, $dbname);

    //Check
    if (!$conex){
        die ("Falha na conexão: " . mysqli_connect_erro());
    }else{
        //echo "Conexão realizada";
    }
?>