<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    
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
        <p style="text-align: center;">
            <iframe class="frame" scroling="auto" src="../Documentos/CV.pdf"></iframe>
        </p>

        <form>
            <fieldset name="cuadro">
                <input type="text" name="nombre">
                <br>
                <input type="submit" value="Enviar" name="Enviar">
            </fieldset>
        </form>
    </div>

    

</body>
</html>