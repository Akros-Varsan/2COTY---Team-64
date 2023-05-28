<?php

include("Conexion.php"); // el include es para llamar a un archivo, en este caso el de conexion.

// declarando variables para recibir y guardar los datos enviados desde el formulario
$User          = $_POST["User"]; // la primera es nuestra variable, la segunda despues de POST, es donde guardamos los datos en el formulario
$Name          = $_POST["Name"];
$Lastname      = $_POST["Lastname"];
$Age           = $_POST["Age"];
$Description   = $_POST["Description"];
$Email         = $_POST["Email"];
$Password      = $_POST["Password"];

$PasswordHash = password_hash($Password, PASSWORD_BCRYPT); //BCRYPT es el algoritmo de encriptacion, devuelve una cadena de 60 caracteres
$ProfilePhoto   = "IMG/$User/profile.jpg"; // ingresamos el nombre de la foto de perfil por defecto

//Evaluamos si el user ingresado ya existe
$consultaId = "SELECT User
              FROM user
              WHERE User= '$User' ";
$consultaId = mysqli_query($conexion, $consultaId);  //devuelve un objeto con el resultado, false si hay error, true si se ejecuta
$consultaId = mysqli_fetch_array($consultaId); //devuelve un array o NULL


if (!$consultaId) { //Si la consulta está vacía, entonces significa que no existe el user, y creamos el nuevo usuario

    $sql = "INSERT INTO user VALUES ('$User', '$Name', '$Lastname', '$Age', '$Description', '$ProfilePhoto', '$Email', '$PasswordHash')";
   
    //Ejecutamos y verificamos si se guardaron los datos
    if (mysqli_query($conexion, $sql)) {
        mkdir("../IMG/$User"); //Creamos una carpeta en imágenes para el usuario
        copy("../IMG/default.jpg", "../IMG/$User/profile.jpg"); //Copiamos nuestra foto por defecto

        echo "Your account has been created.";
        echo "<br> <a href='Home.html'>Login</a></div>";  
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
} else {
    echo "The user already exists.";
    echo "<a href='Home.html'> Try again.</a></div>";
}

//Cerrando la conexion
mysqli_close($conexion);
?>
