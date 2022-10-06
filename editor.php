﻿<?php
session_start();
/* DECLARE VARIABLES */
$username = 'admin';
$password = 'admin';
$random1 = 'secret_key1';
$random2 = 'secret_key2';
$hash = md5($random1 . $password . $random2);
$self = $_SERVER['REQUEST_URI'];
/* USER LOGOUT */
if(isset($_GET['logout']))
{
	unset($_SESSION['login']);
}
/* USER IS LOGGED IN */
if (isset($_SESSION['login']) && $_SESSION['login'] == $hash)
{
	logged_in_msg($username);
}
/* FORM HAS BEEN SUBMITTED */
else if (isset($_POST['submit']))
{
	if ($_POST['username'] == $username && $_POST['password'] == $password)
	{
		//SI EL NOMBRE DE USUARIO Y LA CONTRASEÑA SON CORRECTOS, CONFIGURAR LA SESIÓN DE INICIO DE SESIÓN
		$_SESSION["login"] = $hash;
		header("Location: $_SERVER[PHP_SELF]");
	}
	else
	{
		// MOSTRAR FORMULARIO CON ERROR
		display_login_form();
		display_error_msg();
	}
}
/* MOSTRAR EL FORMULARIO DE INICIO DE SESIÓN */
else
{
	display_login_form();
}
/* PLANTILLAS */
function display_login_form()
{
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta http-equiv="cleartype" content="on">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="220">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="author" content="Elio Equipo">
        <meta name="apple-itunes-app" content="app-id=">
        <meta name="description" content="🍿 Admin Panel Editor .htaccess" />

        <title>Admin Panel Editor .htaccess</title>

	<link rel="stylesheet" href="./estilos/css_user/bootstrap.min1.css" type="text/css"/>
	<link rel="stylesheet" href="./estilos/css_user/main.css" type="text/css"/>
        </head>
		<body>
			<div class="trail">
				<canvas id="world"></canvas>
			</div>
	<div class="container" style="opacity:1;">
			<div class="row col-md-offset-2 col-md-8 login-error">
			<div class="alert alert-danger" role="alert">
				<strong>
					<font size="3">Se encontraron los siguientes errores</font>	
				</strong>
				<font color="black" size="3">
					<ul type="square">
					</ul>
				</font>
			</div>
		</div>
		
	  	<div class="row-fluid">
	  		<div class="col-sm-offset-2 col-md-offset-4 col-sm-8 col-md-4 col-xs-12 login-form">
	  			<div class="row-fluid">
	  				<div class="col-sm-12 logo-login-form">
	  				<h2 style="text-align:center">

                                        <!-- Imagen Logo ----->
                                        <img src="./estilos/png/Login_Users.png" class="clearfix">

</h2>
	  				</div>
	  			</div>
	  			<div class="row-fluid">
	  				<div class="col-sm-12">
	<?php echo '<form action="' . isset($self) . '" method="post">' .
			 '<label for="username"><span style="color:#ffffff;text-align:center;">Usuario:</span></label>' .
			 '<input type="text" name="username" id="username" placeholder="User: ">' .
			 '<label for="password"><span style="color:#ffffff;text-align:center;">Contraseña:</span></label>' .
			 '<input type="password" name="password" id="password" placeholder="Password: ">' .
			 '<input type="submit" name="submit" value="Iniciar Sesión" class="btn btn-default primary sub">' .
		 '</form>';
}
function logged_in_msg($username)
{
?>

  </div>
	  			      </div>
	  			   <div>
	  			</div>
	  		</div>
	  	</div>
	</div>
</body>
</html>   

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta http-equiv="cleartype" content="on">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="author" content="Elio Equipo">
        <meta name="apple-itunes-app" content="app-id=">
        <meta name="description" content="🍿 Admin Panel Editor .htaccess, ponte y cómodo y disfruta." />
        <meta property="al:ios:url" content="tg://msg_url?url=http%3A%2F%2Flarry.serveftp.com%2Fcodifica%2F&amp;text=Codifica%20Tus%20Canales%20de%20pel%C3%ADculas%20%20series%20de%20forma%20Segura%20Para%20Que%20No%20te%20roben%20ponte%20y%20C%C3%B3modo%20disfruta."/>
        <meta property="al:android:url" content="tg://msg_url?url=http%3A%2F%2Flarry.serveftp.com%2Fcodifica%2F&amp;text=Codifica%20Tus%20Canales%20de%20pel%C3%ADculas%20y%20series%20de%20forma%20Segura%20Para%20Que%20No%20te%20roben%20ponte%20y%20C%C3%B3modo%20disfruta."/>
        <meta name="twitter:app:url:iphone" content="tg://msg_url?url=http%3A%2F%2Flarry.serveftp.com%2Fcodifica%2F&amp;text=Codifica%20Tus%20Canales%20de%20pel%C3%ADculas%20y%20series%20de%20forma%20Segura%20Para%20Que%20No%20te%20roben%20ponte%20y%20C%C3%B3modo%20disfruta."/>
        <meta name="twitter:app:url:ipad" content="tg://msg_url?url=http%3A%2F%2Flarry.serveftp.com%2Fcodifica%2F&amp;text=Codifica%20Tus%20Canales%20de%20pel%C3%ADculas%20y%20series%20de%20forma%20Segura%20Para%20Que%20No%20te%20roben%20ponte%20y%20C%C3%B3modo%20disfruta."/>
        <meta name="apple-itunes-app" content="app-id=686449807, app-argument: tg://msg_url?url=http%3A%2F%2Flarry.serveftp.com%2Fcodifica%2F&text=Codifica%20Tus%20Canales%20de%20pel%C3%ADculas%20y%20series%20de%20forma%20Segura%20Para%20Que%20No%20te%20roben%20ponte%20y%20C%C3%B3modo%20disfruta."/>
        <link rel="profile" href="https://gmpg.org/xfn/11"/>
        
        <title>User Panel </title>

        <!-- Boton Compartir en telegram whatsap y otros ----->

        <!-- Imagenes del boton Dia Noche ----->
        <link rel="stylesheet" href="./webfonts/all.css">
        <link rel="stylesheet" href="./estilos/css/v4-shims.css">

	<link rel="stylesheet" href="./estilos/css_user/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="./estilos/css_user/font-awesome.min.css" type="text/css" />

        <!-- Para estilo de la pagina ----->
        <link rel="stylesheet" href="./estilos/dia_noche/miboton.css"> 

</head>
<div class="container-btn-mode">
   <div id="id-sun" class="btn-mode sun active">
      <i class="fas fa-sun"></i>
   </div>
   <div id="id-moon" class="btn-mode moon">
      <i class="fas fa-moon"></i>
   </div>
</div>
<body>

        <!-- Importante wrapper no Eliminar ----->

    <div id="page" class="wrapper">

	<div class="container">
	     <br>
	     <br>
		<form id="action-form" action="index.php" method="POST" accept-charset="utf-8">
		    
		     <a class="btn btn-info btn-sm" href="?logout=true" role="button">Cerrar Sesion</a>

			<div class="form-group">
		    		    
		<hr>

<style>
.postbox{
	padding:10px;
}
.ehe-textarea{
	height: 400px;
	width: 95%;
}

</style>

<body>
  <?php

  ini_set('display_errors', true);

  if(@$_POST['delete_htaccess']){
    @unlink('.htaccess');
    header("Refresh: 0; url={$_SERVER['PHP_SELF']}");
    exit;
  }

  $htaccess = "";
  if(file_exists(".htaccess")){
    $htaccess = @file_get_contents(".htaccess");
  }else if(file_exists("htaccess.sample")){
    $htaccess = @file_get_contents("htaccess.sample");
  }

  if(@$_POST['htaccess']){
    $htaccess = $_POST['htaccess'];
    file_put_contents('__htaccess.swap', $_POST['htaccess']);
    @unlink('.htaccess');
    copy('__htaccess.swap', '.htaccess');
    @unlink('__htaccess.swap');
  }

  ?>

  <form method="POST" style="width:1400px; margin:auto;">
    <h1>Editor de .htaccess</h1>
    <textarea name="htaccess" style="height:500px; width:1300px;"><?php echo $htaccess ?></textarea>
    <input type="hidden" name="delete_htaccess">
    <div style="padding:20px; text-align:center">
      <button type="submit">Guardar</button>
      <button type="button" onclick="window.open('/')">Prueba</button>
      <button type="button" onclick="this.form.delete_htaccess.value=true; this.form.submit()"> Borrar </button>
    </div>
  </form>

		<footer class="footer">
		</footer>

	</div><!-- /.container -->
	<?php
	}
function display_error_msg()
{
	echo '<p><span style="color:#e91919;text-align:center;">El nombre de usuario o la contraseña no son válidos!</p></span>';
}
?>

        <!-- Para tansicion dia noche ----->
        <script src="./estilos/dia_noche/index.js"></script>

                </div>
              </div>
            </div>
        </div>
    </div>
</body>

        <script src="./estilos/js/contentscript-end.js"></script>

</html>