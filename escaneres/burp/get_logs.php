<?php
// Conexión a la base de datos
$host = 'localhost';
$usuario = 'root';
$password = '';
$database = 'escaner';

$conn = new mysqli($host, $usuario, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT user, pass FROM burp WHERE 1";
$resultado = $conn->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
    echo "
    
    <table>
        <tr><th colspan='2'><h3>Numero de registros [$resultado->num_rows]</h3></th></tr>
        <tr>
            <th>Usuario</th>
            <th>Password</th>
        </tr>
    ";
    
    // Método 1c: Obtener como array indexado
    while ($fila = $resultado->fetch_array()) {
        echo "
        <tr>
            <td>$fila[0]</td>
            <td>$fila[1]</td>
        </tr>";
       
    }
    echo "</table>";
} else {
    echo "<table><tr><th>Sin registros</th></tr></table>";
}

// Cerrar conexión
$conn->close();

?>