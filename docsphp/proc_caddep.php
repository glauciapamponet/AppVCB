<?php
    include_once("../conex.php");
    session_start();

    //Inserção em 'depententes'
    $nome = filter_input (INPUT_POST, 'nome');
    $datanasc = filter_input (INPUT_POST, 'datanasc');
    $relacao = filter_input (INPUT_POST, 'relacao');
    $idfunc = filter_input (INPUT_POST, 'select_funcionario');
    
    $cad_dep = "INSERT INTO dependentes (nome, datanasc, relacao, idfunc) VALUES ('$nome', '$datanasc', '$relacao', '$idfunc');";
    $result_dep = mysqli_query ($conex, $cad_dep);
    //echo "nome: $nome, data: $datanasc, relacao: $relacao, idfunc: $idfunc ";

    if(mysqli_insert_id($conex)){
        $_SESSION['msg'] = "Cadastro feito com sucesso!";
        header("Location: ../pages/cadDep.php");
    } else{
        $_SESSION['erro'] = "ERRO";
        header("Location: ../pages/cadDep.php");
    }
    
    //echo "logradouro: $logradouroedit <br>";
    //echo "bairro: $bairroedit <br>";
    //echo "cidade: $cidadeedit <br>";
?>