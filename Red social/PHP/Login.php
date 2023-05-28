<?php

include("Conexion.php");// el include es para llamar a un archivo, en este caso el de conexion

session_start(); //inicia una nnueva sesion o reanuda la existente
$_SESSION['Login'] = false;

//Variables
$User = $_POST["User"];
$Password = $_POST["Password"];


// Evaluamos el user ingresado
$consulta = "SELECT User, Password
              FROM user
              WHERE User = '$User' ";

$consulta = mysqli_query($conexion, $consulta); //ejecutamos la consulta
$consulta = mysqli_fetch_array($consulta);
print_r($consulta);
if($consulta)
{
     if (password_verify($Password, $consulta['Password']))  {

         $_SESSION['Login']            =true;
         $_SESSION['User']             =$consulta['User']; //$SESSION es una variable superglobal
         $_SESSION['Name']             =$consulta['Name'];
         $_SESSION['Lastname']         =$consulta['Lastname'];
         $_SESSION['Age']              =$consulta['Age'];
         $_SESSION['Description']      =$consulta['Description'];
         $_SESSION['ProfilePhoto']  =$consulta['ProfilePhoto'];

         header('Location: ../MyProfile.php'); //Redireccionamos a la pagina mi perfil
	 }
else
{
         echo"incorrect password";
         echo"<br><a href='Home.html'>Try again.</a></div>";
}
}
//Cerrando la conexion
mysqli_close($conexion);
?>