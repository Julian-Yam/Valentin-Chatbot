<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    
</head>
<body>
    
    <div class="cont">

            <!--Esto es el reloj de la parte frontal-->
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

        <!--Esta es la barra de navegacion superior-->    
        <div class="barnav">
            <img src="../img/logo.jpg" class="logo" alt="Main logo">
                <ul>
                    <li><a href="menu.php">Menú del día</a></li>
                    <li><a href="calendario.php">Calendario</a></li>
                    <li><a href="cumpleaños.php">Cumpleaños</a></li>
                    <li><a href="eco.php">Ecovalentín</a></li>
                    <li><a href="revinate.php">Revinate</a></li>
                    <li><a href="../noti.php">Notivalentín</a></li>
                    <li><a href="habit.php">Hábitos Imperiales</a></li>
                    <li><a href="vacan.php">Vacantes y Practicantes</a></li>
                    <li><a href="earth.php">Earth Check</a></li>
                    <li><a href="trip.php">TripAdvisor</a></li>
                    <li><a href="cristal.php">Cristal</a></li>
                </ul>
        </div>

            <!--Este es el div donde se encuentra la imagen del chat bot-->
            <div class="chat">
                <a href="login.php">
                <img src="https://media.giphy.com/media/WEiKBTaESHHhK/giphy.gif" class="imgchat" alt="undefined">
                </a>
            </div>

            <!--Este es el PDF-->
            <p style="text-align: center;">
                <iframe class="frame" scroling="auto" src="../Documentos/CV.pdf"></iframe>
            </p>
    </div>

    

</body>
</html>