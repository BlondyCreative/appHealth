
<?php
$conexion = new mysqli("localhost", "root", "", "init");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$verificar = $conexion->prepare("SELECT id FROM usuarios WHERE usuario = ?");
$verificar->bind_param("s", $usuario);
$verificar->execute();
$verificar->store_result();

if ($verificar->num_rows > 0) {
    echo "<h3>⚠️ El usuario ya está registrado</h3>";
} else {
    $stmt = $conexion->prepare("INSERT INTO usuarios (usuario, contraseña) VALUES (?, ?)");
    $stmt->bind_param("ss", $usuario, $contraseña);
    if ($stmt->execute()) {
        // Redirige sin usar echo
        header("Location: index.php");
        exit();
    } else {
        echo "<h3>Error al registrar: " . $stmt->error . "</h3>";
    }
    $stmt->close();
}

$verificar->close();
$conexion->close();

?>
