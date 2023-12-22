<?php
include 'PHP/pegando_dados_do_BD.php';
include 'PHP/funcoes_para_imprimir.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/pagina_de_jogo.css">
    <link rel="stylesheet" type="text/css" href="CSS/pagina_de_jogo_responsivo.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <?php
    echo '<title>GamesFake - ' . $nome_do_jogo  . '</title>';

    ?>

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
                            PC
                        </a>
                        </li>
                        <li id="playsation">
                            <a href="/Games_fake/jogos_de.php?plataforma=ps" id="playstation">
                            <img src="Imagens\icones_da_navbar\plataformas\icon-playstation.png">                                
                            Playstation
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
    </header>
    <!--HTML da barra de navegação-->

    <!--HTML da divisão do titulo do jogo, carousel e das informações sobre ele-->

    <div class="block1">
        <?php
        echo '<div class="block-jogo" style="background-image: url(' . $fundo_de_capa . ')">';
        ?>
        <div class="fixar_o_titulo_do_jogo">
            <div class="titulo_do_jogo">
                <div class="icone_do_jogo">
                    <?php
                    echo '<img src="' . $imagem_do_jogo . '" alt="God of War">';
                    ?>
                </div>
                <div class="informacoes_do_jogo">
                        <?php
                        echo '<h2 class="nome_do_jogos">' . $nome_do_jogo . '</h2>';
                        ?>
                    <div class="informacoes_plataformas">
                        <?php
                        imprimir_plataformas($plataformas);
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <div class="block-jogo2">
            <div class="carousel-do-jogo">
                <div class="carousel">
                    <button class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                            viewBox="0 0 24 24" style="transform: ;msFilter:;">
                            <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                        </svg></button>
                    <button class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                            viewBox="0 0 24 24" style="transform: ;msFilter:;">
                            <path d="M10.061 19.061 17.121 12l-7.06-7.061-2.122 2.122L12.879 12l-4.94 4.939z">
                            </path>
                        </svg></button>
                    <div class="carousel-big">

                        <div>
                            <?php
                            echo $ytb_jogo;
                            ?>
                        </div>
                        <?php

                        for ($i = 0; $i < count($imagens_do_jogo); $i++) {
                            echo '<div><img src="' . $imagens_do_jogo[$i] . '" alt="Imagem ' . $i . '"></div>';
                        }
                        ?>
                    </div>


                </div>

                <div class="carousel-thumbnails">
                    <?php
                    echo '<div><img src="' . $ytb_jogo_imagem . '" alt="YouTube_thumbnail"></div>';
                    for ($i = 0; $i < count($imagens_do_jogo); $i++) {
                        echo '<div><img src="' . $imagens_do_jogo[$i] . '" alt="Imagem ' . $i . '"></div>';
                    }
                    ?>
                </div>
            </div>

            <div class="informacoes-do-jogo">
                <div class="valor_responsivo">
                    <div class="valor">
                        <?php
                        desconto_pagina_de_jogo($desconto, $preco);
                        ?>
                    </div>
                    <div class="info-jogo-comprar">
                        <button><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:; margin: 0 10px;">
                                <path
                                    d="M21 4H2v2h2.3l3.28 9a3 3 0 0 0 2.82 2H19v-2h-8.6a1 1 0 0 1-.94-.66L9 13h9.28a2 2 0 0 0 1.92-1.45L22 5.27A1 1 0 0 0 21.27 4 .84.84 0 0 0 21 4zm-2.75 7h-10L6.43 6h13.24z">
                                </path>
                                <circle cx="10.5" cy="19.5" r="1.5"></circle>
                                <circle cx="16.5" cy="19.5" r="1.5"></circle>
                            </svg>Comprar</button>
                    </div>
                </div>


                <div class="informacoes-do-jogo2">
                    <div class="categoria-do-jogo">
                        <h3>Categória/Gênero:</h3>
                        <div class="genero">
                            <?php
                            categoria_genero($categoria_jogo);
                            ?>
                        </div>
                    </div>


                    <div class="classificacao-etaria">
                        <h3>Classificação Indicativa:</h3>

                        <div class="logo">
                            <?php
                            idade_indicativa($idade_jogo, $descricao_idade);
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

    <div class="block2">
        <div class="block2_decricao">
            <div class="block2_decricao_titulo">
                <h2>Descrição do Jogo</h2>
            </div>
            <?php
            $descricao_principal = nl2br($descricao_principal);
            echo '<p id="primeiro_texto">' . $descricao_principal . '</p>';
            ?>
            <div class="descricao-texto">
                <br>
                <?php
                $descricao_total = nl2br($descricao_total);
                echo '<p>' . $descricao_total . '</p>';
                ?>

            </div>
            <div class="botao_do_texto">
                <button class="botao_texto">Mostrar texto completo</button>
            </div>
        </div>
    </div>


    <div class="block3">
        <div class="block3_text">
            <h5>Windows<h3>Especificações</h3>
            </h5>
        </div>

        <div class="requisitos">
            <div class="requisitos_minimo">
                <h3>Mínimo:</h3>
            </div>
            <div class="requisitos_recomendado">
                <h3>Recomendado:</h3>
            </div>
        </div>

        <div class="requisitos_m_e_r">
            <div class="requisitos1">
                <div class="requisitos_m">
                    <h4>
                        <h4 class="requisitos_classificacao">SO:</h4>
                        <?php
                        echo $espec_min_so;
                        ?>
                    </h4>
                </div>
                <div class="requisitos_m">
                    <h4>
                        <h4 class="requisitos_classificacao">Armazenamento:</h4>
                        <?php
                        echo $espec_min_hd;
                        ?>
                    </h4>
                </div>
                <div class="requisitos_m">
                    <h4>
                        <h4 class="requisitos_classificacao">Processador:</h4>
                        <?php
                        echo $espec_min_cpu;
                        ?>
                    </h4>
                </div>
                <div class="requisitos_m">
                    <h4>
                        <h4 class="requisitos_classificacao">Memória:</h4>
                        <?php
                        echo $espec_min_mem;
                        ?>
                    </h4>
                </div>
                <div class="requisitos_m">
                    <h4>
                        <h4 class="requisitos_classificacao">Placa de vídeo:</h4>
                        <?php
                        echo $espec_min_gpu;
                        ?>
                    </h4>
                </div>
                <div class="requisitos_m">
                    <h4>
                        <h4 class="requisitos_classificacao">DirectX:</h4>
                        <?php
                        echo $espec_min_DX;
                        ?>
                    </h4>
                </div>

            </div>

            <div class="requisitos_recomendado1">
                <h3>Recomendado:</h3>
            </div>

            <div class="requisitos2">
                <div class="requisitos_re">
                    <div class="requisitos_r">
                        <h4>
                            <h4 class="requisitos_classificacao">SO:</h4>
                            <?php
                            echo $espec_rec_so;
                            ?>
                        </h4>
                    </div>
                    <div class="requisitos_re">
                        <h4>
                            <h4 class="requisitos_classificacao">Armazenamento:</h4>
                            <?php
                            echo $espec_rec_hd;
                            ?>
                        </h4>
                    </div>
                    <div class="requisitos_re">
                        <h4>
                            <h4 class="requisitos_classificacao">Processador:</h4>
                            <?php
                            echo $espec_rec_cpu;
                            ?>
                        </h4>
                    </div>
                    <div class="requisitos_re">
                        <h4>
                            <h4 class="requisitos_classificacao">Memória:</h4>
                            <?php
                            echo $espec_rec_mem;
                            ?>
                        </h4>
                    </div>
                    <div class="requisitos_re">
                        <h4>
                            <h4 class="requisitos_classificacao">Placa de vídeo:</h4>
                            <?php
                            echo $espec_rec_gpu;
                            ?>
                        </h4>
                    </div>
                    <div class="requisitos_re">
                        <h4>
                            <h4 class="requisitos_classificacao">DirectX:</h4>
                            <?php
                            echo $espec_rec_DX;
                            ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="idiomas_disponiveis">
            <div class="idiomas_disponiveis_texto">
                <h4>Idiomas disponíveis:</h4>
            </div>
            <div class="idiomas_audio">
                <h4 id="idiomas_texto"><span style="color : #fff;">Texto: </span> <?php echo $idiomas_texto; ?> </h4>
            </div>
            <div class="idiomas_texto">
                <h4 id="idiomas_texto"><span style="color : #fff;">Audio: </span> <?php echo $idiomas_audio; ?></h4>
            </div>
        </div>
        <?php
        if (stripos($plataformas, "pc") === false) {
            echo '<script type="text/javascript" src="JAVASCRIPT\pagina_de_jogo.js"></script>
            <script>
            ocultar_requisitos();
            </script>';
        }
        ?>

    </div>



    <!--HTML da divisão do titulo do jogo, carousel e das informações sobre ele-->

    <script type="text/javascript" src="JAVASCRIPT\pagina_de_jogo.js"></script>


</body>

</html>
