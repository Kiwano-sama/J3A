<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>J3A - Diseño Gráfico y Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/css/cssTrabajaConNosotros.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet"  />
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if IE 8]>
    	<link rel="stylesheet" type="text/css" href="assets/css/ie.css" />
    <![endif]-->
    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon" href="assets/ico/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/ico/apple-touch-icon-114x114.png">
    <!--GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700,400italic,700italic|Doppio+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bowlby+One+SC' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Days+One|Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Exo:800' rel='stylesheet' type='text/css'>
    <!--/GOOGLE FONTS-->

</head>
    <body>
    <!--TOP-->
    <div class="top_line"></div>
    <div class="panel hidden-phone">
        <div id="map">
        </div>
    </div>
    <!--/TOP-->
    <!--HEADER-->
<?php 
include 'header.php';
?>
	<!--/HEADER-->
    <!--AREA BIENVENIDA-->
    <div class="gray_bg">
        <div class="container">
            <div class="row welcome">
                <div class="span12">
                    <h1>J3A - Empresa de <span class="undercolored">diseño</span> <span class="undercolored">gráfico</span> <span class="colored">&amp;</span> <span class="undercolored">web</span></h1>
                    <p><em>Hacemos diseños de páginas web con HTML5 / CSS3 template very flexible, very easy for customizing and well documented, approaches for personal and professional use.</em></p>
                </div>
            </div>
        </div>
    </div>
<?php    
$host_db = "127.0.0.1:56624";
$user_db = "j3a";
$pass_db = "Qwerty123_";
$db_name = "j3a";
$tbl_name = "trabajadores";

// Recibimos por POST los datos procedentes del formulario    

$nombre = $_POST["nombre"];    
$email = $_POST["email"];    
$numero = $_POST["numero"];
$puesto = $_POST["puesto"];
$cv = $_POST["cv"];

// Abrimos la conexion a la base de datos    
$conexion = new mysqli ($host_db, $user_db, $pass_db, $db_name);
if ($conexion->connect_error) {
	die("La conexion falló: " . $conexion->connect_error);
}

$_GRABAR_SQL = "INSERT INTO $tbl_name (nombre,email,numero,puesto,cv) VALUES ('$nombre','$email','$numero','$puesto','$cv')";    
mysql_query($conexion, $_GRABAR_SQL);   

// Cerramos la conexion a la base de datos    
mysqli_close($conexion); 

?>
  
<!-- Confirmamos que el registro ha sido insertado con exito     -->
<script type="text/javascript">
alert('Los datos han sido guardados con éxito, uno de nuestros responsables se pondrá en contacto con usted :)');
</script>    
<input href="index.php" type="submit" value="Volver" class="btn-large btn-success mega">

<?php 

// // Recibimos por POST los datos procedentes del formulario 

// $nombr = $_POST["nombre"];           // Asi recogemos el nombre desde el formulario 
//     $nombre = strip_tags($nombr);    // Eliminamos la etiquetas que puedan existir 
//     $n_nombre = strlen($nombre);     // Contamos el numero de caracteres 

// $emai = $_POST["email"];            // Asi recogemos el email desde el formulario 
//     $email = strip_tags($emai);     // Eliminamos la etiquetas que puedan existir 
     
//         // Validamos el email de manera muy simple, contempla que exista la @, el . y no exista espacios en blanco 
//         if (filter_var($email, FILTER_VALIDATE_EMAIL)) {  
//             // Email valido, contamos los caracteres 
//             $n_email = strlen($email);         // Contamos el numero de caracteres 
//         } else {  
//             // Email no valido, asignamos 0 al numero de caracteres 
//             $n_email = 0; 
//         }  

// $fecha = date("d-m-Y");     // Asi recogemos la fecha 
// $hora = date("H:i");        // Asi recogemos la hora 

// $total_car = $n_nombre * $n_email;    // Si alguno de ellos vale 0, $total_car valdrá 0 

// if ($total_car >= 1) {  
//     // Abrimos la conexion a la base de datos 
//     include("../abre_conexion.php"); 
     
//     $_GRABAR_SQL = "INSERT INTO $tabla_db1 (nombre,email,fecha, hora) VALUES ('$nombre', '$email', '$fecha', '$hora')";  
//     mysql_query($_GRABAR_SQL); 
     
//     // Cerramos la conexion a la base de datos 
//     include("../cierra_conexion.php"); 
     
//     // Confirmamos que el registro ha sido insertado con exito 
     
//     echo " 
//     <p>Los datos han sido guardados con exito.</p> 
     
//     <p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p> 
     
//     <p><a href='http://www.uterra.com/archcodfuente/demos/id103/lista2.php' title='Clic aquí'>Ver los resgistros  
     
//     guardados</a></p> 
//     "; 
     
// } else { 
     
//     echo " 
//     Los campos <b>nombre</b> y <b>email</b> no pueden estar vacios.<br /> 
//     <a href=\"javascript:history.go(-1)\">Volver</a> 
//     "; 
// } 
?> 