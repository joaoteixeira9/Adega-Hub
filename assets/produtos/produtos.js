document.addEventListener("DOMContentLoaded", function() {
    const botoesCarrinho = document.querySelectorAll('.botao-carrinho');

    botoesCarrinho.forEach(function(botao) {
        botao.addEventListener('click', function() {
            const item = this.closest('.item');
            const nomeBebida = item.querySelector('p').textContent;
            const precoBebida = item.querySelector('p:nth-child(3)').textContent;
            const imagemBebida = item.querySelector('.itemImg').src;

            const produto = {
                nome: nomeBebida,
                preco: precoBebida,
                imagem: imagemBebida
            };

            // Verifica se já existe um carrinho no localStorage
            let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
            carrinho.push(produto);

            // Salva o carrinho no localStorage
            localStorage.setItem('carrinho', JSON.stringify(carrinho));

            console.log("Informações do produto adicionado ao carrinho:");
            console.log(`Nome: ${nomeBebida}`);
            console.log(`Preço: ${precoBebida}`);
            console.log(`Imagem: ${imagemBebida}`);
        });
    });
});
