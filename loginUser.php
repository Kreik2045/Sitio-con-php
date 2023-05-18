<?php

require_once("classes/Usuario.class.php");

$admin = new Usuario("Angel","sonic");

$nombre = $_POST['user'];
$pass = $_POST['pass'];

$usu1 = new Usuario($nombre, $pass);

if($admin -> getUsername() != $usu1 -> getUsername()) {
    echo "Información Incorrecta, intenta de nuevo";
    header("refresh:5; url=login.html");
} 

else{
    if($admin -> getPass() != $usu1 -> getPass()) {
        echo "Información Incorrecta, intenta de nuevo";
        header("refresh:5; url=login.html");
    }

    else{
        echo "Información Correcta, Bienvenido.";
        header("refresh:5; url=Hamburguesas.php");

    }
}


?>