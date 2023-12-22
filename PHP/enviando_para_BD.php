<?php

    session_start();

    include "verificando_arquivos_BD.php";

    //Inserindo os valores no banco de dados

    // Inserindo os dados na tabela 'id_do_jogo'

    $sql = "INSERT INTO id_do_jogo (nome_do_jogo,platafornas,preco,desconto,imagem_do_jogo) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdis", $titulo_jogo, $plataformas, $preco, $desconto, $imagens);


    $id_jogo = $stmt->insert_id;

    // Inserindo dados na tabela produto
    $sql = "INSERT INTO jogo_produto (id_jogo, fundo_de_capa, categoria_jogo, idade_jogo, descricao_principal, descricao_total, espec_min_so, espec_min_hd, espec_min_cpu, espec_min_gpu, espec_min_DX, espec_rec_so, espec_rec_hd, espec_rec_cpu, espec_rec_gpu, espec_rec_DX) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isississsssssss", $id_jogo, $fundo_de_capa, $categoria, $idade, $descricaoP, $descricaoC, $espec_m_so, $espec_m_arm, $espec_m_cpu, $espec_m_gpu, $espec_m_DX, $espec_r_so, $espec_r_arm, $espec_r_cpu, $espec_r_gpu, $espec_r_DX);
   
    if($stmt->execute()){
        echo "Jogo inserido com sucesso!";
    } else {
        echo "Erro ao inserir jogo";
    }

?>
