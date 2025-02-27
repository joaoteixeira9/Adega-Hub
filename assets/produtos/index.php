<?php 
    include "../php/header.php";
    include "../php/conexao.php"; 
?>

<div class="caixaProdutos d-flex justify-content-center text-center">
    <section class="produtos w-75">
        <?php
        $sql = "SELECT id, nome, descricao, REPLACE(preco, '.', ',') AS preco_formatado FROM bebidas";
        $res = mysqli_query($conexao, $sql);

        echo "<ol class='bebidasItem'>";
            while ($l = mysqli_fetch_assoc($res)) {
                echo "<li class='item text-dark border border-dark border-2'>";
                    echo "<div class='item-content'>";
                        echo "<p id='nome-{$l['id']}'>" . $l['nome'] . "</p>";
                        echo "<img id='img-{$l['id']}' src='/Adega-Hub/img/" . $l['nome'] . ".png' alt='Imagem de bebidas' class='itemImg'>";
                        echo "<p id='preco-{$l['id']}'>R$ " . $l['preco_formatado'] . "</p>";
                    echo "</div>";

                    // Adiciona um formulário para enviar o ID do produto
                    echo "<form action='./addCarrinho.php' method='post'>";
                        echo "<input type='hidden' name='id' value='{$l['id']}'>";
                        echo "<input type='hidden' name='nome' value='{$l['nome']}'>";
                        echo "<input type='hidden' name='preco' value='" . str_replace(',', '.', $l['preco_formatado']) . "'>";
                        echo "<div class='btn-container'><button type='submit' class='botao-carrinho btn btn-outline-success'>Adicionar ao Carrinho</button></div>";
                    echo "</form>";
                echo "</li>";
            }
        echo "</ol>";

        // Fecha a conexão com o banco
        mysqli_close($conexao);
        ?>
    </section>
</div>

<?php include "../php/footer.php"; ?>