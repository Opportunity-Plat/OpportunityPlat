<?php
session_start();
include("conexion.php");

index = "{{ url_for('web.index')}}"

if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];

    // Realiza una consulta para obtener el tipo de usuario
    $query = "SELECT Type FROM usuarios WHERE User='$user'";
    $result = mysqli_query($conexion, $query);

    if($result) {
        $row = mysqli_fetch_assoc($result);
        $user_type = $row['Type'];

        // Verificar si el usuario es 'Jefe de Carrera'
        if($user_type !== 'Jefe') {
            // Mostrar un mensaje de error utilizando JavaScript
            echo '<script type="text/javascript">';
            echo 'alert("Acceso denegado. Tipo de usuario inválido.");';
            echo 'window.location.href = index;'; // Redirigir a la página de inicio de sesión
            echo '</script>';
            exit();
        }
    } else {
        // Manejar errores de consulta si es necesario
        echo "Error en la consulta";
        exit();
    }
} else {
    header("Location: {{url_for('web.login')}}");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Linkeado con hojas de estilos-->
    <link rel="stylesheet" type="text/css" media="screen" href="../static/assets/css/style.css">
    <!--titulo de pestaña-->
    <title>OpportunityPlat</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<body style="background-color: rgb(2, 13, 31);">
    <div id="header-placeholder"></div>
    <!--uso de javascript para cargar la barra de navegacion-->
    <script>
        // Carga el encabezado desde header.html en #header-placeholder
        fetch("{{url_for('web.comun')}}")
            .then(response => response.text())
            .then(data => {
                document.getElementById('header-placeholder').innerHTML = data;
            });
        
    </script>
    
   
    <iframe title="Report Section" width="100%" height="852px" 
    src="https://app.powerbi.com/view?r=eyJrIjoiYmJjMzEwYjctODcwZC00Y2RkLWE1OWYtOTJiMmRiNjMyMTFiIiwidCI6Ijk5ZjdiNTVlLTljYmUtNDY3Yi04MTQzLTkxOTc4MjkxOGFmYiIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>

    
      
       
    

</body>
</html>

