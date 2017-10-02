<html>
    <head>
        <meta charset="UTF-8">
        <title>Agenda</title>
    </head>
    <body>
    <p>prueba</p>
        <?php
        $nombreRecogido = filter_input(INPUT_POST, 'nombre');
        $passRecogido = filter_input(INPUT_POST, 'pass');
        $opcionElegida = $_POST['opcion'];

        function hacerConexion() {
            return mysqli_connect('127.0.0.1:56624', 'j3a', 'Qwerty123_', 'usuarios_bbdd');
        }

        $link = hacerConexion();
        $link;
        
        

            function mostrarAgenda($link) {
                echo "<br>Mostrando agenda... ";

                $sql = "SELECT * FROM `usuarios_tabla`";
                $result = mysqli_query($link, $sql);
                echo ('<table border="1"><tr><td><b>Usuario</b></td><td><b>Contraseña</b></td></tr>');

                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    echo ("<tr>");
                    echo ("<td>" . $row['nom_usuario'] . "</td><td> " . $row['pass'] . "</td>");
                    echo ("</tr>");
                }
                echo ('</table>');
                mysqli_free_result($result);
            

            if ($opcionElegida !== "consulta") {
                mostrarAgenda($link);
            }


            if ($opcionElegida == "alta") {
                if (empty($nombreRecogido)) {
                    echo("No has introducido un nombre!");
                } else if (empty($passRecogido)) {
                    echo("No has introducido la contraseña!");
                } else {

                    $sql = "select * FROM `usuarios_tabla` WHERE `nom_usuario`='$nombreRecogido'";
                    $result = mysqli_query($link, $sql);
                    if (mysqli_num_rows($result) == 0) {
                        $sql = "INSERT INTO `usuarios_tabla` (`nom_usuario`,`pass`) VALUES ('$nombreRecogido','$passRecogido')";
                        mysqli_query($link, $sql);

                        echo("<br><b>Usuario " . $nombreRecogido . " dado de alta!</b><br><br>");
                    } else {
                        echo("<br><b>Usuario " . $nombreRecogido . " ya existe!</b><br><br>");
                    }
                }
            } else if ($opcionElegida == "baja") {

                $sql = "select * FROM `usuarios_tabla` WHERE `nom_usuario`='$nombreRecogido'";
                $result = mysqli_query($link, $sql);

                if (!empty($nombreRecogido)) {
                    if (mysqli_num_rows($result) > 0) {
                        $sql = "DELETE FROM `usuarios_tabla` WHERE (`nom_usuario`='$nombreRecogido')";
                        mysqli_query($link, $sql);

                        echo("<br><b>Contacto <b>" . $nombreRecogido . "</b> borrado de la agenda!</b><br><br>");
                    } else {
                        echo("Usuario <b>" . $nombreRecogido . "</b> no existe en BBDD!");
                    }
                } else {
                    echo ("<b>No has introducido ningun nombre!</b>");
                }
            } else if ($opcionElegida == "modificacion") {

                $sql = "select * FROM `usuarios_tabla` WHERE `nom_usuario`='$nombreRecogido'";
                $result = mysqli_query($link, $sql);

                if (!empty($nombreRecogido)) {
                    if ((mysqli_num_rows($result) > 0) && (!empty($passRecogido))) {
                        $sql = "UPDATE `usuarios_tabla` SET `pass`='$passRecogido' WHERE `nom_usuario`='$nombreRecogido'";
                        mysqli_query($link, $sql);


                        echo("<br><b>Contraseña del usuario <b>" . $nombreRecogido . "</b> cambiada!</b><br><br>");
                    } else {
                        echo("Usuario <b>" . $nombreRecogido . "</b> no existe en BBDD!");
                    }
                } else {
                    echo ("<b>No has introducido ningun nombre!</b>");
                }
            } else if ($opcionElegida == "consulta") {
                mostrarAgenda($link);
            }


            if ($opcionElegida !== "consulta") {
                mostrarAgenda($link);
            }
        }
        ?>
        <a href="./">Volver</a>
    </body>
</html>