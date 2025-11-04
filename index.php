<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda CBD - Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #000;
            color: white;
            overflow: hidden; /* Evita el scroll */
        }
        .main-container {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        .hero-section {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000;
        }
        .hero-section img {
            max-width: 90%;
            max-height: 70vh; /* Ajusta la altura máxima del logo */
            object-fit: contain;
        }
        .footer {
            background-color: #333;
            padding: 15px 0;
        }
        .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 20px;
            text-decoration: none;
        }
        .social-icons a:hover {
            color: #ddd;
        }
    </style>
</head>
<body class="h-100">

    <div class="main-container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Inicio
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="flores.php">Flores</a></li>
                        <li><a class="dropdown-item" href="resinas.php">Resinas</a></li>
                        <li><a class="dropdown-item" href="vapers.php">Vapers</a></li>
                        <li><a class="dropdown-item" href="aceites_cremas.php">Aceites y Cremas</a></li>
                        <li><a class="dropdown-item" href="sobre_nosotros.php">Sobre Nosotros</a></li>
                    </ul>
                </div>
                <div class="navbar-nav">
                    <a class="nav-link" href="shop.php">Tienda</a>
                    <a class="nav-link" href="contact.php">Contacto</a>
                </div>
            </div>
        </nav>

        <div class="hero-section">
            <img src="img/logo.jpg" alt="Logo Tienda CBD" class="img-fluid">
        </div>

        <footer class="footer text-center">
            <div class="social-icons mb-2">
                <a href="https://www.instagram.com/bienstarcbd?igsh=MWFkaDkxdW5pbTRwbA==" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://www.facebook.com/share/1FEuUMKiQZ/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://x.com/BienstarCBD?t=8Zpt-NtUjXYlF1csC6C9uA&s=09" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.tiktok.com/@bienestar.cbd?_r=1&_t=ZN-91791vvzJ26" target="_blank"><i class="fa fa-tiktok"></i></a>
            </div>
            <p class="mb-0">&copy; 2025 Bienstar CBD. Todos los derechos reservados.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>