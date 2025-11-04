<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda CBD - Sobre Nosotros</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            margin: 0;
            padding: 0;
            background-image: url('img/fondosb.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #fff; /* Cambiado a blanco para mejor contraste */
        }
        .navbar { background-color: rgba(0,0,0,0.7); overflow: hidden; }
        .navbar a { float: left; display: block; color: white; text-align: center; padding: 14px 20px; text-decoration: none; }
        .navbar a:hover { background-color: #555; color: white; }
        .container {
            padding: 40px;
            max-width: 800px;
            margin: 40px auto;
            background-color: rgba(0, 0, 0, 0.7); /* Fondo oscuro semitransparente */
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
        }
        h1 { 
            color: #4CAF50; /* Verde */
            text-align: center;
            font-size: 2.5em;
        }
        p, li { 
            line-height: 1.8; 
            font-size: 1.1em;
        }
        .back-to-home-button {
            display: block;
            width: 100px;
            height: 100px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            text-align: center;
            line-height: 100px;
            margin: 40px auto 0;
            border-radius: 50% 10% 50% 10%; /* Forma de hoja simple */
            transform: rotate(-45deg);
            transition: transform 0.3s, background-color 0.3s;
        }
        .back-to-home-button:hover {
            background-color: #45a049;
            transform: rotate(0deg) scale(1.1);
        }
        .button-text {
            transform: rotate(45deg);
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="index.php">Inicio</a>
        <a href="shop.php">Tienda</a>
        <a href="contact.php">Contacto</a>
    </div>

    <div class="container">
        <h1>Bienstar: tu espacio de equilibrio natural</h1>
        <p>En Bienstar creemos que el bienestar empieza con pequeños gestos diarios. Por eso seleccionamos productos de CBD que te acompañan a sentirte más en calma, con más equilibrio y conectado contigo mismo.</p>
        <ul>
            <li><strong>Natural y transparente:</strong> cada producto cuenta con análisis de calidad que garantizan pureza y confianza.</li>
            <li><strong>Bienestar real:</strong> fórmulas pensadas para ayudarte a relajar, cuidar tu piel y armonizar tu día a día.</li>
            <li><strong>Fácil de integrar:</strong> aceites, cremas y otros formatos que se adaptan a tu estilo de vida.</li>
        </ul>
        <p>Con Bienstar, tu rutina se transforma en un ritual de cuidado y equilibrio.</p>
        <p>Porque bienestar no es un lujo: es tu punto de partida.</p>
        
        <a href="index.php" class="back-to-home-button">
            <span class="button-text">Inicio</span>
        </a>
    </div>
</body>
</html>