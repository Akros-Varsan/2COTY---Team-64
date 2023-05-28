<?php

session_start(); //inicia una nueva sesion o reanuda la existente.
$Login = $_SESSION['Login'];

if(!$Login)
    {
        header('Location: Home.html');
    }
    else
    {
        $User = $_SESSION['User']; // no es estrictamente necesario, pero nos facilitara el codigo mas adelante
    }

?>