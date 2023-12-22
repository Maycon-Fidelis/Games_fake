<?php
// Funções para a página onde estão todos os jogos
function plataformas_disponiveis($plataformas)
{
    $pc = "pc";
    $ps = "ps";
    $xbox = "xbox";
    $switch = "switch";

    if (stripos($plataformas, $ps) !== false) {
        echo '<img src="Imagens\icones_da_navbar\plataformas\icon-playstation.png" alt="Playstation">';
    }
    if (stripos($plataformas, $pc) !== false) {
        echo '<img src="Imagens\icones_da_navbar\plataformas\icon-pc.png" alt="PC">';
    }
    if (stripos($plataformas, $xbox) !== false) {
        echo '<img src="Imagens\icones_da_navbar\plataformas\icon-xbox.png" alt="Xbox">';
    }
    if (stripos($plataformas, $switch) !== false) {
        echo '<img src="Imagens\icones_da_navbar\plataformas\icon-nintendo_switch.png" alt="Nintendo Switch">';
    }

}

function limite_de_caracteres($texto) {
    $limiteCaracteres = 22;

    $nomeJogoLimitado = substr($texto, 0, $limiteCaracteres);

    if (strlen($texto) > $limiteCaracteres) {
        $nomeJogoLimitado .= "...";
        echo '<h2 id="jogo_nome">' . $nomeJogoLimitado . '<h2>';
    } else {
        echo '<h2 id="jogo_nome">' . $texto . '<h2>';
    }


}


function desconto($desconto)
{
    if ($desconto == 0) {
        echo '<div style="display: none;" class="desconto">';

        echo '</div>';
    } else {
        echo '<div class="desconto">';
        echo '<h5>' . $desconto . '%</h5>';
        echo '</div>';
    }
}
function preco_desconto($desconto, $preco){
    if ($desconto == 0) {
        $preco = 'R$ ' . number_format($preco, 2, ',', '.');
        echo '<h5>' . $preco . '</h5>';

    } else {
        $desconto = $preco - ($preco * ($desconto / 100));
        $desconto = 'R$ ' . number_format($desconto, 2, ',', '.');
        echo '<h5>' . $desconto . '</h5>';
    }
}
// Funções para a página onde estão todos os jogos

// Funções para a página de jogo
function imprimir_plataformas($plataformas)
{
    $pc = "pc";
    $ps = "ps";
    $xbox = "xbox";
    $switch = "switch";
    if (stripos($plataformas, $pc) !== false) {
        echo '<div id="plataformas-pc" class="plataformas2">
            <img src="Imagens\icones_da_navbar\plataformas\icon-pc.png" alt="PC">
            <p>PC</p>
            </div>';
    }
    if (stripos($plataformas, $ps) !== false) {
        echo '<div id="plataformas-playstation" class="plataformas2">                       <img src="Imagens\icones_da_navbar\plataformas\icon-playstation.png" alt="">
            <p>Playstation</p>
            </div>';
    }
    if (stripos($plataformas, $xbox) !== false) {
        echo '<div id="plataformas-xbox" class="plataformas2">
            <img src="Imagens\icones_da_navbar\plataformas\icon-xbox.png" alt="">
            <p>Xbox</p>
            </div>';
    }
    if (stripos($plataformas, $switch) !== false) {
        echo '                            <div id="plataformas-nintendo" class="plataformas2">
            <img src="Imagens\icones_da_navbar\plataformas\icon-nintendo_switch.png " alt="">
            <p>Nintendo</p>
            </div>';
    }

}

function desconto_pagina_de_jogo($desconto, $preco) {
    if ($desconto == 0) {
        echo '<div class="desconto" style="display: none;"></div>';
        echo '<div class="preco">';
        $preco = 'R$ ' . number_format($preco, 2, ',', '.');
        echo '<div class="preco_desconto" style="  font-size: 1.3rem;color: #fa5353;"><h2>' . $preco . '</h2></div>';
        echo '</div>';
    } else {
        echo '<div class="desconto">' . $desconto . '%</div>';
        echo '<div class="preco">';
        $preco_original = 'R$ ' . number_format($preco, 2, ',', '.');
        echo '<div class="preco_original">' . $preco_original . '</div>';
        $preco_desconto = $preco - ($preco * ($desconto / 100));
        $preco_desconto = 'R$ ' . number_format($preco_desconto, 2, ',', '.');
        echo '<div class="preco_desconto">' . $preco_desconto . '</div>';
        echo '</div>';
    }
}

function categoria_genero($categoria_jogo)
{
    for ($a = 0; $a < count($categoria_jogo); $a++) {
        echo '<p>' . $categoria_jogo[$a] . '</p>';
    }
}

function idade_indicativa($idade_jogo, $descricao_idade)
{
    switch ($idade_jogo) {
        case 1:
            echo '<img src="https://img.quizur.com/f/img5ddbf964d88722.81695728.png?lastEdited=1574697344" alt="classificação indicativa: 18 anos">';
            echo '<div class="classificacao-etaria-texto">';
            echo '<h4>Livre</h4>';
            for ($a = 0; $a < count($descricao_idade); $a++) {
                echo '<h5>' . $descricao_idade[$a] . '</h5>';
            }
            echo '</div>';
            break;
        case 10:
            echo '<img src="https://logodownload.org/wp-content/uploads/2017/07/classificacao-10-anos-logo.png" alt="classificação indicativa: 18 anos">';
            echo '<div class="classificacao-etaria-texto">';
            echo '<h4>10 Anos</h4>';
            for ($a = 0; $a < count($descricao_idade); $a++) {
                echo '<h5>' . $descricao_idade[$a] . '</h5>';
            }
            echo '</div>';
            break;
        case 12:
            echo '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/DJCTQ_-_12.svg/1024px-DJCTQ_-_12.svg.png">';
            echo '<div class="classificacao-etaria-texto">';
            echo '<h4>12 Anos</h4>';
            for ($a = 0; $a < count($descricao_idade); $a++) {
                echo '<h5>' . $descricao_idade[$a] . '</h5>';
            }
            echo '</div>';
            break;
        case 14:
            echo '<img src="https://proxy.olhardigital.com.br/wp-content/uploads/2022/02/NR14-AUTO.jpg">';
            echo '<div class="classificacao-etaria-texto">';
            echo '<h4>14 Anos</h4>';
            for ($a = 0; $a < count($descricao_idade); $a++) {
                echo '<h5>' . $descricao_idade[$a] . '</h5>';
            }
            echo '</div>';
            break;
        case 16:
            echo '<img src="https://logodownload.org/wp-content/uploads/2017/07/classificacao-16-anos-logo-1.png">';
            echo '<div class="classificacao-etaria-texto">';
            echo '<h4>16 Anos</h4>';
            for ($a = 0; $a < count($descricao_idade); $a++) {
                echo '<h5>' . $descricao_idade[$a] . '</h5>';
            }
            echo '</div>';
            break;
        case 18:
            echo '<img src="https://logodownload.org/wp-content/uploads/2017/07/classificacao-18-anos-logo-1.png">';
            echo '<div class="classificacao-etaria-texto">';
            echo '<h4>18 Anos</h4>';
            for ($a = 0; $a < count($descricao_idade); $a++) {
                echo '<h5>' . $descricao_idade[$a] . '</h5>';
            }
            echo '</div>';
            break;

    }

}

// Funções para a página de jogo
?>