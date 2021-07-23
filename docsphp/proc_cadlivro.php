<?php
    include_once("../conex.php");
    session_start();

    //Inserção em 'livros'
    $nomelivro = filter_input (INPUT_POST, 'nomelivro');
    $precolivro = filter_input (INPUT_POST, 'precolivro');
    $qtdpaglivro = filter_input (INPUT_POST, 'qtdpaglivro', FILTER_SANITIZE_NUMBER_INT);
    $anolanclivro = filter_input (INPUT_POST, 'anolanclivro', FILTER_SANITIZE_NUMBER_INT);
    $qtdestoque = filter_input (INPUT_POST, 'qtdestoque', FILTER_SANITIZE_NUMBER_INT);
    $pesounitkg = filter_input (INPUT_POST, 'pesounitkg');
    $idedit = filter_input (INPUT_POST, 'select_editora');

    $cad_livro = "INSERT INTO livros (nomelivro, precolivro, qtdpaglivro, anolanclivro, idedit, capalivro, qtdestoque, pesounitkg) 
                VALUES ('$nomelivro', '$precolivro', '$qtdpaglivro', '$anolanclivro', '$idedit', '1', '$qtdestoque', '$pesounitkg');";
    //echo "$cad_livro";
    $result_livro = mysqli_query ($conex, $cad_livro);

    $pega_id = "SELECT idlivros FROM livros ORDER BY idlivros DESC LIMIT 1";
    $selectid = mysqli_query ($conex, $pega_id);
    $id = mysqli_fetch_array($selectid);

    //Inserção em 'livroscateg'
    foreach ($_POST['select_genero'] as $genero){
        $cad_livroscateg = "INSERT INTO livroscateg (idlivro, idgenero) VALUES ('$id[idlivros]','$genero')";
        $result_livroscateg = mysqli_query ($conex, $cad_livroscateg);
    }
       
    
    //Inserção em 'autlivrs'
    foreach ($_POST['select_autores'] as $autores){
        $cad_autlivrs = "INSERT INTO autlivrs (idlivro, idautor) VALUES ('$id[idlivros]','$autores')";
        $result_autlivrs = mysqli_query ($conex, $cad_autlivrs);
    }

    #echo "autores: $autores, genero: $genero";
    //Inserção em 'locestoque'
    $corredor = filter_input (INPUT_POST, 'corredor');
    $estante = filter_input (INPUT_POST, 'estante');
    $cad_locestoque = "INSERT INTO locestoque (idlivro, corredorest, estanteest) VALUES ('$id[idlivros]','$corredor', '$estante')";
    $result_locestoque = mysqli_query ($conex, $cad_locestoque);

    if(mysqli_insert_id($conex)){
        $_SESSION['msg'] = "Cadastro feito com sucesso!";
        header("Location: ../pages/cadLivro.php");
    } else{
        $_SESSION['erro'] = "ERRO";
        header("Location: ../pages/cadLivro.php");
    }
    
    //echo "logradouro: $logradouroedit <br>";
    //echo "bairro: $bairroedit <br>";
    //echo "cidade: $cidadeedit <br>";
?>