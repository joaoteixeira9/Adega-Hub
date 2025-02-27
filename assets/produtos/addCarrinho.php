<?php
session_start();

if (isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['preco'])) {
    $produto_id = $_POST['id'];
    $produto_nome = $_POST['nome'];
    $produto_preco = $_POST['preco'];

    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    if (isset($_SESSION['carrinho'][$produto_id])) {
        $_SESSION['carrinho'][$produto_id]['quantidade']++;
    } else {
        $_SESSION['carrinho'][$produto_id] = [
            'id' => $produto_id,
            'nome' => $produto_nome,
            'preco' => $produto_preco,
            'quantidade' => 1
        ];
    }

    header("Location: /Adega-hub/assets/produtos");
    exit();
} else {
    header("Location: /Adega-hub/assets/produtos");
    exit();
}
?>