<?php

include 'conexion_be.php';

$Usuario = $_POST['Usuario'];
$Correo = $_POST['Correo'];
$Contrasena = $_POST['Contrasena'];
$Contrasena = hash('sha512', $Contrasena);

$query ="INSERT INTO usuarios(Usuario,Correo,Contrasena) 
    VALUES('$Usuario','$Correo','$Contrasena')";


$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Usuario='$Usuario'");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo'
    <script>
        alert("Este usuario ya esta registrado");    
        window.location = "../Pagina.php";
    </script>
    ';
    exit();
}
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo='$Correo'");

if(mysqli_num_rows($verificar_correo) > 0){
    echo'
    <script>
        alert("Este correo ya esta registrado");    
        window.location = "../Pagina.php";
    </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo'
    <script>
    alert("Usuario almacenado exitosamente")
    window.location = "../Pagina.php";
    </script>
    ';
}else{
    echo'
    <script>
    alert("Intentelo de nuevo")
    window.location = "../Pagina.php";
    </script>
    ';
} 

mysqli_close($conexion);
?>