<?php

    include 'PHP/conexaoBD.php';

    if(isset($_POST['excluir_jogo'])){
        $id_jogo = $_POST['id_jogo'];
        
        $sql = "DELETE FROM jogo_produto WHERE id_jogo = $id_jogo; DELETE FROM id_do_jogo WHERE id_jogo = $id_jogo;";

        if($conn->multi_query($sql)){
            echo "Jogo excluido, do id: $id_jogo";
        } else{
            echo "Erro ao excluir jogo". $conn->error;
        }
    }




?>