<?php
session_start();
include 'php/conexion_be.php';

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
    alert("Debes iniciar sesión");
    window.location = "Pagina.php";
    </script>
    ';
    session_destroy();
    die();
}

$usuario = $_SESSION['usuario'];
$query = "SELECT id FROM usuarios WHERE Usuario='$usuario'";
$result = mysqli_query($conexion, $query);
$row = mysqli_fetch_assoc($result);
$usuario_id = $row['id'];

// Obtener compras del usuario en el mes actual
$month_start = date('Y-m-01');
$month_end = date('Y-m-t');
$compras_query = "SELECT * FROM compras WHERE usuario_id='$usuario_id' AND fecha_compra BETWEEN '$month_start' AND '$month_end'";
$compras_result = mysqli_query($conexion, $compras_query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus Compras</title>
    <link rel="stylesheet" href="./css/compras.css">

</head>
<body>
    <header>
        <!-- logo -->
        <a href="index.php">
            <img class="logo-nav" src="imagenes/Navegacion/logo_steam-limpio.png" alt="">
        </a>
        <!-- Barra de navegacion -->
        <nav>
            <ul>
                <div class="elemtosI">
                    <li>
                        <a href="htmls/perfil.html">
                            <img src="imagenes/Navegacion/perfil-unscreen.gif" alt="" width="35" height="35">Perfil
                        </a>
                    </li>
                    <li class="carrito-wrapper">
                        <a href="htmls/Carro.html">
                            <img src="imagenes/Navegacion/carro-de-la-compra-unscreen.gif" alt="" width="35" height="35">
                            <samp>Carrito</samp>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="htmls/ayuda.html">
                            <img src="imagenes/Navegacion/notificacion-unscreen.gif" alt="" width="35" height="35">Ayuda
                        </a>
                    </li> -->
                                    <li><a href="../crud.php">Cuenta</a></li>
                <li><a href="./php/cerrar_sesion.php"><img src="gif/icons8-bloquear-64.png" alt="" width="35" height="35">Cerrar sesion</a></li>
                <li>
    <a href="tus_compras.php"> Compras
</a>
</li>
                </div>
            </ul>
        </nav>
    </header>
    <div class="content">
        <h1>Tus Compras de Este Mes</h1>
        <?php if (mysqli_num_rows($compras_result) > 0) : ?>
            <ul>
                <?php while ($compra = mysqli_fetch_assoc($compras_result)) : ?>
                    <li>
                        <strong>Fecha:</strong> <?php echo $compra['fecha_compra']; ?>,
                        <strong>Total:</strong> $<?php echo $compra['total']; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else : ?>
            <p>No has realizado compras este mes.</p>
        <?php endif; ?>
    </div>
        <div id="particles-js"></div>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="./scritps.js"></script>
</body>
</html>

<?php mysqli_close($conexion); ?>