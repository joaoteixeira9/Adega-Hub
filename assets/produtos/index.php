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
                            echo "<img id='img-{$l['id']}' src='/Adega-Hub/img/" . $l['nome'] .".png' alt='Imagens de bebidas' class='itemImg'>";
                            echo "<p id='preco-{$l['id']}'>R$ " . $l['preco_formatado'] . "</p>"; // Corrigido o ID do preço
                        echo "</div>";
                        echo "<div class='btn-container'><button type='button' class='botao-carrinho btn btn-outline-dark' data-id='{$l['id']}'>Adicionar ao carrinho</button></div>"; // Corrigido o atributo data-id
                    echo "</li>";
                }
            echo "</ol>";
            mysqli_close($conexao);
        ?>
    </section>
</div>
<script src="./produtos.js"></script>
<?php include "../php/footer.php"; ?>