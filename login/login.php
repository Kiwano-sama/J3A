<?php
session_start();
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>J3A - Registro</title>

        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link href="../assets/css/estiloRegistro.css" rel="stylesheet">
    </head>
    <body>

        <!--CONTENIDO-->
        <div class="container">


<?php

$host_db = "127.0.0.1:56624";
$user_db = "j3a";
$pass_db = "Qwerty123_";
$db_name = "j3a";
$tbl_name = "usuario";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];
 
$sql = "SELECT * FROM $tbl_name WHERE username = '$username'";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {     
 
 $row = $result->fetch_array(MYSQLI_ASSOC);
 if (password_verify($password, $row['password'])) { 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);

    echo "Bienvenido! " . $_SESSION['username'];
    echo '<br><br><a href="../index.php>Portal</a> "<a href="panel-control.php">Panel de Control</a>'; 

 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='index.html'>Volver a Intentarlo</a>";
 }
}else {
	echo ($username . ' no está registrado. <a href="index.html">Registrate o vuelve a intentarlo con otro usuario</a>.');
}
 mysqli_close($conexion); 
 ?>
 </div>
        <!--/CONTENIDO -->

        <script src="../assets/js/registro.js"></script>

    </body>
</html>