<?php
    $usuario=$_POST['usuario'];
    $usuario =htmlspecialchars($usuario);
    $usuario=htmlentities($usuario);

    $password=$_POSTpassword=$_POST['password'];
    $password=htmlspecialchars( $password);
    $password=htmlentities($password);

    $herramienta="openvas";
    
    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "escaner");

    // Verificar conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    // Prevenir inyección SQL
    $usuario = $conexion->real_escape_string($usuario);
    $password = $conexion->real_escape_string($password);
    $herramienta = $conexion->real_escape_string($herramienta);

    // Insertar datos
    $sql = "INSERT INTO zap (user, pass) VALUES ('$usuario', '$password')";

    if ($conexion->query($sql) === TRUE) {
        echo "Usuario registrado exitosamente";
    } else {
        echo "Error: " . $conexion->error;
    }

    // Cerrar conexión
    $conexion->close();    
    header("Location:http://192.168.190.242/escaneres/zap");
?>