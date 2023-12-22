/*Definindo as variavéis*/

const plataformas = document.querySelector('.plataformas');
const menu_oculto = document.querySelector('.menu_oculto');
const svg_elemento = document.getElementById("#plataformas");

/*Definindo as variavéis*/

/*Código javascript com a função de ativar o menu oculto das plataformas*/

function verificarTamanhoDaTela() {
  if (window.innerWidth >= 810) {
    plataformas.addEventListener("mouseover", menu_oculto_plataformas);
  } else {
    plataformas.removeEventListener("mouseover", menu_oculto_plataformas);
  }
}

function menu_oculto_plataformas() {
  menu_oculto.classList.add('active');
  plataformas.classList.add('active');
  svg_elemento.style.fill = "rgb(205, 55, 55)";
}

verificarTamanhoDaTela();

window.addEventListener('resize', verificarTamanhoDaTela);

verificarTamanhoDaTela();

window.addEventListener('resize', verificarTamanhoDaTela);


/*Código javascript com a função de ativar o menu oculto das plataformas*/

/*Código javascript com a função de desativar o meunu oculto quando o mouse for tirado por cima do menu*/

plataformas.addEventListener("mouseout", function () {

  menu_oculto.classList.remove('active');

});

/*Código javascript com a função de desativar o meunu oculto quando o mouse for tirado por cima do menu*/

/*Código javascript com a função de mostrar o menu-mobile quando pressionado o botão*/

const menu_de_3_linhas = document.querySelector('.menu_de_3_linhas');
const header_right = document.querySelector('.header_right');
const menu_de_3_linhas_novo = document.querySelector('.menu_de_3_linhas_novo');

menu_de_3_linhas.addEventListener('click', function () {
  header_right.classList.add('active');
  menu_de_3_linhas.classList.add('active');
  menu_de_3_linhas_novo.classList.add('active');
});

menu_de_3_linhas_novo.addEventListener('click', function () {
  header_right.classList.remove('active');
  menu_de_3_linhas.classList.remove('active');
  menu_de_3_linhas_novo.classList.remove('active');
});

/*Código javascript com a função de mostrar o menu-mobile quando pressionado o botão*/


/*Código javascript para o funcionamento do carousel*/

$(document).ready(function () {
  $('.carousel-big').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    asNavFor: '.carousel-thumbnails',
    prevArrow: $('.slick-prev'),
    nextArrow: $('.slick-next'),
  });
  $('.carousel-thumbnails').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.carousel-big',
    arrows: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 458,
        settings: {
          slidesToShow: 2
        }
      }
    ]
  });
});

/*Código javascript para o funcionamento do carousel*/

/*Código javascript para ocultar e desocultar o texto*/

var texto = document.querySelector('.descricao-texto');
var botao_texto = document.querySelector('.botao_do_texto button  ');
var style = window.getComputedStyle(texto);

botao_texto.addEventListener('click', function () {
  var style = window.getComputedStyle(texto);
  if (style.display === 'none') {
    texto.style.display = 'block';
    botao_texto.innerHTML = 'Mostrar menos'
  } else {
    texto.style.display = 'none';
    botao_texto.innerHTML = 'Mostrar texto completo'
  }
});


/*Código javascript para ocultar e desocultar o texto*/

/* Código javascript para  não mostrar os requisitos quando o jogo não estiver disponível para PC*/

function ocultar_requisitos() {
  var block3_text = document.querySelector(".block3_text");
  var requisitos = document.querySelector(".requisitos");
  var requisitos_m_e_r = document.querySelector(".requisitos_m_e_r");
  var idiomas_disponiveis_texto = document.querySelector(".idiomas_disponiveis_texto");
  var block3 = document.querySelector(".block3");
  requisitos.style.display = "none";
  block3_text.style.display = "none";
  requisitos_m_e_r.style.display = "none";
  idiomas_disponiveis_texto.style.paddingTop = "30px";

}

function comparar_o_tamanho_do_block() {
  var block3 = document.querySelector(".block3");
  var largura_da_tela = window.innerWidth;
  if (largura_da_tela <= 972) {
    block3.style.height = '390px';
  }
  if (largura_da_tela <= 622) {
    block3.style.height = '470px';
  }
  if (largura_da_tela <= 457) {
    block3.style.height = '830px';
  }


}
/* Código javascript para  não mostrar os requisitos quando o jogo não estiver disponível para PC*/

/*Código Javascript para mostrar e ocultar as plataformas na nav-menu mobile*/

document.addEventListener("DOMContentLoaded", function() {
  var plataformasm = document.getElementById("plataformas");
  var menuOculto = document.querySelector(".menu_oculto");
  var aumentar_div = document.querySelector(".plataformas");

  plataformasm.addEventListener("click", function() {
    console.log("Clique detectado");
      if (menuOculto.style.display === "none" || menuOculto.style.display === "") {
          aumentar_div.style.height = "230px";
          menuOculto.style.top = "20%";
          menuOculto.style.display = "block";
      } else {
          aumentar_div.style.height = "45px";
          plataformasm.style.height = ""; 
          menuOculto.style.top = ""; 
          menuOculto.style.display = "none";
      }
  });
});

/*Código Javascript para mostrar e ocultar as plataformas na nav-menu mobile*/
