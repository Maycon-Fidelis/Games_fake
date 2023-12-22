const botao_ja_tenho_conta = document.querySelector('.botao_ja_tenho_conta');
const botao_criar_conta = document.querySelector('.botao_criar_conta');

botao_ja_tenho_conta.onclick = function(){
    conteudo_flutuante.classList.add('active');
}

botao_criar_conta.onclick = function(){
    conteudo_flutuante.classList.remove('active');
}

const botao_TC = document.querySelector('.botao_TC');
const botao_NTC = document.querySelector('.botao_NTC')
const ladoesquerdo = document.querySelector('.conteudo');

botao_TC.onclick = function(){
    ladoesquerdo.classList.add('active');
}

botao_NTC.onclick = function(){
    ladoesquerdo.classList.remove('active');
}