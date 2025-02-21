const botoes = document.querySelectorAll('.botao-carrinho');

botoes.forEach(botao => {
    botao.addEventListener('click', function () {
        const idProduto = this.getAttribute('data-id');
        const nomeProduto = document.getElementById(`nome-${idProduto}`).innerText;
        const precoProduto = document.getElementById(`preco-${idProduto}`).innerText;
    });
});
