<?php
$conexion = new mysqli("containers.railway.app", "railway", "DXeiVDXThGfNeGydBzTZvCIjUKtnNOgB", "railway", 3306);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

// Cifrar la contraseña
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Verificar si el usuario ya existe
$verificar = $conexion->prepare("SELECT username FROM users WHERE username = ?");
$verificar->bind_param("s", $username);
$verificar->execute();
$verificar->store_result();

if ($verificar->num_rows > 0) {
    echo "<h3>⚠️ El usuario ya está registrado</h3>";
} else {
    // Insertar el nuevo usuario
    $stmt = $conexion->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashedPassword);

    if ($stmt->execute()) {
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

