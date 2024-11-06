<?php
require_once("../conexion_db.php");
session_start();

$email = $_POST["email"];
$contraseña = $_POST["password"];

$consultaUsuario = "SELECT  email, password FROM usuarios where email = '$email' and password = '$contraseña'";


$resultado = mysqli_query($conexion,$consultaUsuario);

$filas= mysqli_num_rows($resultado);
if ($filas){
    $usuario = mysqli_fetch_assoc($resultado);
    $_SESSION ["iniciar"]=true;
    header("lacation:../php/index.php");
    exit;
} else {
    $_SESSION["mensaje"] = "email o contraseña incorrectas ";
    header("lacation:../php/login.php");
}


?>