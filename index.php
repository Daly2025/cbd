<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda CBD - Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        /* Estilos para el submenú desplegable */
        .dropdown { float: left; overflow: hidden; }
        .dropdown .dropbtn { font-size: 16px; border: none; outline: none; color: white; padding: 14px 20px; background-color: inherit; font-family: inherit; margin: 0; }
        .navbar a:hover, .dropdown:hover .dropbtn { background-color: #ddd; color: black; }
        .dropdown-content { display: none; position: absolute; background-color: #f9f9f9; min-width: 160px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); z-index: 1; }
        .dropdown-content a { float: none; color: black; padding: 12px 16px; text-decoration: none; display: block; text-align: left; }
        .dropdown-content a:hover { background-color: #ddd; }
        .dropdown:hover .dropdown-content { display: block; }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="dropdown">
            <button class="dropbtn">Inicio
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="flores.php">Flores</a>
                <a href="resinas.php">Resinas</a>
                <a href="vapers.php">Vapers</a>
                <a href="aceites_cremas.php">Aceites y Cremas</a>
                <a href="#sobre-nosotros">Sobre Nosotros</a>
            </div>
        </div>
        <a href="shop.php">Tienda</a>
        <a href="contact.php">Contacto</a>
    </div>

    <div class="hero-section">
        <img src="img/logo.jpg" alt="Logo Tienda CBD">
    </div>

</body>
</html>