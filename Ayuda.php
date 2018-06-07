<?php
	/*-------------------------
	Autor: Obed Alvarado
	Web: obedalvarado.pw
	Mail: info@obedalvarado.pw
	---------------------------*/
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }

	/* Connect To Database*/
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos

	$active_facturas="";
	$active_productos="";
	$active_clientes="";
	$active_usuarios="";
	$active_Ayuda="active";
	$title="Productos | Simple Invoice";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("head.php");?>
  </head>
  <body>
	<?php
	include("navbar.php");
	?>
	<!--Ayuda del sistema aca se describe algunas cosas importantes que le pueden suceder al uusuaro -->
	<span class="=glyphicon glyphicon-home"></span>
  <a href="ayudas.pdf">Haz clic a qui para ver el PDF</a>
    		   
	<?php
	include("footer.php");
	?>
	<script type="text/javascript" src="js/productos.js"></script>
  </body>
</html>