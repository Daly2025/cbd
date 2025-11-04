<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $quantity = 1; // Por ahora, añadimos uno a la vez

    if (isset($_SESSION['cart'][$productId])) {
        // Si el producto ya está en el carrito, incrementa la cantidad
        $_SESSION['cart'][$productId]['quantity'] += $quantity;
    } else {
        // Si no, añade el producto al carrito
        $_SESSION['cart'][$productId] = [
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => $quantity
        ];
    }
}

// Redirigir de vuelta a la página de la tienda
header('Location: shop.php');
exit();
?>