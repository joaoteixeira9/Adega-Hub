<?php
session_start();

if (isset($_POST['id'])) {
    $produto_id = $_POST['id'];

    if (isset($_SESSION['carrinho'][$produto_id])) {
        $_SESSION['carrinho'][$produto_id]['quantidade']--;
        
        if ($_SESSION['carrinho'][$produto_id]['quantidade'] <= 0) {
            unset($_SESSION['carrinho'][$produto_id]);
        }
    }

    header("Location: /Adega-hub/assets/src/carrinho");
    exit();
} else {
    header("Location: /Adega-hub/assets/src/carrinho");
    exit();
}
?>