<?php

include 'conexaoBD.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Variáveis individuais
    $nome_do_jogo = $_POST['nome_do_jogo'];
    $imagem_jogo = $_POST['imagem_jogo'];
    $ytb_jogo = $_POST['ytb_jogo'];
    $ytb_jogo_imagem = $_POST['ytb_jogo_imagem'];
    $fundo_de_capa = $_POST['fundo_de_capa'];
    $preco = $_POST['preco'];
    $desconto = $_POST['desconto'];
    $idade_jogo = $_POST['idade_jogo'];
    $descricao_principal = $_POST['descricaoP'];
    $descricao_total = $_POST['descricaoC'];
    $espec_min_so = $_POST['espec_m_so'];
    $espec_min_hd = $_POST['espec_m_hd'];
    $espec_min_cpu = $_POST['espec_m_cpu'];
    $espec_min_mem = $_POST['espec_m_mem'];
    $espec_min_gpu = $_POST['espec_m_gpu'];
    $espec_min_DX = $_POST['espec_m_DX'];
    $espec_rec_so = $_POST['espec_r_so'];
    $espec_rec_hd = $_POST['espec_r_hd'];
    $espec_rec_cpu = $_POST['espec_r_cpu'];
    $espec_rec_mem = $_POST['espec_r_mem'];
    $espec_rec_gpu = $_POST['espec_r_gpu'];
    $espec_rec_DX = $_POST['espec_r_DX'];
    $idiomas_audio = $_POST['idiomas_audio'];
    $idiomas_texto = $_POST['idiomas_texto'];
    $quantidade_de_jogos = $_POST['quantidade_de_jogos'];

    // Arrays
    $plataformas = implode(", ", $_POST['plataformas']);
    $imagens_do_jogo = implode(", ", $_POST['imagens_do_jogo']);
    $categoria_jogo = implode(", ", $_POST['categoria_jogo']);
    $descricao_idade = implode(", ", $_POST['descricao_idade']);

    if (is_array($_POST['imagens_do_jogo'])) {
        $imagens_jogo = array();

        foreach ($_POST['imagens_do_jogo'] as $imagem) {
            $imagens_jogo[] = mysqli_real_escape_string($conn, $imagem);
        }

        $imagens_jogo = implode(", ", $imagens_jogo);
    } else {
        $imagens_jogo = "Erro ao processar os links de imagem.";
    }



}


?>