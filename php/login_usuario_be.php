<?php
session_start();
include 'conexion_be.php';

$Usuario = $_POST['Usuario'];
$Contrasena = $_POST['Contrasena'];
$Contrasena = hash('sha512', $Contrasena);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Usuario='$Usuario' and  Contrasena ='$Contrasena'");

if(mysqli_num_rows($validar_login) > 0){
$_SESSION['usuario'] = $Usuario;
    header ("location: ../carga.html");
    exit;
}else{
    echo'
    <script>
    alert("Usuario inexistente");
    window.location = "../Pagina.php";
    </script>
    ';
    exit;
}
?>