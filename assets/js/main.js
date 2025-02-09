document.addEventListener("DOMContentLoaded", function() {
    const cardCombos = document.getElementById('cardCombos');
    const cardQuemSomos = document.getElementById('cardQuemSomos');
    const cardProdutos = document.getElementById('cardProdutos');
    const principal = document.getElementById('principal');
    const video = document.getElementById('background-video');

    cardCombos.addEventListener('mouseenter', function() {
        cardCombos.classList.add('cardComboHovered');
        principal.classList.add('principalCombo');
        cardQuemSomos.style.opacity = '0';
        cardProdutos.style.opacity = '0';
    });
    cardCombos.addEventListener('mouseleave', function() {
        cardCombos.classList.remove('cardComboHovered');
        principal.classList.remove('principalCombo');
        cardQuemSomos.style.opacity = '1';
        cardProdutos.style.opacity = '1';
    });

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
        cardCombos.style.opacity = '1';
        cardProdutos.style.opacity = '1';
    });

    cardProdutos.addEventListener('mouseenter', function() {
        cardProdutos.classList.add('cardProdutosHovered');
        principal.classList.add('principalProdutos');
        video.src = './img/produtos.mp4';
        video.play();
        cardCombos.style.opacity = '0';
        cardQuemSomos.style.opacity = '0';
    });
    cardProdutos.addEventListener('mouseleave', function() {
        cardProdutos.classList.remove('cardProdutosHovered');
        principal.classList.remove('principalProdutos');
        video.src = '';
        cardCombos.style.opacity = '1';
        cardQuemSomos.style.opacity = '1';
    });
});

