<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'vanessa_cad'

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName)

    if ($conexao->connect_errno)
    {
        echo "Erro";
    }
    else{
        echo "conexao efetuada com sucesso"
    }
?>