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

    plataformas.addEventListener("mouseout", function(){

        menu_oculto.classList.remove('active');

    });

/*Código javascript com a função de desativar o meunu oculto quando o mouse for tirado por cima do menu*/

/*Código javascript com a função de mostrar o menu-mobile quando pressionado o botão*/

    const menu_de_3_linhas = document.querySelector('.menu_de_3_linhas');
    const header_right = document.querySelector('.header_right');
    const menu_de_3_linhas_novo = document.querySelector('.menu_de_3_linhas_novo');

    menu_de_3_linhas.addEventListener('click', function(){
      header_right.classList.add('active');
      menu_de_3_linhas.classList.add('active');
      menu_de_3_linhas_novo.classList.add('active');
    });

    menu_de_3_linhas_novo.addEventListener('click', function(){
      header_right.classList.remove('active');
      menu_de_3_linhas.classList.remove('active');
      menu_de_3_linhas_novo.classList.remove('active');
    });

/*Código javascript com a função de mostrar o menu-mobile quando pressionado o botão*/

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
          
/*Código javascript com a função de configurar o carousel inícial para mostrar as 4 imagens*/

        document.addEventListener("DOMContentLoaded", function() {
          var slides = document.querySelectorAll(".slide-image");
          var currentSlide = 0;
        
          function showSlide(slideIndex) {
            for (var i = 0; i < slides.length; i++) {
              slides[i].classList.remove("active");
            }
            slides[slideIndex].classList.add("active");
          }
        
          document.querySelector(".slick-prev").addEventListener("click", function() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
          });
        
          document.querySelector(".slick-next").addEventListener("click", function() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
          });
        
          showSlide(currentSlide);
        });

/*Código javascript com a função de configurar o carousel inícial para mostrar as 4 imagens*/
        
/*Código jquery com o plugin slick para a criação do carousel dos intems com desconto*/

        $(document).ready(function() {
          function initSlick() {
            $('.slider').slick({
              slidesToShow: 4,
              slidesToScroll: 1,
              prevArrow: $('.slick_prev'),
              nextArrow: $('.slick_next'),
              responsive: [
                {
                  breakpoint: 1017,
                  settings: {
                    slidesToShow:3
                  }
                },
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 2
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1
                  }
                },
                {
                  breakpoint: 9999,
                  settings: "unslick" 
                }
              ]
            });
          }

          initSlick();
        });

/*Código jquery com o plugin slick para a criação do carousel dos intems com desconto*/


const plataformas_menu_mobile = document.querySelector('#plataformas');

plataformas_menu_mobile.addEventListener('click', function(){

});

document.getElementById('plataformas').addEventListener('click',function(){
  var plataforma = document.querySelector()
});

