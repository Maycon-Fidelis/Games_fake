
    // JAVASCRIPT para validação dos dados do formulário

    function validar_formulario(event) {
        event.preventDefault(); 

        // Validar se existe algum campo vazio 
        var alert = document.getElementById("alert_block");
        var alert_texto = document.getElementById("campo_vazio");
        var campos_para_verificar = ["nome_do_jogo", "imagem_jogo", "fundo_de_capa", "imagens_do_jogo[]", "plataformas[]", "preco", "categoria_jogo[]", "descricaoP", "descricaoC", "idiomas_audio", "idiomas_texto","quantidade_de_jogos"];

        for (var i = 0; i < campos_para_verificar.length; i++) {
            var campo = document.getElementsByName(campos_para_verificar[i])[0];

            if (campo.value.trim() === '') {
                alert_texto.textContent = "O campo " + campos_para_verificar[i] + " está vazio, porfavor o preencha.";
                alert.style.display = 'block';
                return;
            }
        }
    
        // Ajustando os preços
        var capturando_preco = document.getElementsByName("preco")[0];
        var valor_preco = capturando_preco.value;

        if(valor_preco.includes(',')) {
            var valor_preco = valor_preco.replace(',','.');
            capturando_preco.value = valor_preco; 
        }
        // Ajustando os preços

        // Envia o formulário
        event.target.submit();

        // Reseta o formulário
        event.target.reset();

    }

    // Ocultar o Alert
    function Ocultar_alert() {
        var alert_block = document.getElementById("alert_block");
        alert_block.style.display = 'none';
    }
