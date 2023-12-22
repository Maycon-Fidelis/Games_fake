    <?php


    include 'PHP/conexaoBD.php';

    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    $uri = $_SERVER['REQUEST_URI'];

    $url = $protocol . "://" . $host . $uri;

    $padrao = '/\?([^?]+)\?/'; // Expressão regular corrigida

    if (preg_match($padrao, $url, $matches)) {
        $valor_desejado = $matches[1];
    }

    $sql = "SELECT * FROM id_do_jogo JOIN jogo_produto ON id_do_jogo.id_jogo = jogo_produto.id_jogo WHERE id_do_jogo.id_jogo = $valor_desejado";

    $result = $conn->query($sql);

    if ($result) {
        while ($linha = $result->fetch_assoc()) {
            $nome_do_jogo = $linha['nome_do_jogo'];
            $plataformas = $linha['plataformas'];
            $preco = $linha['preco'];
            $desconto = $linha['desconto'];
            $ytb_jogo = $linha['ytb_jogo'];
            $ytb_jogo_imagem = $linha['ytb_jogo_imagem'];
            $imagem_do_jogo = $linha['imagem_do_jogo'];
            $fundo_de_capa = $linha['fundo_de_capa'];
            $imagens_do_jogo = explode(",", $linha['imagens_do_jogo']);
            $categoria_jogo = explode(",", $linha['categoria_jogo']);
            $idade_jogo = $linha['idade_jogo'];
            $descricao_idade = explode(",", $linha['descricao_idade']);
            $descricao_principal = $linha['descricao_principal'];
            $descricao_total = $linha['descricao_total'];
            $espec_min_so = $linha['espec_min_so'];
            $espec_min_hd = $linha['espec_min_hd'];
            $espec_min_cpu = $linha['espec_min_cpu'];
            $espec_min_mem = $linha['espec_min_ram'];
            $espec_min_gpu = $linha['espec_min_gpu'];
            $espec_min_DX = $linha['espec_min_DX'];
            $espec_rec_so = $linha['espec_rec_so'];
            $espec_rec_hd = $linha['espec_rec_hd'];
            $espec_rec_cpu = $linha['espec_rec_cpu'];
            $espec_rec_mem = $linha['espec_rec_ram'];
            $espec_rec_gpu = $linha['espec_rec_gpu'];
            $espec_rec_DX = $linha['espec_rec_DX'];
            $idiomas_audio = $linha['idiomas_audio'];
            $idiomas_texto = $linha['idiomas_texto'];
        }
    }


    ?>