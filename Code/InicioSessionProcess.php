<?php
include("conexion.php");

if(isset($_POST['user']) && isset($_POST['pass'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM usuarios WHERE User='$user' AND Pass='$pass'";
    $result = mysqli_query($conexion, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $user_type = $row['Type']; // Obtener el tipo de usuario de la base de datos

        session_start();
        $_SESSION['user'] = $user;
        
        // Redirigir según el tipo de usuario
        if($user_type === 'Jefe') {
            header("Location: dashBoard.php"); // Redireccionar a la página del administrador
        } else if($user_type === 'Egresado') {
            header("Location: index.html"); // Redireccionar a la página del cliente
        } else {
            // Si el tipo de usuario no coincide con 'admin' o 'cliente', redirigir a una página por defecto
            header("Location: defaultDashboard.php");
        }
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Usuario o contraseña incorrectos, intentelo nuevamente");';
        echo 'window.location.href = "inicioDeSesion.php";';
        echo '</script>';
    }
} else {
    echo "Por favor ingrese usuario y contraseña";
}
?>
