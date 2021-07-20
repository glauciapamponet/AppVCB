<?php
    include_once("../conex.php");

    //Inserção em 'clientes'
    $nomecli = filter_input (INPUT_POST, 'nomecli', FILTER_SANITIZE_STRING);
    $rgcli = filter_input (INPUT_POST, 'rgcli');
    $cpfcli = filter_input (INPUT_POST, 'cpfcli');
    $datanascim = filter_input (INPUT_POST, 'datanascim');

    $cad_cli = "INSERT INTO clientes (nomecli, rgcli, cpfcli, datanascim) VALUES ('$nomecli', '$rgcli', '$cpfcli', '$datanascim');";
    $result_cli = mysqli_query ($conex, $cad_cli);
    $pega_idcli = "SELECT idclientes FROM clientes WHERE nomecli= '$nomecli'";
    $selectid = mysqli_query ($conex, $pega_idcli);
    $idcli = mysqli_fetch_array($selectid);

    //Inserção em 'endclie'
    $logradourocli = filter_input (INPUT_POST, 'logradourocli');
    $numerocli = filter_input (INPUT_POST, 'numerocli', FILTER_SANITIZE_NUMBER_INT);
    $complementocli = filter_input (INPUT_POST, 'complementocli');
    $bairrocli = filter_input (INPUT_POST, 'bairrocli', FILTER_SANITIZE_STRING);
    $cidadecli = filter_input (INPUT_POST, 'cidadecli', FILTER_SANITIZE_STRING);
    $cepcli = filter_input (INPUT_POST, 'cepcli');

    if (!$complementocli){
        $cad_endcli = "INSERT INTO endclie (logradourocli, numerocli, bairrocli, cidadecli, cepcli, idclie) VALUES ('$logradourocli', '$numerocli', '$bairrocli', '$cidadecli', '$cepcli', '$idcli[idclientes]');";    
    }else {
        $cad_endcli = "INSERT INTO endclie (logradourocli, numerocli, complementocli, bairrocli, cidadecli, cepcli, idclie) VALUES ('$logradourocli', '$numerocli', '$complementocli', '$bairrocli', '$cidadecli', '$cepcli', '$idcli[idclientes]');";    
    }
    $result_endcli = mysqli_query ($conex, $cad_endcli);

    //Inserção em 'telecli'
    $dddcli = filter_input (INPUT_POST, 'dddcli');
    $numerotelcli = filter_input (INPUT_POST, 'numerotelcli');
    $tipotelcli = filter_input (INPUT_POST, 'tipotelcli');

    $cad_telcli = "INSERT INTO telecli (dddcli, numerocli, tipotelci, idcli) VALUES ('$dddcli', '$numerotelcli', '$tipotelcli', '$idcli[idclientes]');";
    $result_cli = mysqli_query ($conex, $cad_telcli);

    if(mysqli_insert_id($conex)){
        header("Location: ../pages/cadCli.php");
    }
    
    //echo "nome: $nomecli= <br>";
    //echo "rg: $rgcli <br>";
    //echo "cpf: $cpfcli <br>";
    //echo "data: $datanascim <br>";
?>