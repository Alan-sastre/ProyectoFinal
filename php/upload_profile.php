<?php
$conexion = mysqli_connect("127.0.0.1", "root", "", "login_register_db");
if (!$conexion) {
    die('No se ha podido conectar a la base de datos: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];

    // Verificar si el archivo fue subido
    if (isset($_FILES['profile-picture']) && $_FILES['profile-picture']['error'] === UPLOAD_ERR_OK) {
        $profilePicture = $_FILES['profile-picture'];
        $fileTmpPath = $profilePicture['tmp_name'];
        $fileName = $profilePicture['name'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Verificar extensión de archivo
        $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg');
        if (in_array($fileExtension, $allowedfileExtensions)) {
            $uploadFileDir = '../imagenes/perfiles/'; // Asegúrate de que este directorio exista y tenga permisos de escritura
            $dest_path = $uploadFileDir . $fileName;

            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                $sql = "INSERT INTO perfiles (nombre, imagen) VALUES ('$name', '$dest_path')";

                if (mysqli_query($conexion, $sql)) {
                    echo "Perfil guardado exitosamente.";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
                }
            } else {
                echo 'Error moviendo el archivo subido';
            }
        } else {
            echo 'Tipo de archivo no permitido';
        }
    } else {
        echo 'No se ha subido ningún archivo o hubo un error en la subida del archivo.';
    }
}
// Verificar si el directorio de destino existe, si no, crearlo
$uploadFileDir = '../imagenes/perfiles/';
if (!file_exists($uploadFileDir)) {
    mkdir($uploadFileDir, 0777, true); // Crea el directorio recursivamente con permisos de escritura
}



mysqli_close($conexion);
?>
