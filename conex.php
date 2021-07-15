<?php
    function conex ($user, $password){
        $host = "localhost";
        $usuario = $user;
        $senha = $password;
        $bd = "VCB";

        $mysqli = new mysqli($host, $usuario, $senha, $bd);
        if ($mysqli->connect_errno)
            return "Falha na conexão: (".$mysqli->connect_errno.")".$mysqli->connect_error;
        echo "Conexão foi tope"
    }
?>

<!-- Se tudo der errado 

define("HOST", "nomedohost");    #Para o host com o qual você quer se conectar.
define("USER", "nomedousuario");          #O nome de usuário para o banco de dados. 
define("PASSWORD", "senha");           #A senha do banco de dados. 
define("DATABASE", "bancodedados");       #O nome do banco de dados. 
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
-->