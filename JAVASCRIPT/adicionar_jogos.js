
    function botao_adicionar(tipo,id_input){
        novo_input = document.createElement("input");
        novo_input.setAttribute("type","text");
        novo_input.setAttribute("class","input_text");
        novo_input.setAttribute("name",tipo);
        
        var link_imagens = document.getElementById(id_input);
        link_imagens.appendChild(novo_input);
    }

    function remover_imagens(id_input) {
    var link_imagens = document.getElementById(id_input);
    var inputs = link_imagens.getElementsByTagName("input");
    var ultimo_input = inputs.length - 1;

    if (ultimo_input >= 0) {
        link_imagens.removeChild(inputs[ultimo_input]);
    }
    }