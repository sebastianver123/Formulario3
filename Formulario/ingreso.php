<?php

$enlace = mysqli_connect('localhost', 'root', 'mysql2017', 'usuarios', 3306);

$nombre = $_REQUEST['usuario'];
$contraseña = $_REQUEST['pass'];

$cadena="INSERT INTO `usuarios`.`personas`
(`nombre`,
`contraseña`)
VALUES
($nombre, $contraseña);";
mysqli_query($enlace, $cadena);

$cadena1 = "SELECT * FROM usuarios.personas WHERE nombre = '$nombre' AND contraseña='$contraseña';";

$resultado=mysqli_query($enlace, $cadena1);

if(mysqli_num_rows($resultado)){
    echo "Adentro!!!";
}else{
    echo "Afuera!!!";
}

