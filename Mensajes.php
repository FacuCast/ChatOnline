<?php
session_start();
include_Once 'Conexion.php';

$_SESSION['admin'];
$TextTarea = $_POST['TextTarea'];

$sql_Agregar = 'INSERT INTO Chat (Nombre,password,Mensaje) VALUES (?,1,?)';
$Sentencia_Agregar = $bdd ->prepare($sql_Agregar);

if ($Sentencia_Agregar->execute(array($_SESSION['admin'],$TextTarea))){
    echo 'Agregado<br>';
} else {
    echo 'Errohr<br>';
}

if( isset($_SESSION['admin']) ){
    header('Location:Chats.php');
}

$Sentencia_Agregar=null;
$PDO=null;
?>