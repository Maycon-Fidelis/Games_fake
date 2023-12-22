<?php

include "conexaoBD.php";


if (isset($_POST['enviar'])) {
    $campos_nao_nulos = ["titulo_jogo", "preco", "idade", "decricaoP", "descricaoC", "idiomas_texto", "idiomas_audio", "quantidade_jogos","imagem_jogo", "categoria", "plataformas"];
    $tamanho_campos_nao_nulos = sizeof($campos_nao_nulos);
    $formulario_aceito = true;

    for ($i = 0; $i < $tamanho_campos_nao_nulos; $i++) {
        if (empty($_POST[$campos_nao_nulos[$i]])) {
            echo "Erro: Campo " . $campos_nao_nulos[$i] . " está vazio, preencha-o corretamente";
            $formulario_aceito = false;
            break;
        }
    }

    if ($formulario_aceito ) {
        $titulo_jogo = $_POST['titulo_jogo'];
        $link_ytb = $_POST['ytb_jogo'];
        $imagens = implode("; ", $_POST["imagem_jogo"]);
        $plataformas = implode("; ", $_POST["plataformas"]);
        $preco = $_POST['preco'];
        $desconto = $_POST['desconto'];
        $categoria = implode("; ", $_POST['categoria']);
        $idade = $_POST['idade'];
        $idade_d = $_POST['idade_d'];
        $descricaoP = $_POST['descricaoP'];
        $descricaoC = $_POST['descricaoC'];
        $espec_m_so = $_POST['espec_m_so'];
        $espec_m_arm = $_POST['espec_m_arm'];
        $espec_m_cpu = $_POST['espec_m_cpu'];
        $espec_m_mem = $_POST['espec_m_mem'];
        $espec_m_gpu = $_POST['espec_m_gpu'];
        $espec_m_DX = $_POST['espec_m_DX'];
        $espec_r_so = $_POST['espec_r_so'];
        $espec_r_arm = $_POST['espec_r_arm'];
        $espec_r_cpu = $_POST['espec_r_cpu'];
        $espec_r_mem = $_POST['espec_r_mem'];
        $espec_r_gpu = $_POST['espec_r_gpu'];
        $espec_r_DX = $_POST['espec_r_DX'];
        $idiomas_texto = $_POST['idiomas_texto'];
        $idiomas_audio = $_POST['idiomas_audio'];
        $quantidade_jogos = $_POST['quantidade_jogos'];

        include "enviando_para_BD.php";

    }
}


?>
<?php

include "conexaoBD.php";


if (isset($_POST['enviar'])) {
    $campos_nao_nulos = ["titulo_jogo", "preco", "idade", "decricaoP", "descricaoC", "idiomas_texto", "idiomas_audio", "quantidade_jogos","imagem_jogo", "categoria", "plataformas"];
    $tamanho_campos_nao_nulos = sizeof($campos_nao_nulos);
    $formulario_aceito = true;

    for ($i = 0; $i < $tamanho_campos_nao_nulos; $i++) {
        if (empty($_POST[$campos_nao_nulos[$i]])) {
            echo "Erro: Campo " . $campos_nao_nulos[$i] . " está vazio, preencha-o corretamente";
            $formulario_aceito = false;
            break;
        }
    }

    if ($formulario_aceito ) {
        $titulo_jogo = $_POST['titulo_jogo'];
        $link_ytb = $_POST['ytb_jogo'];
        $imagens = implode("; ", $_POST["imagem_jogo"]);
        $plataformas = implode("; ", $_POST["plataformas"]);
        $preco = $_POST['preco'];
        $desconto = $_POST['desconto'];
        $categoria = implode("; ", $_POST['categoria']);
        $idade = $_POST['idade'];
        $descricaoP = $_POST['descricaoP'];
        $descricaoC = $_POST['descricaoC'];
        $espec_m_so = $_POST['espec_m_so'];
        $espec_m_arm = $_POST['espec_m_arm'];
        $espec_m_cpu = $_POST['espec_m_cpu'];
        $espec_m_mem = $_POST['espec_m_mem'];
        $espec_m_gpu = $_POST['espec_m_gpu'];
        $espec_m_DX = $_POST['espec_m_DX'];
        $espec_r_so = $_POST['espec_r_so'];
        $espec_r_arm = $_POST['espec_r_arm'];
        $espec_r_cpu = $_POST['espec_r_cpu'];
        $espec_r_mem = $_POST['espec_r_mem'];
        $espec_r_gpu = $_POST['espec_r_gpu'];
        $espec_r_DX = $_POST['espec_r_DX'];
        $idiomas_texto = $_POST['idiomas_texto'];
        $idiomas_audio = $_POST['idiomas_audio'];
        $quantidade_jogos = $_POST['quantidade_jogos'];

        include "enviando_para_BD.php";

    }
}


?>
