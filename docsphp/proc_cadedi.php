<?php
    include_once("../conex.php");

    //Inserção em 'editoras'
    $nomeedit = filter_input (INPUT_POST, 'nomeedit');

    $cad_edit = "INSERT INTO editoras (nomeedit) VALUES ('$nomeedit');";
    $result_edit = mysqli_query ($conex, $cad_edit);
    $pega_id = "SELECT ideditoras FROM editoras WHERE nomeedit= '$nomeedit'";
    $selectid = mysqli_query ($conex, $pega_id);
    $idedit = mysqli_fetch_array($selectid);

    //Inserção em 'edend'
    $logradouroedit = filter_input (INPUT_POST, 'logradouroedit');
    $numeroedit = filter_input (INPUT_POST, 'numeroedit', FILTER_SANITIZE_NUMBER_INT);
    $complemento = filter_input (INPUT_POST, 'complemento');
    $bairroedit = filter_input (INPUT_POST, 'bairroedit');
    $cidadeedit = filter_input (INPUT_POST, 'cidadeedit');
    $cepedit = filter_input (INPUT_POST, 'cepedit');
 
    if (!$complemento){
        $cad_endcli = "INSERT INTO edend (logradouroedit, numeroedit, bairroedit, cidadeedit, cepedit, idedit) VALUES ('$logradouroedit', '$numeroedit', '$bairroedit', '$cidadeedit', '$cepedit', '$idedit[ideditoras]');";    
    }else {
        $cad_endcli = "INSERT INTO edend (logradouroedit, numeroedit, complemento, bairroedit, cidadeedit, cepedit, idedit) VALUES ('$logradouroedit', '$numeroedit', '$complemento', '$bairroedit', '$cidadeedit', '$cepedit', '$idedit[ideditoras]');";    
    }
    $result_endcli = mysqli_query ($conex, $cad_endcli);

    //if(mysqli_insert_id($conex)){
    //    header("Location: ../pages/cadEdit.php");
    //}
    
    echo "logradouro: $logradouroedit <br>";
    echo "bairro: $bairroedit <br>";
    echo "cidade: $cidadeedit <br>";
?>