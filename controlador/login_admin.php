<?php
require_once("../conexion_db.php");
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$consultaUsuario = "SELECT  email, password FROM usuarios where email = '$email' and password = '$password'";


$resultado = mysqli_query($conexion,$consultaUsuario);

$filas= mysqli_num_rows($resultado);
if ($filas){
    $usuario = mysqli_fetch_assoc($resultado);
    $_SESSION ["iniciar"]=true;
    header("Location: ../php/index.php");
    exit;
} else {
    $_SESSION["mensaje"] = "email o contraseña incorrectas ";
    header("Location:../php/login.php");
}


?>