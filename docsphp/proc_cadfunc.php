<?php
    include_once("../conex.php");
    session_start();

    //Inserção em 'funcionarios'
    $nomefunc = filter_input (INPUT_POST, 'nomefunc', FILTER_SANITIZE_STRING);
    $RGfunc = filter_input (INPUT_POST, 'RGfunc');
    $cpffunc = filter_input (INPUT_POST, 'cpffunc');
    $foto = filter_input (INPUT_POST, 'foto');
    $cargo = filter_input (INPUT_POST, 'cargo');
    $turno = filter_input (INPUT_POST, 'turno');

    //idfuncionarios, nomefunc, RGfunc, cpffunc, foto, idcargo, idturno
    $cad_func = "INSERT INTO funcionarios (nomefunc, RGfunc, cpffunc, foto, idcargo, idturno) VALUES ('$nomefunc', '$RGfunc', '$cpffunc', '1', $cargo, $turno);";
    $result_func = mysqli_query ($conex, $cad_func); //certo, mas testar dnv
    $pega_idfunc = "SELECT idfuncionarios FROM funcionarios ORDER BY idfuncionarios DESC LIMIT 1";
    $selectid = mysqli_query ($conex, $pega_idfunc);
    $idfunc = mysqli_fetch_array($selectid);

    //Inserção em 'vendedor' ou 'estoquista'
    
    if ($cargo==3){
        $corredorestoque = filter_input (INPUT_POST, 'corredorestoque');
        $cad_cargo = "INSERT INTO estoquista (funcionarios_idfuncionarios, corredorestoque) VALUES ('$idfunc[idfuncionarios]', '$corredorestoque');";    
        //$result_cargo = mysqli_query ($conex, $cad_cargo);
    }else if ($cargo==4){ 
        $comissaovend = filter_input (INPUT_POST, 'comissaovend');
        $cad_cargo = "INSERT INTO vendedor (funcionarios_idfuncionarios, comissaovend) VALUES ('$idfunc[idfuncionarios]', '$comissaovend');";    
        //$result_cargo = mysqli_query ($conex, $cad_cargo);
    }


    //Inserção em 'endfunc'
    $logradourofunc = filter_input (INPUT_POST, 'logradourofunc');
    $numerofunc = filter_input (INPUT_POST, 'numerofunc', FILTER_SANITIZE_NUMBER_INT);
    $complemento = filter_input (INPUT_POST, 'complemento');
    $bairrofunc = filter_input (INPUT_POST, 'bairrofunc', FILTER_SANITIZE_STRING);
    $cidadefunc = filter_input (INPUT_POST, 'cidadefunc', FILTER_SANITIZE_STRING);
    $cepfunc = filter_input (INPUT_POST, 'cepfunc');

    if (!$complemento){
        $cad_endfunc = "INSERT INTO endfunc (logradourofunc, numerofunc, bairrofunc, cidadefunc, cepfunc, idfunc) VALUES ('$logradourofunc', '$numerofunc', '$bairrofunc', '$cidadefunc', '$cepfunc', '$idfunc[idfuncionarios]');";    
    }else {
        $cad_endfunc = "INSERT INTO endfunc (logradourofunc, numerofunc, complemento, bairrofunc, cidadefunc, cepfunc, idfunc) VALUES ('$logradourofunc', '$numerofunc', '$complemento', '$bairrofunc', '$cidadefunc', '$cepfunc', '$idfunc[idfuncionarios]');";    
    }
    //$result_endfunc = mysqli_query ($conex, $cad_endfunc);

    //Inserção em 'telefunc'
    $dddfunc = filter_input (INPUT_POST, 'dddfunc');
    $numerotelfunc = filter_input (INPUT_POST, 'numerofunc');
    $tipo = filter_input (INPUT_POST, 'tipotelcli');

    if($tipo==1){
        $tipo="Celular";
    }else{
        $tipo="Fixo";
    }

    echo "<br>$tipo<br>";
    $cad_telfunc = "INSERT INTO telefunc (dddfunc, numerofunc, tipotelefunc, idfunc) VALUES ('$dddfunc', '$numerotelfunc', '$tipo', '$idfunc[idfuncionarios]');";
    $result_func = mysqli_query ($conex, $cad_telfunc);

    if(mysqli_insert_id($conex)){
        $_SESSION['msg'] = "Cadastro feito com sucesso!";
    } else{
        $_SESSION['erro'] = "ERRO";
    }
    header("Location: ../pages/cadFunc.php");
    
    echo "cad_func: $cad_func <br>";
    echo "cad_cargo: $cad_cargo <br>";
    echo "cad_endfunc: $cad_endfunc <br>";
    echo "cad_telfunc: $cad_telfunc <br>";


?>