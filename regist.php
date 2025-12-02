
<?php
$conexion = new mysqli("containers.railway.app", "railway", "DXeiVDXThGfNeGydBzTZvCIjUKtnNOgB", "railway", 3306);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$verificar = $conexion->prepare("SELECT id FROM users WHERE username = ?");
$verificar->bind_param("s", $username);
$verificar->execute();
$verificar->store_result();

if ($verificar->num_rows > 0) {
    echo "<h3>⚠️ El usuario ya está registrado</h3>";
} else {
    $stmt = $conexion->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
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
