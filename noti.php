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
    

                <div class="cont2">
            <!--Esto es el reloj de la parte frontal-->
                    <div class="reloj">
                        <div class="relojTexto">
                            <?php
                                // Configura la zona horaria de México
                                date_default_timezone_set('America/Cancun');
                                // Obtiene la hora y fecha actual en México
                                $fechaHoraMexico = date('Y-m-d')." ...  hora ". date('H:i');
                                echo "Fecha en mexico: $fechaHoraMexico<br>";
                                date_default_timezone_set("Europe/Madrid");
                                $fechaHoraEspana = date('Y-m-d')." ...  hora ". date('H:i');
                                echo "Fecha en España: $fechaHoraEspana";
                            ?>
                        </div>
                    </div>    
                </div>

                        <div class="texto-imagen">
                                <div class="texto">
                                    <p>Bienvenido a Valentín Imperial Riviera Maya</p>
                                </div>

                            <!--Este es el div donde se encuentra la imagen del chat bot-->
                            <div class="cuadro2">
                                    <a href="paginas/chatbot.php">
                                        <img src="https://media.giphy.com/media/WEiKBTaESHHhK/giphy.gif" class="imgchat" alt="undefined">
                                    </a>
                            </div>

                        </div>

       

        <!--Es la informacion de abajo-->
                            <div class="cont3">
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

    
</body>
</html>