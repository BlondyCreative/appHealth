

<?php
$conexion = new mysqli("containers.railway.app", "railway", "DXeiVDXThGfNeGydBzTZvCIjUKtnNOgB", "railway", 3306);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conexion->prepare("SELECT password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($passwordSave);
    $stmt->fetch();

    // Verificar con password_verify
    if (password_verify($password, $passwordSave)) {
        session_start();
        $_SESSION['username'] = $username;
        
        header("Location: home.php");
        exit();
        
    } else {
        echo "<h3>⚠️ Password incorrecta</h3>";
    }
} else {
    echo "<h3>⚠️ Usuario no encontrado</h3>";
}

$stmt->close();
$conexion->close();
?>
