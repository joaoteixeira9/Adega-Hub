<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/Adega-Hub/assets/css/style.css">
    <title>Adega Hub</title>
</head>
<body>
    <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $numeroItensCarrinho = 0;

        if (isset($_SESSION['carrinho'])) {
            foreach ($_SESSION['carrinho'] as $produto) {
                $numeroItensCarrinho += $produto['quantidade'];
            }
        }
    ?>
    <header class="">
        <nav class="menu-navegacao">
            <a href="/Adega-Hub" class="logo">
                <p>Adega Hub</p>
            </a>
            <ul class="menu">
                <li><a href="/Adega-Hub/">Início</a></li>
                <li><a href="/Adega-Hub/assets/src/produtos">Produtos</a></li>
                <li><a href="/Adega-Hub/assets/src/contato">Contato</a></li>
            </ul>
            <ul class="menu-icons">
                <li><a href="#" class="selecionado"><i class="bi bi-search"></i></a></li>
                <li><a href="#"><i class="bi bi-heart"></i></a></li>
                <li>
                    <a href="/Adega-Hub/assets/src/carrinho" class="position-relative">
                        <i class="bi bi-cart3"></i>
                        <span class="position-absolute translate-middle badge rounded-circle bg-danger text-white p-1" id="contador-carrinho">
                            <?php
                            echo $numeroItensCarrinho;
                            ?>
                        </span>
                    </a>
                </li>
                <li><a href="#"><i class="bi bi-person-circle"></i></a></li>
            </ul>
        </nav>
    </header>