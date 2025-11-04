<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda CBD - Productos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .navbar { background-color: #333; overflow: hidden; }
        .navbar a { float: left; display: block; color: white; text-align: center; padding: 14px 20px; text-decoration: none; }
        .navbar a:hover { background-color: #ddd; color: black; }
        .container { padding: 20px; }
        .submenu { background-color: #eee; overflow: hidden; padding: 10px 0; margin-bottom: 20px; }
        .submenu a { float: left; display: block; color: #333; text-align: center; padding: 10px 15px; text-decoration: none; }
        .submenu a:hover { background-color: #ddd; }
        
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
    </div>

    <?php
        // Incluir el contenido de flores.php por defecto
        include 'flores.php';
    ?>

</body>
</html>