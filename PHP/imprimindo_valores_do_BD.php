<?php

    include 'conexaoBD.php';

    function imprimir_o_icone_do_jogo() {

        $sql_consulta = "SELECT * FROM id_do_jogo";
        $conn = $mysqli->query ($sql_consulta) or die (mysqli->error);
    }

?>