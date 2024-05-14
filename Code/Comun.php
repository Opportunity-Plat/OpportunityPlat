<!-- Barra de navegacion -->
<div id="BNavegacion" class="barra-navegacion">
    <nav class="navegacion">
        <ul class="menu">
            <a href="index.html">
                <img src="Recurses/logo.jpeg" id="opportunityboton" style="position: relative; margin-left: 10%; margin-right: 60px; margin-top: 2px; width: 5%; margin-bottom: -15px;">
            </a>
            <li id="index"><a href="index.html">Home</a></li>
            <li id="sobrenosotros"><a href="sobreNosotros.html">Sobre Nosotros</a></li>
            <li id="Tendencias"><a href="tendencias.html">Tendencias</a>
            </li>
            
            <?php
            session_start();
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user'];
                echo "<li id='dashBoard'><a href='dashboard.php'>Dashboard</a></li>";
                echo "<li id='logout' style='float: right;margin-right: 5% ;  margin-top: 1.5%;' ><a href='logout.php'>Cerrar sesión</a></li>";
                echo "<li id='usuario' style='float: right;margin-top: 1.5%;'><a href='#'>$user</a></li>";
                
            } else {
               
                echo "<li id='registrarse' style='float: right;margin-right: 5% ;  margin-top: 1.5%;' ><a href='registrarse.html'>Registrarse</a></li>";
                echo "<li id='iniciarSesion' style='float: right;margin-top: 1.5%;'><a href='inicioDeSesion.php'>Iniciar Sesión</a></li>";
                
            }
            ?>
        </ul>
    </nav>
    <br>
</div>
<!-- fin barra de menu personalizada -->
