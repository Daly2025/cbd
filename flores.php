<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda CBD - Flores</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .navbar { background-color: #333; overflow: hidden; }
        .navbar a { float: left; display: block; color: white; text-align: center; padding: 14px 20px; text-decoration: none; }
        .navbar a:hover { background-color: #ddd; color: black; }
        .navbar .cart-icon {
            float: right;
            color: white;
            padding: 14px 20px;
            position: relative; /* Para posicionar el contador */
        }
        .navbar .cart-count {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 10px;
        }
        .container { padding: 20px; }
        .submenu { background-color: #eee; overflow: hidden; padding: 10px 0; margin-bottom: 20px; }
        .submenu a { float: left; display: block; color: #333; text-align: center; padding: 10px 15px; text-decoration: none; }
        .submenu a:hover { background-color: #ddd; }
        .back-to-shop-button { 
            display: inline-block; 
            margin-top: 20px; 
            padding: 10px 20px; 
            background-color: #007bff; 
            color: white; 
            text-decoration: none; 
            border-radius: 5px; 
        }
        .back-to-shop-button:hover { 
            background-color: #0056b3; 
        }
        /* Estilos para las tarjetas de producto */
        .product-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; }
        .product-card { background-color: white; border: 1px solid #ddd; border-radius: 8px; padding: 15px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .product-card img { max-width: 100%; height: auto; border-radius: 4px; margin-bottom: 10px; }
        .product-card h3 { font-size: 1.2em; margin-bottom: 5px; }
        .product-card p { font-size: 0.9em; color: #666; margin-bottom: 10px; }
        .product-card .price { font-size: 1.1em; color: #333; font-weight: bold; margin-bottom: 10px; }
        .product-card .add-to-cart { background-color: #28a745; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer; text-decoration: none; display: inline-block; }
        .product-card .add-to-cart:hover { background-color: #218838; }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="index.php">Inicio</a>
        <a href="shop.php">Tienda</a>
        <a href="contact.php">Contacto</a>
        <a href="carrito.php" class="cart-icon">
            <i class="fas fa-shopping-cart"></i>
            <?php 
                $cart_count = 0;
                if(isset($_SESSION['cart'])) {
                    foreach($_SESSION['cart'] as $item) {
                        $cart_count += $item['quantity'];
                    }
                }
                if ($cart_count > 0) {
                    echo '<span class="cart-count">' . $cart_count . '</span>';
                }
            ?>
        </a>
    </div>

    <div class="container">
        <h1>Flores CBD</h1>
        <p>Aquí encontrarás nuestra selección de flores CBD de alta calidad.</p>
        
        <div class="submenu">
            <a href="flores.php">Flores</a>
            <a href="resinas.php">Resinas</a>
            <a href="aceites_cremas.php">Aceites y Cremas</a>
            <a href="vapers.php">Vapers</a>
        </div>

        <div class="product-grid">
            <!-- 20 Productos de ejemplo para Flores CBD -->
            <?php for ($i = 1; $i <= 20; $i++): 
                $product_id = 'flor_' . $i;
                $product_name = 'Flor CBD Ejemplo ' . $i;
                $product_price = rand(15, 50);
            ?>
                <div class="product-card">
                    <img src="img/flor_cbd_<?php echo $i; ?>.jpg" alt="<?php echo $product_name; ?>">
                    <h3><?php echo $product_name; ?></h3>
                    <p>Descripción de la flor CBD número <?php echo $i; ?>.</p>
                    <div class="price"><?php echo $product_price; ?>,00 €</div>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $product_name; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $product_price; ?>">
                        <button type="submit" class="add-to-cart">Añadir a la cesta</button>
                    </form>
                </div>
            <?php endfor; ?>
        </div>
        <p><a href="shop.php" class="back-to-shop-button">Volver a la Tienda</a></p>
    </div>
</body>
</html>