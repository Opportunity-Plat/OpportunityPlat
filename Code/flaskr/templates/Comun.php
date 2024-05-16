<!-- Barra de navegacion -->
<div id="BNavegacion" class="barra-navegacion">
    <nav class="navegacion">
        <ul class="menu">
            <a href="{{url_for('web.index')}}">
                <img src="../static/assets/img/logo.jpeg" id="opportunityboton" style="position: relative; margin-left: 10%; margin-right: 60px; margin-top: 2px; width: 5%; margin-bottom: -15px;">
            </a>
            <li id="index"><a href="{{url_for('web.index')}}">Home</a></li>
            <li id="sobrenosotros"><a href="{{url_for('web.sobrenosotros')}}">Sobre Nosotros</a></li>
            <li id="Tendencias"><a href="{{ url_for('web.tendencias')}}">Tendencias</a>
            </li>
            
	</ul>
    </nav>
    <br>
</div>
<!-- fin barra de menu personalizada -->
