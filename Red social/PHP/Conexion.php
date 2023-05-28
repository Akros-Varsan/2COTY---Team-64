<?php  

//declarado variable para conexion
$Servidor = "localhost"; // el servidor que utilizaremos, en este caso sera el localhost
$User = "root";          //El usuario de la base de datos
$Password = "";          //La contraseña del usuario que utilizaremos
$DB = "redsocial";       //El nombre de la base de datos

// Creando la conexion
$conexion = mysqli_connect($Servidor, $User, $Password, $DB);

// Verificando la conexion
if (!$conexion) {
   echo "connection failed <br>";
   die ("connection failed: " . mysqli_connect_error());

}
else{
    echo " ";

}

?> 