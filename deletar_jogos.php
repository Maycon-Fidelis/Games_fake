<?php
session_start();
include 'PHP/deletar_jogos_comando.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\Loja_de_jogos.css">
    <link rel="stylesheet" href="CSS\loja_de_jogos_css-responsivo.css">
    <link rel="stylesheet" href="CSS\todos_os_jogos.css">
    <link rel="stylesheet" href="CSS\deletar_jogos.css">
    <title>Todos Os Jogos - GamesFake</title>
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
    </header>

    <!--HTML da barra de navegaão-->


    <!--HTML com todos os jogos-->



    <div class="todos-os-jogos">
        <h2>Todos os jogos:</h2>
        <div class="todos-os-jogos-block">
            <?php

            include 'PHP/conexaoBD.php';
            include 'PHP/funcoes_para_imprimir.php';

            // Pegando os dados do BD e colocando PHP
            
            $sql = "SELECT * FROM id_do_jogo";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
                while ($linha = $result->fetch_assoc()) {   
                    $nome_jogo_link = str_replace(' ', '-', $linha['nome_do_jogo']);
                    echo '<div class="jogo_icone">';
                    echo '<div class="jogo_imagem">';
                    echo '<img src="' . $linha["imagem_do_jogo"] . '" alt="Imagem do Jogo">';
                    echo '</div>';
                    echo '<div class="jogo_informacoes">';
                    echo '<div class="plataformas_icone">';
                    plataformas_disponiveis($linha["plataformas"]);
                    echo '</div>';
                    echo '<div class="nome_do_jogo">';
                    limite_de_caracteres($linha['nome_do_jogo']);
                    echo '</div>';
                    echo '<div class="valor2">';
                    desconto($linha['desconto']);
                    echo '<div class="preco">';
                    preco_desconto($linha['desconto'],$linha['preco']);
                    echo '</div>';
                    echo '</div>';
                    echo '<div id="deletar_jogo"><button onclick="deletar_jogo(\'' . $linha['nome_do_jogo'] . '\',' . $linha['id_jogo'] . ')">Deletar Jogo</button></div>';
                    echo '</div>';
                    echo '</div>';
                }
            }

            ?>
        </div>

        <div class="caixa_de_mensagem">
            <h3 class="caixa_de_mensagem_h3"></h3>
            <div class="caixa_de_mensagem_botao">
            <form method="post" action="">
            <input type="hidden" name="id_jogo" id="id_jogo_enviar" value="">
            <input type="submit" name="excluir_jogo" class="excluir_jogo" value="Excluir Jogo">   
            </form>
            <button class="cancelar" onclick="cancelar_exclusao_jogo()">Cancelar</button>
            </div>
        </div>
    </div>
    
    <!--HTML com todos os jogos-->
</body>
<script type="text/javascript" src="JAVASCRIPT/Loja_de_jogos_js.js"></script>
<script type="text/javascript" src="JAVASCRIPT/deletar_jogos_comando.js"></script>

</html>