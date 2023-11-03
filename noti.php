<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema web</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
      
   <div class="cont">
            <div class="reloj">
                <div class="relojTexto">
                    <?php
                        // Configura la zona horaria de México
                        date_default_timezone_set('America/Cancun');
                        // Obtiene la hora y fecha actual en México
                        $fechaHoraMexico = date('Y-m-d')." y la hora ". date('H:i');
                        echo "La fecha en mexico es: $fechaHoraMexico<br>";
                        date_default_timezone_set("Europe/Madrid");
                        $fechaHoraEspana = date('Y-m-d')." y la hora ". date('H:i');
                        echo "La fecha en España es: $fechaHoraEspana";
                    ?>
                </div>
            </div>
            
            <div class="barnav" aling>
                <img src="img/logo.jpg" class="logo" alt="Main logo">
                    <ul>
                        <li><a href="paginas/menu.php">Menú del día</a></li>
                        <li><a href="paginas/calendario.php">Calendario</a></li>
                        <li><a href="paginas/cumpleaños.php">Cumpleaños</a></li>
                        <li><a href="paginas/eco.php">Ecovalentín</a></li>
                        <li><a href="paginas/revinate.php">Revinate</a></li>
                        <li><a href="noti.php">Notivalentín</a></li>
                        <li><a href="paginas/habit.php">Hábitos Imperiales</a></li>
                        <li><a href="paginas/vacan.php">Vacantes y Practicantes</a></li>
                        <li><a href="paginas/earth.php">Earth Check</a></li>
                        <li><a href="paginas/trip.php">TripAdvisor</a></li>
                        <li><a href="paginas/cristal.php">Cristal</a></li>
                    </ul>
            </div>

    <div class="texto-imagen">
            <div class="texto">
                 <p>Bienvenido a Valentín Imperial Riviera Maya</p>
            </div>
    </div>

    <div class="cont2">
    </div>
            <p class="info">
                Playa del Secreto( Carretera Federal 307 Chetumal-Puerto Juárez km 311,5 77710 ).
                <br>
                Tel: +52 984 206 3660
                <br>
                Ext: 8209/8210.
                <br>
                Todos los Derechos Reservados © 2021
            </p>
        </div>

    </div>   

   </div>

    
</body>
</html>