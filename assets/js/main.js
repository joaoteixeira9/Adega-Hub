document.addEventListener("DOMContentLoaded", function() {
    // Seleciona os elementos pelos IDs específicos
    const cardCombos = document.getElementById('cardCombos');
    const cardQuemSomos = document.getElementById('cardQuemSomos');
    const cardProdutos = document.getElementById('cardProdutos');
    const principal = document.getElementById('principal');

    // Função de hover para cardCombos
    cardCombos.addEventListener('mouseenter', function() {
        cardCombos.classList.add('cardComboHovered');
        principal.classList.add('principalCombo');
        // Reduz a opacidade dos outros cards
        cardQuemSomos.style.opacity = '0';
        cardProdutos.style.opacity = '0';
    });
    cardCombos.addEventListener('mouseleave', function() {
        cardCombos.classList.remove('cardComboHovered');
        principal.classList.remove('principalCombo');
        // Restaura a opacidade dos outros cards
        cardQuemSomos.style.opacity = '1';
        cardProdutos.style.opacity = '1';
    });

    // Função de hover para cardQuemSomos
    cardQuemSomos.addEventListener('mouseenter', function() {
        cardQuemSomos.classList.add('cardQuemSomosHovered');
        principal.classList.add('principalQuemSomos');
        // Reduz a opacidade dos outros cards
        cardCombos.style.opacity = '0';
        cardProdutos.style.opacity = '0';
    });
    cardQuemSomos.addEventListener('mouseleave', function() {
        cardQuemSomos.classList.remove('cardQuemSomosHovered');
        principal.classList.remove('principalQuemSomos');
        // Restaura a opacidade dos outros cards
        cardCombos.style.opacity = '1';
        cardProdutos.style.opacity = '1';
    });

    // Função de hover para cardProdutos
    cardProdutos.addEventListener('mouseenter', function() {
        cardProdutos.classList.add('cardProdutosHovered');
        principal.classList.add('principalProdutos');
        // Reduz a opacidade dos outros cards
        cardCombos.style.opacity = '0';
        cardQuemSomos.style.opacity = '0';
    });
    cardProdutos.addEventListener('mouseleave', function() {
        cardProdutos.classList.remove('cardProdutosHovered');
        principal.classList.remove('principalProdutos');
        // Restaura a opacidade dos outros cards
        cardCombos.style.opacity = '1';
        cardQuemSomos.style.opacity = '1';
    });
});
