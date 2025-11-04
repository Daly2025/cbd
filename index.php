<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda CBD - Inicio</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .navbar { background-color: #333; overflow: hidden; position: relative; z-index: 10; }
        .navbar a { float: left; display: block; color: white; text-align: center; padding: 14px 20px; text-decoration: none; }
        .navbar a:hover { background-color: #ddd; color: black; }
        .hero-section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 50px); /* Ajusta la altura para que el navbar no lo cubra */
            background-color: #000; /* Fondo negro como en la imagen */
            padding: 20px;
            box-sizing: border-box;
        }
        .hero-section img {
            max-width: 90%; /* Para que el logo no se salga de los bordes en pantallas pequeñas */
            max-height: 90vh; /* Limita la altura para que no sea excesiva */
            object-fit: contain; /* Asegura que la imagen se ajuste sin recortarse */
        }
        .container {
            padding: 20px;
            background-color: #f4f4f4; /* Fondo del contenido */
            position: relative;
            z-index: 10;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="index.php">Inicio</a>
        <a href="shop.php">Tienda</a>
        <a href="contact.php">Contacto</a>
    </div>

    <div class="hero-section">
        <img src="img/logo.jpg" alt="Logo Tienda CBD">
    </div>

    <div class="container">
        <h1>Bienvenido a nuestra Tienda CBD</h1>
        <p>Aquí encontrarás los mejores productos de CBD de alta calidad.</p>
        <p>Explora nuestra tienda para ver todos los productos disponibles.</p>
    </div>
</body>
</html>