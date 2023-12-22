CREATE DATABASE games_fake;

USE games_fake;

CREATE TABLE
    id_do_jogo (
        id_jogo INT AUTO_INCREMENT PRIMARY KEY,
        nome_do_jogo VARCHAR(50),
        plataformas VARCHAR(100),
        preco FLOAT,
        desconto INT,
        imagem_do_jogo VARCHAR(255)
    );

CREATE TABLE
    jogo_produto (
        id_jogo INT,
        fundo_de_capa VARCHAR(255),
        ytb_jogo TEXT,
        ytb_jogo_imagem TEXT,
        imagens_do_jogo TEXT,
        idade_jogo INT,
        descricao_idade TEXT,
        categoria_jogo TEXT,
        descricao_principal TEXT,
        descricao_total TEXT,
        espec_min_so VARCHAR(100),
        espec_min_hd VARCHAR(50),
        espec_min_cpu VARCHAR(100),
        espec_min_ram VARCHAR(20),
        espec_min_gpu VARCHAR(100),
        espec_min_DX VARCHAR(25),
        espec_rec_so VARCHAR(100),
        espec_rec_hd VARCHAR(50),
        espec_rec_cpu VARCHAR(100),
        espec_rec_ram VARCHAR(20),
        espec_rec_gpu VARCHAR(100),
        espec_rec_DX VARCHAR(25),
        idiomas_audio VARCHAR(255),
        idiomas_texto VARCHAR(255),
        quantidade_de_jogos INT,
        capa_para_pagina_inicial VARCHAR(255),
        FOREIGN KEY (id_jogo) REFERENCES id_do_jogo(id_jogo)
    );