// Formatar o preço para real

const formatoReal = numero.toLocaleString('pt-BR', {
    style: 'currency',
    currency: 'BRL',
});
// Calcular desconto
function calcular_desconto(desconto) {
    desconto = desconto / 100;
    preco_desconto = preco_formatado * desconto;
}
