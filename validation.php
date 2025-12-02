
<?php
$conexion = new mysqli("localhost", "root", "", "init");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$stmt = $conexion->prepare("SELECT contraseña FROM usuarios WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($contraseñaGuardada);
    $stmt->fetch();

    if ($contraseña === $contraseñaGuardada) {

       session_start();
        $_SESSION['usuario'] = $usuario;
        
        header("Location: home.php");
        exit();
        // header("Location: dashboard.php");
    } else {
        echo "<h3>⚠️ Contraseña incorrecta</h3>";
    }
} else {
    echo "<h3>⚠️ Usuario no encontrado</h3>";
}

$stmt->close();
$conexion->close();
?>
