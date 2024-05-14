<?php
include("conexion.php");

$base = mysqli_select_db($conexion, "controldeusuarios");

if(!$base)
{
    echo "No se encontro la base de datos";
}
else
{
 
}

//recuperar variables
if(isset($_POST['user']) ) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $type = $_POST['type'];
    $nombre = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $universidad = $_POST['universidad'];
    $añoEgresado = $_POST['añoE'];
    $carrera = $_POST['carrera'];
}

   //hacemos la sentencia de sql
$sql = "INSERT INTO usuarios (User, Pass, Type, Nombre, Apellidos, UniversidadE, AñoE, Carrera) VALUES ('$user', '$pass', '$type', '$nombre', '$apellidos', '$universidad', '$añoEgresado', '$carrera')";

$ejecutar = "";
if($type == "Egresado")
{
    if($universidad == NULL || $añoEgresado == NULL)
    {
        echo "No se llenaron todos los campos";
    }
    else
    {
        $ejecutar=mysqli_query($conexion, $sql);
    }
}else{
    if($universidad == NULL && $añoEgresado == NULL){
        $ejecutar=mysqli_query($conexion, $sql);
    }else{
        echo "Se llenaron campos que no corresponden al tipo de usuario";
    }
}



//ejecutar sentencia



if(!$ejecutar)
{
    echo "Hubo un error";
}
else
{
    echo '<script type="text/javascript">';
    echo 'alert("Datos guardados correctamente");';
    echo 'window.location.href = "inicioDeSesion.php";';  // Redireccionar a index.html después del alert
    echo '</script>';
}


?>