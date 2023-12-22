<?php
include 'salvar_variaveis.php';
include 'conexaoBD.php';

session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
echo $id;

// Atualização na tabela id_do_jogo
$sql_id_do_jogo = "UPDATE id_do_jogo 
                   SET nome_do_jogo = '$nome_do_jogo', 
                       plataformas = '$plataformas', 
                       preco = '$preco', 
                       desconto = '$desconto', 
                       imagem_do_jogo = '$imagem_jogo' 
                   WHERE id_jogo = $id";

// Inserção na tabela jogo_produto ou atualização se a chave existir
$sql_jogo_produto = "INSERT INTO jogo_produto (id_jogo, fundo_de_capa, ytb_jogo, ytb_jogo_imagem, imagens_do_jogo, idade_jogo, descricao_idade, categoria_jogo, descricao_principal, descricao_total, espec_min_so, espec_min_hd, espec_min_cpu, espec_min_ram, espec_min_gpu, espec_min_DX, espec_rec_so, espec_rec_hd, espec_rec_cpu, espec_rec_ram, espec_rec_gpu, espec_rec_DX, quantidade_de_jogos, idiomas_audio, idiomas_texto)
                    VALUES ('$id', '$fundo_de_capa', '$ytb_jogo', '$ytb_jogo_imagem', '$imagens_do_jogo', '$idade_jogo', '$descricao_idade', '$categoria_jogo', '$descricao_principal', '$descricao_total', '$espec_min_so', '$espec_min_hd', '$espec_min_cpu', '$espec_min_mem', '$espec_min_gpu', '$espec_min_DX', '$espec_rec_so', '$espec_rec_hd', '$espec_rec_cpu', '$espec_rec_mem', '$espec_rec_gpu', '$espec_rec_DX', '$quantidade_de_jogos', '$idiomas_audio', '$idiomas_texto')
                    ON DUPLICATE KEY UPDATE
                    fundo_de_capa = '$fundo_de_capa',
                    ytb_jogo = '$ytb_jogo',
                    ytb_jogo_imagem = '$ytb_jogo_imagem',
                    imagens_do_jogo = '$imagens_do_jogo',
                    idade_jogo = '$idade_jogo',
                    descricao_idade = '$descricao_idade',
                    categoria_jogo = '$categoria_jogo',
                    descricao_principal = '$descricao_principal',
                    descricao_total = '$descricao_total',
                    espec_min_so = '$espec_min_so',
                    espec_min_hd = '$espec_min_hd',
                    espec_min_cpu = '$espec_min_cpu',
                    espec_min_ram = '$espec_min_mem',
                    espec_min_gpu = '$espec_min_gpu',
                    espec_min_DX = '$espec_min_DX',
                    espec_rec_so = '$espec_rec_so',
                    espec_rec_hd = '$espec_rec_hd',
                    espec_rec_cpu = '$espec_rec_cpu',
                    espec_rec_ram = '$espec_rec_mem',
                    espec_rec_gpu = '$espec_rec_gpu',
                    espec_rec_DX = '$espec_rec_DX',
                    quantidade_de_jogos = '$quantidade_de_jogos',
                    idiomas_audio = '$idiomas_audio',
                    idiomas_texto = '$idiomas_texto'";

if(mysqli_query($conn, $sql_id_do_jogo) && mysqli_query($conn, $sql_jogo_produto)){
    echo "Operação concluída com sucesso!";
} else {
    echo "Erro ao realizar a operação: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
