<?php
session_start();
include_once 'conexion.php';

//LEER
$sql_leer = 'SELECT * FROM chat';
$gsent = $bdd->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll();

if($_GET){
    $id = $_GET['id'];
    $sql_unico = 'SELECT * FROM chat WHERE id=?';
    $gsent_unico = $bdd->prepare($sql_unico);
    $gsent_unico->execute(array($id));
    $resultado_unico = $gsent_unico->fetch();

    $gsent_unico = null;
}

if( isset($_SESSION['admin']) ){
    echo 'Bienvenido! '.$_SESSION['admin'];
    echo ' _//_   Recuerde actualizar la pagina si no cargan los mensajes';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Chat En Vivo</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
<link rel="Stylesheet" href="Estilos/Estilos.css"/>
<h1>Chat En Vivo.</h1>
</head>
<body>
	<div class="principal" action="">
		<div class="wrap">
			<form action="Mensajes.php" method="POST"  class="formulario">
				<input type="text" name="TextTarea" placeholder="Escribir Mensaje" size="20" style="font-family: Verdana; font-size: 15pt"/>
				<input type="submit" class="boton" name="Button" value="Agregar Mensaje"/>
			</form> 

    <title>Datos Ingresados</title>
  </head>
  <body>
<div class="container md-5">
        <div class="row">
            
            <div class="col-md-6">
                
                <?php foreach($resultado as $dato): ?>
                
                <div 
                class="alert alert-<?php echo $dato['id']  ?> text-uppercase mt-5" 
                :
                class="alert alert-<?php echo $dato['Chats']  ?> text-uppercase mt-5" 
                role="alert">
                <?php echo $dato['Nombre'] ?>
                :
                    <?php echo $dato['Mensaje'] ?> <br>
               -----------------
                    </a>
                </div>
                
                <?php endforeach ?>
</body>
<p>@FacunzCastano@</p>
</html>

