<?php
session_start();
include 'conexion_be.php';

if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
    alert("Debes iniciar sesión");
    window.location = "../Pagina.php";
    </script>
    ';
    session_destroy();
    die();
}

$usuario = $_SESSION['usuario'];
$query = "SELECT id FROM usuarios WHERE Usuario='$usuario'";
$result = mysqli_query($conexion, $query);

if (!$result) {
    $error = mysqli_error($conexion);
    echo '
    <script>
    alert("Error al obtener el ID del usuario: ' . $error . '");
    window.location = "../htmls/Carro.html";
    </script>
    ';
    die();
}

$row = mysqli_fetch_assoc($result);
$usuario_id = $row['id'];

$nombre_completo = $_POST['nombre_completo'];
$numero_tarjeta = $_POST['numero_tarjeta'];
$fecha_caducidad = $_POST['fecha_caducidad'];
$cvv = $_POST['cvv'];
$total_compra = 100; // Aquí deberías calcular el total de la compra

$query = "INSERT INTO compras (usuario_id, nombre_completo, numero_tarjeta, fecha_caducidad, cvv, total, fecha_compra)
          VALUES ('$usuario_id', '$nombre_completo', '$numero_tarjeta', '$fecha_caducidad', '$cvv', '$total_compra', NOW())";

if (mysqli_query($conexion, $query)) {
    echo '
    <script>
    alert("Compra realizada con éxito");
    console.log("Compra exitosa");
    window.location = "../index.php";
    </script>
    ';
} else {
    $error = mysqli_error($conexion);
    echo '
    <script>
    alert("Error al realizar la compra: ' . $error . '");
    console.log("Error en la compra: ' . $error . '");
    window.location = "../htmls/Carro.html";
    </script>
    ';
}

mysqli_close($conexion);
?>