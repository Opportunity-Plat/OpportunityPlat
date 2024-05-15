<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <title>Iniciar Sesión</title>
    <!-- Estilos CSS, si los tienes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background-image: url(Recurses/Fondo.jpg); background-repeat: no-repeat;  background-size: 100%;">

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
    <center><h2 style="font-size: 35px; margin-top: 20px;">Iniciar Sesión</h2></center>
    <form action="InicioSessionProcess.php" method="POST">
        <img src="Recurses/opportunityRE.jpeg" style="position: relative; width: 65%; transform: translate(-50%); 
        margin: auto; left: 50%; margin-top: 20px;" >
        <div style="text-align: center;">
        <i class="fas fa-user"></i>
     
            <input type="text" id="usuario" name="user" required placeholder="Usuario" style="width: 60%; border-radius: 10px; 
            padding: 15px; margin-bottom: 20px; margin-top: 20px; "><br>
            <i class="fas fa-unlock"></i>
            
            <input type="password" id="contraseña" name="pass" required placeholder="contraseña" style="width: 60%; 
            border-radius: 10px; padding: 15px; margin-bottom: 30px;"><br>
            
            
            <label for="tipo" style="font-size: 19.5px;">Tipo de usuario:</label>
            <select id="tipo" name="type" required style="width: 25%; border-radius: 10px; padding: 10px;">
                <option value="opcion1">Egresado</option>
                <option value="opcion2">Jefe de carrera</option>
            </select><br>
            <p style="margin-top: 20px; margin-bottom: -10px;">No tienes cuenta? <a href="registrarse.html"  style="color: white;">Registrate</a></p>
            
            
            <input type="submit" value="Iniciar Sesión" class="button" style="background-color: #467fbd;margin-left: -50px">
        </div>            
    </form>
</div>

</body>
</html>
