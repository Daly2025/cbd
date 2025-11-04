<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda CBD - Carrito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Bienstar CBD</a>
            <div class="navbar-nav">
                <a class="nav-link" href="index.php">Inicio</a>
                <a class="nav-link" href="shop.php">Tienda</a>
                <a class="nav-link active" href="carrito.php">Carrito</a>
                <a class="nav-link" href="contact.php">Contacto</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="mb-4">Tu Carrito de Compras</h1>
        <?php if (empty($_SESSION['cart'])): ?>
            <div class="alert alert-info">Tu carrito está vacío.</div>
        <?php else:
            $total = 0;
        ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $id => $details):
                        $subtotal = $details['price'] * $details['quantity'];
                        $total += $subtotal;
                    ?>
                        <tr>
                            <td><?php echo htmlspecialchars($details['name']); ?></td>
                            <td>$<?php echo number_format($details['price'], 2); ?></td>
                            <td><?php echo $details['quantity']; ?></td>
                            <td>$<?php echo number_format($subtotal, 2); ?></td>
                            <td><a href="#" class="btn btn-danger btn-sm">Eliminar</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="text-end">
                <h3>Total: $<?php echo number_format($total, 2); ?></h3>
                <a href="#" class="btn btn-primary">Finalizar Compra</a>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>