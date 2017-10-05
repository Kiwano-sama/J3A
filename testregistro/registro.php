<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>J3A - Registro</title>

        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link href="assets/css/estiloRegistro.css" rel="stylesheet">
    </head>
    <body>

        <!--CONTENIDO-->
        <div class="container">

            <?php
            // COMENTADO DATOS RECOGIDOS
//            echo (filter_input(INPUT_POST, 'username'));
//            echo (filter_input(INPUT_POST, 'nombre'));
//            echo (filter_input(INPUT_POST, 'apellido'));
//            echo (filter_input(INPUT_POST, 'email'));
//            echo (filter_input(INPUT_POST, 'pass'));
//            echo (filter_input(INPUT_POST, 'dia'));
//            echo (filter_input(INPUT_POST, 'mes'));
//            echo (filter_input(INPUT_POST, 'anio'));
//            echo (filter_input(INPUT_POST, 'genero'));
            require_once 'config.php';

            $response = array();

            if ($_POST) {

                $username = (filter_input(INPUT_POST, 'username'));
                $nombre = (filter_input(INPUT_POST, 'nombre'));
                $apellido = (filter_input(INPUT_POST, 'apellido'));
                $email = (filter_input(INPUT_POST, 'email'));
                $pass = (filter_input(INPUT_POST, 'pass'));
                $dia = (filter_input(INPUT_POST, 'dia'));
                $mes = (filter_input(INPUT_POST, 'mes'));
                $anio = (filter_input(INPUT_POST, 'anio'));
                $genero = (filter_input(INPUT_POST, 'genero'));

                $fechaNac = $anio . "/" . $mes . "/" . $dia;

                // sha256 password hashing
                //$password = hash('sha256', $pass);



                $hash = password_hash($pass, PASSWORD_DEFAULT);
                
                $link = mysqli_connect('localhost', 'j3a', 'Qwerty123_', 'j3a');
                $sql = "SELECT * FROM usuario WHERE username='$username' LIMIT 1";
                $result = mysqli_query($link, $sql);


                if (mysqli_num_rows($result) > 0) {
                    echo('<p class="texto-rojo"><b>Error!</b> Usuario ' . $username . ' ya ha sido registrado</p>');
                    echo "<a href='registro.php'>Por favor escoja otro username</a>";
                } else {
                    $stmt = $DB_con->prepare('INSERT INTO usuario(username,nombre,apellido,email,password,fechaNac,genero) VALUES(:username, :nombre, :apellido, :email, :pass, :fechanacimiento, :genero)');
                    $stmt->bindParam(':username', $username);
                    $stmt->bindParam(':nombre', $nombre);
                    $stmt->bindParam(':apellido', $apellido);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':pass', $hash);
                    $stmt->bindParam(':fechanacimiento', $fechaNac);
                    $stmt->bindParam(':genero', $genero);
                    $stmt->execute();

                    // check for successfull registration
                    if ($stmt->rowCount() == 1) {

                        echo ('<p>Registrado correctamente. <a href="login.php">Ya te puedes loguear</a>.</p>');
                    } else {
                        echo ('<p class="texto-rojo">No se pudo registrar, intentalo de nuevo más tarde.</p>');
                    }
                }
            }
            ?>

        </div>
        <!--/CONTENIDO -->

        <script src="../assets/js/registro.js"></script>

    </body>
</html>