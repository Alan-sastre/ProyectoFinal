<?php
$conexion= mysqli_connect("127.0.0.1","root","","login_register_db");
if($conexion){
    echo'Conectado exitosamente a la base de datos';
}else{
    echo'No se a podido conectar a la base de datos';
}
?>