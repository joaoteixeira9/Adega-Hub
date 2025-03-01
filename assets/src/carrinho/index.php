<?php
session_start();
include "../../includes/header.php";
?>

<div class="carrinho container mt-5">
    <h1 class="text-center mb-4 mt-5">Seu carrinho de compras</h1>

    <?php if (isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0) { ?>
        <div class="row">
            <?php
            $totalGeral = 0;
            foreach ($_SESSION['carrinho'] as $item) {
                $totalProduto = $item['preco'] * $item['quantidade'];
                $totalGeral += $totalProduto;
            ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($item['nome']); ?></h5>
                            <p class="card-text ">Quantidade: <?php echo $item['quantidade']; ?></p>
                            <p class="card-text">Preço Unitário: R$ <?php echo number_format($item['preco'], 2, ',', '.'); ?></p>
                            <p class="card-text">Total: R$ <?php echo number_format($totalProduto, 2, ',', '.'); ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="/Adega-Hub/assets/src/produtos" class="btn btn-primary btn-sm">Continuar Comprando</a>
                                <form action="/Adega-Hub/assets/src/carrinho/rmvCarrinho.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                                    <button type="submit" class="btn btn-danger btn-sm">Remover</button>
                                </form>0
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-4">
            <h3>Total geral: R$ <?php echo number_format($totalGeral, 2, ',', '.'); ?></h3>
            <a href="../finalizarCompras/" class="btn btn-success btn-ml">Finalizar compra</a>
        </div>
    <?php } else { ?>
        <p class="text-center">Seu carrinho está vazio.</p>
        <div class="text-center">
            <a href="/Adega-Hub/assets/src/produtos" class="btn btn-outline-primary">Voltar para os produtos</a>
        </div>
    <?php } ?>
</div>

<?php
include "../../includes/footer.php";
?>