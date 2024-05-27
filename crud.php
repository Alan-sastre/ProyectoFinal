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

// Obtener información del usuario
$query = "SELECT * FROM usuarios WHERE Usuario='$usuario'";
$result = mysqli_query($conexion, $query);
$row = mysqli_fetch_assoc($result);

// Procesar formulario de cambio de contraseña
if (isset($_POST['cambiar_contrasena'])) {
    $nueva_contrasena = $_POST['nueva_contrasena'];
    $nueva_contrasena_hashed = hash('sha512', $nueva_contrasena);

    $update_query = "UPDATE usuarios SET Contrasena='$nueva_contrasena_hashed' WHERE Usuario='$usuario'";
    if (mysqli_query($conexion, $update_query)) {
        echo '
        <script>
        alert("Contraseña actualizada
con éxito");
window.location = "crud.php";
</script>
';
} else {
echo '
<script>
alert("Error al actualizar la contraseña");
window.location = "crud.php";
</script>
';
}
}

// Procesar solicitud de eliminación de cuenta
if (isset($_POST['eliminar_cuenta'])) {
$delete_query = "DELETE FROM usuarios WHERE Usuario='$usuario'";
if (mysqli_query($conexion, $delete_query)) {
session_destroy();
echo '
<script>
alert("Cuenta eliminada con éxito");
window.location = "Pagina.php";
</script>
';
} else {
echo '
<script>
alert("Error al eliminar la cuenta");
window.location = "crud.php";
</script>
';
}
}

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeysGaming</title>
    <link rel="stylesheet" href="./css/crud.css">
    <link rel="shortcut icon" href="/imagenes/Navegacion/logo_steam-limpio.png">
        <style>
 body {
            margin: 0;
            font: normal 75% Arial, Helvetica, sans-serif;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin-top: 60px; /* Espacio para la barra de navegación */
        }
        .content {
            text-align: center;
            max-width: 600px; /* Ancho máximo del contenido */
            padding: 20px;
            background-color: transparent; /* Fondo semi-transparente */
            border-radius: 10px;
        }
        /* Estilos para hacer los botones transparentes */
        .form-container button {
            background-color: transparent;
            border: 2px solid white;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 5px;
            margin-top: 10px;
        }
        .form-container button:hover {
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
           <body>
    <div class="container">
        <header>
            <!-- logo -->
            <a href="./index.php">
                <img class="logo-nav" src="./imagenes/Navegacion/logo_steam-limpio.png" alt="">
            </a>
            <!-- Barra de navegacion -->
            <nav>
                <ul>
                    <div class="elemtosI">
                        <li><a href="./htmls/perfil.html"><img src="./imagenes/Navegacion/perfil-unscreen.gif" alt="" width="35" height="35">Perfil</a></li>
                        <li class="carrito-wrapper">
                            <a href="./htmls/Carro.html" id="carrito-link"><img src="./imagenes/Navegacion/carro-de-la-compra-unscreen.gif" alt="" width="35" height="35">
                                <samp id="carrito-count">0</samp></a>
                        </li>
                        <li><a href="../crud.php">Cuenta</a></li>
                        <li><a href="./php/cerrar_sesion.php"><img src="gif/icons8-bloquear-64.png" alt="" width="35" height="35">Cerrar sesion</a></li>
                        <li><a href="tus_compras.php">Compras</a></li>
                    </div>
                </ul>
            </nav>
        </header>

        <div class="content">
            <h1>Gestión de Cuenta</h1>
            <p>Usuario: <?php echo htmlspecialchars($row['Usuario']); ?></p>
            <form class="form-container" method="POST" action="crud.php">
                <h2>Cambiar Contraseña</h2>
                <label for="nueva_contrasena">Nueva Contraseña:</label>
                <input type="password" name="nueva_contrasena" required>
                <button type="submit" name="cambiar_contrasena">Cambiar Contraseña</button>
            </form>
            <form class="form-container" method="POST" action="crud.php">
                <h2>Eliminar Cuenta</h2>
                <button type="submit" name="eliminar_cuenta" onclick="return confirm('¿Estás seguro de que quieres eliminar tu cuenta? Esta acción no se puede deshacer.');">Eliminar Cuenta</button>
            </form>
            <a href="index.php">Volver al Inicio</a>
        </div>
    </div>

    <div id="particles-js"></div>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="scritps.js"></script>
</body>
</html>

        </header>

        <!-- Contenedor del contenido principal -->
        <div class="content">
            <h1>Gestión de Cuenta</h1>
            <p>Usuario: <?php echo htmlspecialchars($row['Usuario']); ?></p>
            <form class="form-container" method="POST" action="crud.php">
                <h2>Cambiar Contraseña</h2>
                <label for="nueva_contrasena">Nueva Contraseña:</label>
                <input type="password" name="nueva_contrasena" required>
                <button type="submit" name="cambiar_contrasena">Cambiar Contraseña</button>
            </form>
            <form class="form-container" method="POST" action="crud.php">
                <h2>Eliminar Cuenta</h2>
                <button type="submit" name="eliminar_cuenta" onclick="return confirm('¿Estás seguro de que quieres eliminar tu cuenta? Esta acción no se puede deshacer.');">Eliminar Cuenta</button>
            </form>
            <a href="index.php">Volver al Inicio</a>
        </div>
    </div>

    <div id="particles-js"></div>
    <script src="scripts.js"></script>
</body>
</html>
Con este código, todo el contenido principal estará centrado verticalmente en la página y tendrá un margen superior para dejar espacio debajo de la barra de navegación. Ajusta los estilos CSS según tus necesidades específicas de diseño.








</head>

