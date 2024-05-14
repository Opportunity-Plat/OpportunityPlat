<?php
session_start();
include("conexion.php");

if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];

    // Realiza una consulta para obtener el tipo de usuario y los datos del usuario
    $query = "SELECT User, Pass, Nombre, Apellidos, UniversidadE, AñoE FROM usuarios WHERE User='$user'";
    $result = mysqli_query($conexion, $query);

    if($result) {
        $row = mysqli_fetch_assoc($result);
        // Verificar si el usuario es 'Egresado'
        if($row) {
            // Mostrar los datos del usuario 'Egresado'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Linkeado con hojas de estilos-->
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <!--titulo de pestaña-->
    <title>Egresado</title>
    <!-- Añade tus scripts y estilos aquí -->
</head>
<body style="background-color: rgb(2, 13, 31);">
    <div id="header-placeholder"></div>
    <!--uso de javascript para cargar la barra de navegacion-->
    <script>
        // Carga el encabezado desde header.html en #header-placeholder
        fetch("comun.php")
            .then(response => response.text())
            .then(data => {
                document.getElementById('header-placeholder').innerHTML = data;
            });
    </script>

    <div class="container">
        <h2 style="font-size: 50px;">Perfil de <?php echo $row['User']; ?></h2>
        <p style="font-size: 20px;">Nombre: <?php echo $row['Nombre']; ?></p>
        <p style="font-size: 20px;">Apellidos: <?php echo $row['Apellidos']; ?></p>
        <p style="font-size: 20px;">Universidad de Egreso: <?php echo $row['UniversidadE']; ?></p>
        <p style="font-size: 20px;">Año de Egreso: <?php echo $row['AñoE']; ?></p>
        <!-- Muestra el resto de la información del usuario -->
    </div>
</body>
</html>
<?php
        } else {
            echo "No se encontró información del usuario.";
        }
    } else {
        // Manejar errores de consulta si es necesario
        echo "Error en la consulta";
    }
} else {
    header("Location: inicioDeSesion.php");
    exit();
}
?>
