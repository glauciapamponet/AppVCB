<?php
    include_once("../conex.php");

    //Inserção em 'represedit'
    $nomerepr = filter_input (INPUT_POST, 'nomerepr', FILTER_SANITIZE_STRING);
    $cargo = filter_input (INPUT_POST, 'cargo');
    $emailrepr = filter_input (INPUT_POST, 'emailrepr');
    $telefonerepre = filter_input (INPUT_POST, 'telefonerepre', FILTER_SANITIZE_NUMBER_INT);
    $select_editora = filter_input(INPUT_POST, 'select_editora');


    $cad_rep = "INSERT INTO represedit (nomerepr, cargo, emailrepr, telefonerepre, idedit) VALUES ('$nomerepr', '$cargo', '$emailrepr', '$telefonerepre', '$select_editora');";
    $result_rep = mysqli_query ($conex, $cad_rep);

    if(mysqli_insert_id($conex)){
        header("Location: ../pages/cadCli.php");
    }
    echo "nomerepr: $nomerepr <br>";
    echo "cargo: $cargo <br>";
    echo "emailrepr: $emailrepr <br>";
    echo "telefonerepre: $telefonerepre <br>";
    echo "editora: $select_editora <br>";
    
?>