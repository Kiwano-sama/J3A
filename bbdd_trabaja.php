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

$_GRABAR_SQL = "INSERT INTO trabajadores (nombre,email,numero,puesto,cv) VALUES ('$nombre','$email','$numero','$puesto','$cv')";    
mysql_query($_GRABAR_SQL);   

// Cerramos la conexion a la base de datos    
mysqli_close($conexion); 

// Confirmamos que el registro ha sido insertado con exito    

echo "    
<p>Los datos han sido guardados con exito.</p>    

<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>    
";    
?>  
// <?php 

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