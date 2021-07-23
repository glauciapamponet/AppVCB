<?php
    include_once("../conex.php");
    session_start();
    
    //Inserção em 'vendas'
    $nomerepr = filter_input (INPUT_POST, 'nomerepr', FILTER_SANITIZE_STRING);
    $cargo = filter_input (INPUT_POST, 'cargo');
    $emailrepr = filter_input (INPUT_POST, 'emailrepr');
    $telefonerepre = filter_input (INPUT_POST, 'telefonerepre', FILTER_SANITIZE_NUMBER_INT);
    $select_editora = filter_input(INPUT_POST, 'select_editora');


    $cad_rep = "INSERT INTO represedit (nomerepr, cargo, emailrepr, telefonerepre, idedit) VALUES ('$nomerepr', '$cargo', '$emailrepr', '$telefonerepre', '$select_editora');";
    $result_rep = mysqli_query ($conex, $cad_rep);

    if(mysqli_insert_id($conex)){
        $_SESSION['msg'] = "Cadastro feito com sucesso!";
        header("Location: ../pages/cadEdit.php");
    } else{
        $_SESSION['erro'] = "ERRO";
        header("Location: ../pages/cadEdit.php");
    }

?>