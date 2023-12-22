<?php

include 'salvar_variaveis.php';
include 'conexaoBD.php';

session_start();

// Inserção na tabela id_do_jogo
$sql_id_do_jogo = "INSERT INTO id_do_jogo (nome_do_jogo, plataformas, preco, desconto, imagem_do_jogo) VALUES ('$nome_do_jogo', '$plataformas', '$preco', '$desconto', '$imagem_jogo')";

if(mysqli_query($conn, $sql_id_do_jogo)){

    $id_jogo = mysqli_insert_id($conn);

    // Inserção na tabela jogo_produto
    $sql_jogo_produto = "INSERT INTO jogo_produto (id_jogo, fundo_de_capa, ytb_jogo, ytb_jogo_imagem, imagens_do_jogo, idade_jogo, descricao_idade, categoria_jogo, descricao_principal, descricao_total, espec_min_so, espec_min_hd, espec_min_cpu, espec_min_ram, espec_min_gpu, espec_min_DX, espec_rec_so, espec_rec_hd, espec_rec_cpu, espec_rec_ram, espec_rec_gpu, espec_rec_DX, quantidade_de_jogos, idiomas_audio, idiomas_texto) VALUES ('$id_jogo', '$fundo_de_capa', '$ytb_jogo', '$ytb_jogo_imagem', '$imagens_do_jogo', '$idade_jogo', '$descricao_idade', '$categoria_jogo', '$descricao_principal', '$descricao_total', '$espec_min_so', '$espec_min_hd', '$espec_min_cpu', '$espec_min_mem', '$espec_min_gpu', '$espec_min_DX', '$espec_rec_so', '$espec_rec_hd', '$espec_rec_cpu', '$espec_rec_mem', '$espec_rec_gpu', '$espec_rec_DX', '$quantidade_de_jogos', '$idiomas_audio', '$idiomas_texto')";
    
    if(mysqli_query($conn, $sql_jogo_produto)){
        echo "Inserido com sucesso, pressione voltar para";   
    } else {
        echo "Erro ao inserir na tabela jogo_produto: " . mysqli_error($conn);
    }
} else{
    echo "Erro ao inserir na tabela id_do_jogo: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
