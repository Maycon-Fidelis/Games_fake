function deletar_jogo(nome,id) {
    caixa_de_mensagem = document.querySelector(".caixa_de_mensagem");
    elemento_h3 = document.querySelector(".caixa_de_mensagem_h3");
    id_jogo_enviar = document.getElementById("id_jogo_enviar").value = id;

    texto = "Deseja excluir o jogo: " + nome + " Com o Id: " + id;
    
        caixa_de_mensagem.style.display = "block";
        elemento_h3.textContent = texto; 
}

function cancelar_exclusao_jogo(){
    var caixas_de_mensagem = document.getElementsByClassName("caixa_de_mensagem");
    
    for (var i = 0; i < caixas_de_mensagem.length; i++) {
        caixas_de_mensagem[i].style.display = "none";
    }    
}


