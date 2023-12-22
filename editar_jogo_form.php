<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    include 'PHP/conexaoBD.php';

    $sql1 = "SELECT * FROM id_do_jogo where id_jogo = $id";
    $sql2 = "SELECT * FROM jogo_produto where id_jogo = $id";

    $resultado1 = $conn->query($sql1);
    $resultado2 = $conn->query($sql2);

    if($resultado1 && $resultado2){
        $dados1 = $resultado1->fetch_assoc();
        $dados2 = $resultado2->fetch_assoc();
    } else {
        echo "Erro na conexão";
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/Loja_de_jogos.css">
    <link rel="stylesheet" type="text/css" href="CSS/loja_de_jogos_css-responsivo.css">
    <link rel="stylesheet" type="text/css" href="CSS/adicionar_jogos.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <title>GamesFake - God Of War</title>
</head>

<body>

    <!--HTML da barra de navegaão-->
    <header class="header">

        <!--Divisão da parte esquerda da barra de navegação-->
        <div class="header_left">
            <a href="Loja_de_jogos.html" class="logo">Games<span>Fake</span></a>
        </div>
        <!--Divisão da parte esquerda da barra de navegação-->

        <!--Divisão da parte direita da barra de navegação-->
        <div class="header_right_mobile">
            <svg class="menu_de_3_linhas" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                viewBox="0,0,256,256" ;">
                <g fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"
                    stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                    font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                    <g transform="scale(5.12,5.12)">
                        <path
                            d="M3,8c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h44c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM3,23c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h44c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM3,38c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h44c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175z">
                        </path>
                    </g>
                </g>
            </svg>
            <svg class="menu_de_3_linhas_novo" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                viewBox="0,0,256,256" ;">
                <g fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"
                    stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                    font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                    <g transform="scale(5.12,5.12)">
                        <path
                            d="M3,8c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h44c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM3,23c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h44c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM3,38c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h44c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175z">
                        </path>
                    </g>
                </g>
            </svg>
        </div>

        <div class="header_right">
            <a href="#" class="suporte">Suporte <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="-2 -2 24 24" style="transform: ;msFilter:;">
                    <path
                        d="M12 2C6.486 2 2 6.486 2 12v4.143C2 17.167 2.897 18 4 18h1a1 1 0 0 0 1-1v-5.143a1 1 0 0 0-1-1h-.908C4.648 6.987 7.978 4 12 4s7.352 2.987 7.908 6.857H19a1 1 0 0 0-1 1V18c0 1.103-.897 2-2 2h-2v-1h-4v3h6c2.206 0 4-1.794 4-4 1.103 0 2-.833 2-1.857V12c0-5.514-4.486-10-10-10z">
                    </path>
                </svg></a>
            <a href="#" class="entrar">Entrar<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="-2 -1 24 24" style="transform: ;msFilter:;">
                    <path
                        d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z">
                    </path>
                </svg></a>

            <div class="plataformas">
                <a href="#" id="plataformas" class="plataformas">Plataformas <svg xmlns="http://www.w3.org/2000/svg"
                        width="20" height="20" viewBox="6 2 24 24"
                        style="transform: rotate(90deg);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1);">
                        <path d="M10.061 19.061 17.121 12l-7.06-7.061-2.122 2.122L12.879 12l-4.94 4.939z"></path>
                    </svg></a>
                <!--HTML do Menu oculto-->

                <div class="menu_oculto">
                    <ul>
                    <li id="pc">
                            <a href="/Games_fake/jogos_de.php?plataforma=pc" id="pc">
                            <img src="Imagens\icones_da_navbar\plataformas\icon-pc.png">
                            <p>PC</p>
                        </a>
                        </li>
                        <li id="playsation">
                            <a href="/Games_fake/jogos_de.php?plataforma=ps" id="playstation">
                            <img src="Imagens\icones_da_navbar\plataformas\icon-playstation.png">                                
                            <p>Playstation</p>
                            </a>
                        </li>
                        <li id="xbox">
                            <a href="/Games_fake/jogos_de.php?plataforma=xbox" id="xbox">
                            <img width="20px" height="20px" src="Imagens\icones_da_navbar\plataformas\icon-xbox.png">
                            Xbox
                            </a>
                        </li>
                        <li id="nintendo">
                            <a href="/Games_fake/jogos_de.php?plataforma=switch" id="nintendo">
                            <img src="Imagens\icones_da_navbar\plataformas\icon-nintendo_switch.png">
                            Nintendo
                            </a>
                        </li>

                    </ul>
                </div>
                <!--HTML do Menu oculto-->
            </div>

            <a href="#" class="carrinho">Carrinho <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="-2 -1.5 24 24" style="transform: ;msFilter:;">
                    <path
                        d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z">
                    </path>
                    <circle cx="10.5" cy="19.5" r="1.5"></circle>
                    <circle cx="17.5" cy="19.5" r="1.5"></circle>
                </svg></a>

        </div>
        <!--Divisão da parte direita da barra de navegação-->

        <!--Parte de adicionar conteudo ao jogo-->

        <!--Parte de adicionar conteudo ao jogo-->

    </header>
    <!--HTML da barra de navegação-->

    <div class="informacoes_do_jogo">
        <h1>Adicionar Informações do jogo:</h1>
        <div class="informacoes_id_jogo">
            <?php
            echo $id;
            ?>
            <form method="post" action="PHP\editando_jogos_para_o_BD.php?id=<?php echo $id?>" id="formulario" onsubmit="validar_formulario(event)">
                <h2>Adicione o nome do jogo:</h2>
                <input class="input_text" type="text" name="nome_do_jogo" value="<?php echo $dados1['nome_do_jogo'];?>">
                <h2>Adicione o link da imagem do jogo:</h2>
                <input class="input_text" name="imagem_jogo" type="text" value="<?php echo $dados1['imagem_do_jogo'];?>">
                <h2>Informe o link do youtube do jogo:</h2>
                <input type="text" class="input_text" name="ytb_jogo" value="<?php echo htmlspecialchars($dados2['ytb_jogo']); ?>">
                <h2>Informe o link da imagem do link youtube do jogo:</h2>
                <input type="text" class="input_text" name="ytb_jogo_imagem" value="<?php echo $dados2['ytb_jogo_imagem'] ?>">
                <div id="link_imagens">
                    <h2>Informe o link das imagens do jogo:</h2>
                    <?php
                    $imagens_do_jogo = explode(",", $dados2['imagens_do_jogo']);

                    for($i = 0; $i < count($imagens_do_jogo);$i++){
                        echo '<input id="input_imagem" type="text" class="input_text" name="imagens_do_jogo[]" value="' . $imagens_do_jogo[$i] . '">';
                    }
                    ?>
                    <br>
                </div>
                <button type="button" onClick="botao_adicionar('imagens_do_jogo[]','link_imagens')">Adicionar
                    Imagens</button>
                <button type="button" onClick="remover_imagens('link_imagens')">Remover Imagens</button>
                <h2>Selecione quais as plataformas do jogo:</h2>
                <label>
                    <?php
                    if (stripos($dados1['plataformas'], "ps") !== false){
                        echo '<input type="checkbox" name="plataformas[]" value="ps" checked>Playstation';
                    } else {
                        echo '<input type="checkbox" name="plataformas[]" value="ps">Playsttion';
                    }
                    if (stripos($dados1['plataformas'], "xbox") !== false){
                        echo '<input type="checkbox" name="plataformas[]" value="xbox" checked>Xbox';
                    } else {
                        echo '<input type="checkbox" name="plataformas[]" value="xbox">Xbox';
                    }
                    if (stripos($dados1['plataformas'], "pc") !== false){
                        echo '<input type="checkbox" name="plataformas[]" value="pc" checked>PC';
                    } else {
                        echo '<input type="checkbox" name="plataformas[]" value="pc">PC';
                    }
                    if (stripos($dados1['plataformas'], "switch") !== false){
                        echo '<input type="checkbox" name="plataformas[]" value="switch" checked>Switch';
                    } else {
                        echo '<input type="checkbox" name="plataformas[]" value="switch">Switch';
                    }                    
                    ?>
                </label>
                <h2>Informe o link da capa de fundo:</h2>
                <input type="text" class="input_text" name="fundo_de_capa" value="<?php echo $dados2['fundo_de_capa'] ?>">
                <h2>Informe o preço do jogo:</h2>
                <input type="number" class="input_text" name="preco" value="<?php echo $dados1['preco'] ?>">
                <h2>Infome o desconto do jogo(caso possua):</h2>
                <input type="number" class="input_text" name="desconto" value="<?php echo $dados1['desconto'] ?>">
                <h2>Informe as Categória/Gênero do jogo</h2>
                <div id="link_categoria">
                    <?php
                    $categoria = explode(",", $dados2['categoria_jogo']);
                    for($a = 0; $a < count($categoria); $a++){
                        echo '<input type="text" class="input_text" name="categoria_jogo[]" value="' . $categoria[$a] .'">';
                    }
                    ?>
                    <br>
                </div>
                <button type="button" onClick="botao_adicionar('categoria_jogo[]','link_categoria')">Adicionar Categorias</button>
                <button type="button" onClick="remover_imagens('link_categoria')">Remover Categorias</button>
                <h2>Selecione a idade do jogo</h2>
                <select name="idade_jogo" id="idade">
                    <?php
                    if($dados2['idade_jogo'] == 1){
                    echo '<option value="1" selected>Livre</option>';
                    echo '<option value="10">10 Anos</option>';
                    echo '<option value="12">12 Anos</option>';
                    echo '<option value="14">14 Anos</option>';
                    echo '<option value="16">16 Anos</option>';
                    echo '<option value="18">18 Anos</option>';   
                    } else if($dados2['idade_jogo'] == 10){
                        echo '<option value="1">Livre</option>';
                        echo '<option value="10" selected>10 Anos</option>';
                        echo '<option value="12">12 Anos</option>';
                        echo '<option value="14">14 Anos</option>';
                        echo '<option value="16">16 Anos</option>';
                        echo '<option value="18">18 Anos</option>';   
                    } else if($dados2['idade_jogo'] == 12){
                        echo '<option value="1">Livre</option>';
                        echo '<option value="10">10 Anos</option>';
                        echo '<option value="12" selected>12 Anos</option>';
                        echo '<option value="14">14 Anos</option>';
                        echo '<option value="16">16 Anos</option>';
                        echo '<option value="18">18 Anos</option>';   
                    } else if($dados2['idade_jogo'] == 14){
                        echo '<option value="1">Livre</option>';
                        echo '<option value="10">10 Anos</option>';
                        echo '<option value="12">12 Anos</option>';
                        echo '<option value="14" selected>14 Anos</option>';
                        echo '<option value="16">16 Anos</option>';
                        echo '<option value="18">18 Anos</option>';   
                    } else if($dados2['idade_jogo'] == 16){
                        echo '<option value="1">Livre</option>';
                        echo '<option value="10">10 Anos</option>';
                        echo '<option value="12">12 Anos</option>';
                        echo '<option value="14">14 Anos</option>';
                        echo '<option value="16" selected>16 Anos</option>';
                        echo '<option value="18">18 Anos</option>';   
                    } else if($dados2['idade_jogo'] == 18){
                        echo '<option value="1">Livre</option>';
                        echo '<option value="10">10 Anos</option>';
                        echo '<option value="12">12 Anos</option>';
                        echo '<option value="14">14 Anos</option>';
                        echo '<option value="16">16 Anos</option>';
                        echo '<option value="18" selected>18 Anos</option>';   
                    }

                    ?>
                </select>
                <h2>Insira descrições sobre a classificação indicativa:</h2>
                <div id="link_idade">
                    <?php
                    $descricao_idade = explode(",",$dados2['descricao_idade']); 
                    for($j = 0; $j < count($descricao_idade); $j++){
                        echo '<input type="text" class="input_text" name="descricao_idade[]" value="' . $descricao_idade[$j] . '">';
                    }
                    ?>
                    <br>
                </div>
                <button type="button" onClick="botao_adicionar('descricao_idade[]','link_idade')">Adicionar Categorias</button>
                <button type="button" onClick="remover_imagens('link_idade')">Remover Categorias</button>
                <h2>Insira a decrição de destaque do jogo</h2>
                <input type="text" class="input_text_big" name="descricaoP" value="<?php echo $dados2['descricao_principal']; ?>">
                <h2>Insira a descrição completa do jogo</h2>
                <input type="text" class="input_text_big" name="descricaoC" value="<?php echo $dados2['descricao_total']; ?>">
                <h2>Insira as especificações mínimas:</h2>
                <div class="especs">
                    <div class="spec_block">
                        <h2>SO:</h2>
                        <input type="text" name="espec_m_so" value="<?php echo $dados2['espec_min_so']; ?>">
                    </div>
                    <div class="spec_block">
                        <h2>Armazenamento:</h2>
                        <input type="text" name="espec_m_hd" value="<?php echo $dados2['espec_min_hd']; ?>">
                    </div>
                    <div class="spec_block">
                        <h2>Processador:</h2>
                        <input type="text" name="espec_m_cpu" value="<?php echo $dados2['espec_min_cpu']; ?>">
                    </div>
                    <div class="spec_block">
                        <h2>Memória:</h2>
                        <input type="text" name="espec_m_mem" value="<?php echo $dados2['espec_min_ram']; ?>">
                    </div>
                    <div class="spec_block">
                        <h2>Placa de vídeo</h2>
                        <input type="text" name="espec_m_gpu" value="<?php echo $dados2['espec_min_gpu']; ?>">
                    </div>
                    <div class="spec_block">
                        <h2>DirectX:</h2>
                        <input type="text" name="espec_m_DX" value="<?php echo $dados2['espec_min_DX']; ?>">
                    </div>
                </div>
                <h2>Insira as específicações recomendada:</h2>
                <div class="especs">
                    <div class="spec_block">
                        <h2>SO:</h2>
                        <input type="text" name="espec_r_so" value="<?php echo $dados2['espec_rec_so']; ?>">
                    </div>
                    <div class="spec_block">
                        <h2>Armazenamento:</h2>
                        <input type="text" name="espec_r_hd" value="<?php echo $dados2['espec_rec_hd']; ?>">
                    </div>
                    <div class="spec_block">
                        <h2>Processador:</h2>
                        <input type="text" name="espec_r_cpu" value="<?php echo $dados2['espec_rec_cpu']; ?>">
                    </div>
                    <div class="spec_block">
                        <h2>Memória:</h2>
                        <input type="text" name="espec_r_mem" value="<?php echo $dados2['espec_rec_ram']; ?>">
                    </div>
                    <div class="spec_block">
                        <h2>Placa de vídeo</h2>
                        <input type="text" name="espec_r_gpu" value="<?php echo $dados2['espec_rec_gpu']; ?>">
                    </div>
                    <div class="spec_block">
                        <h2>DirectX:</h2>
                        <input type="text" name="espec_r_DX" value="<?php echo $dados2['espec_rec_DX']; ?>">
                    </div>
                </div>

                <h2>Insira os idiomas disponíveis:</h2>
                <h2> Insira os idiomas com suporte a audio:</h2>
                <input type="text" class="input_text" name="idiomas_audio" value="<?php echo $dados2['idiomas_audio']; ?>">
                <h2>Insira os idiomas com suporte a texto:</h2>
                <input type="text" class="input_text" name="idiomas_texto" value="<?php echo $dados2['idiomas_texto']; ?>">
                <h2>Insira a quantidade de cópias que esse jogo possui:</h2>
                <input type="number" name="quantidade_de_jogos" class="input_text" value="<?php echo $dados2['quantidade_de_jogos']; ?>">
                <br>
                <button class="input_text" type="submit" name="enviar">Cadastrar Jogo</button>
        </div>
        </form>
        <div id="alert_block">
            <div class="alert">
                <div class="alert_texto">
                    <h3 id="campo_vazio"></h3>
                </div>
                <button onClick="Ocultar_alert()">Fechar Alerta</button>
            </div>
        </div>

        <script src="JAVASCRIPT/validacao_formulario.js"></script>
        <script src="JAVASCRIPT/adicionar_jogos.js"></script>

</body>

</html>
