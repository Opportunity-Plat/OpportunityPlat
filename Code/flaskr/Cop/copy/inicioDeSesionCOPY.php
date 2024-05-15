<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" media="screen" href="styleInicioSession.css">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <title>Iniciar Sesión</title>
    <!-- Estilos CSS, si los tienes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>

<body>

<div id="header-placeholder"></div>
    <!--uso de javascript para cargar la barra de navegacion-->
    <script>
        // Carga el encabezado desde header.html en #header-placeholder
        fetch("comun.html")
            .then(response => response.text())
            .then(data => {
                document.getElementById('header-placeholder').innerHTML = data;
            });
    </script>
  <form action="inicioSesion.php">
     <i class="fas fa-user"></i>
     <label>Usuario</label>
     <input type="text" id="usuario" name="user" required placeholder="Usuario" style="width: 60%; border-radius: 10px; 
            padding: 15px; margin-bottom: 20px;"><br>

     <i class="fas fa-unlock"></i>
     <label>Contraseña</label>
     <input type="password" id="contraseña" name="pass" required placeholder="contraseña" style="width: 60%; 
            border-radius: 10px; padding: 15px; margin-bottom: 10px;"><br>

     <button type="submit">Iniciar Sesión</button>
     <p>No tienes cuenta? <a href="registrarse.html"  style="color: white;">Registrate</a></p>




  </form>
  <p style="color: white;">&copy; 2021 - Todos los derechos reservados</p>

</body>
</html>
