<?php
include("conexion.php");

// Assuming the form method is POST, retrieve the entered username and password
if(isset($_POST['user']) && isset($_POST['pass'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // To prevent SQL injection, you should use prepared statements. Here's an example without prepared statements:
    $query = "SELECT * FROM usuarios WHERE User='$user' AND Pass='$pass'";
    $result = mysqli_query($conexion, $query);

    if(mysqli_num_rows($result) >= 1) {
        // If one row is returned, the user is authenticated
        session_start(); // Start a session
        $_SESSION['user'] = $user; // Store username in the session
        header("Location: dashBoard.php"); // Redirect to a dashboard or a welcome page
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Usuario o contraseña incorrectos, intentelo nuevamente");';
        echo 'window.location.href = "inicioDeSesion.php";';  // Redireccionar a index.html después del alert
        echo '</script>';
    }
} else {
    echo "Porfavor ingrese usuario y contraseña";
}
?>
