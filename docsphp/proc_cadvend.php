<?php
    include_once("../conex.php");
    session_start();
    
    //Inserção em 'vendas'
    $idvend = filter_input (INPUT_POST, "select_vendedor");
    $idcliente = filter_input (INPUT_POST, "select_cliente");
    $idcaixa = filter_input (INPUT_POST, "select_caixa");
    $tipopag = filter_input (INPUT_POST, "tipopag");
    
    $cad_func = "INSERT INTO vendas (idvend, idcliente, idcaixa, dataehora, tipopag) VALUES ('$idvend', '$idcliente', '$idcaixa', NOW(), '$tipopag');";
    //$result_func = mysqli_query ($conex, $cad_func);

    echo $cad_func;

    if(mysqli_insert_id($conex)){
        $_SESSION['msg'] = "Cadastro feito com sucesso!";
    } else{
        $_SESSION['erro'] = "ERRO";
    }
    //header("Location: ../pages/cadVen.php");

?>