<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'gimenez2008@';
    $dbName = 'formulariohiago';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    /*if($conexao->connect_errno) {
        echo "Erooooo";
    } 
    else {
        echo "Conexão feita";
    }*/
?>