<?php


    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bdname = "games_fake";
    
    $conn = mysqli_connect($servidor,$usuario,$senha,$bdname);

    if ($conn->connect_error) {
        echo "Conexão falhou!";
    }
    
?>
