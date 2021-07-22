<?php
    include_once("../conex.php");
    session_start();

    //Inserção em 'autores'
    $nomeaut = filter_input (INPUT_POST, 'autnome');

    $cad_aut = "INSERT INTO autores (nome) VALUES ('$nomeaut');";
    $result_aut = mysqli_query ($conex, $cad_aut);

    if(mysqli_insert_id($conex)){
        $_SESSION['msg'] = "Cadastro feito com sucesso!";
        header("Location: ../pages/cadLivro.php");
    } else{
        $_SESSION['erro'] = "ERRO";
        header("Location: ../pages/cadLivro.php");
    }
    
?>