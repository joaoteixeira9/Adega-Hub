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
                            echo "<p>" . $l['nome'] . "</p>";
                            echo "<img src='/Adega-Hub/img/" . $l['nome'] .".png' alt='Imagens de bebidas' class='itemImg'>";
                            echo "<p>R$ " . $l['preco_formatado'] . "</p>";
                        echo "</div>";
                        echo "<div class='btn-container'><button type='button' class='botao-carrinho btn btn-outline-dark'>Adicionar ao carrinho</button></div>";
                    echo "</li>";
                }
            echo "</ol>";
            mysqli_close($conexao);
        ?>
    </section>
</div>
<?php include "../php/footer.php"; ?>