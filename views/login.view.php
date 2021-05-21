<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Iniciar Sesión</title>
	<link rel="stylesheet" href="<?php echo LINK; ?>public/css/normalize.css">
	<link rel="stylesheet" href="<?php echo LINK; ?>public/css/MaterialDesign-Webfont-master/css/materialdesignicons.css">
	<link rel="stylesheet" href="<?php echo LINK; ?>public/css/login.css">
    <script>
        
        function enfoque(e){
            if(e.value==''){
                e.nextElementSibling.classList.add('textpeque');
            }
        }
        
        function desenfoque(e){
            if(e.value==''){
                e.nextElementSibling.classList.remove('textpeque');
            }
        }
    </script>
</head>

<body class="cover">
	<div class="caja-logueo">
		<p class="avatar" style="font-size: 80px;">
			<i class="mdi mdi-account-circle"></i>
		</p>
		<p class="registrar">INGRESAR AL SISTEMA</p>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id ="userData">
			<div class="elemento">
			    <input class="dato1 inputbar" name="uname" type="text" id="userName" onfocus="enfoque(this);" onblur="desenfoque(this);">
			    <label class="dato1 inputext" for="userName">Nombre Usuario</label>
			</div>
			<div class="elemento">
			    <input class="dato2 inputbar" name = "password" type="password" id="pass" onfocus="enfoque(this);" onblur="desenfoque(this);">
			    <label class="dato2 inputext" for="pass">Contraseña</label>
			</div>
			<a href="#" class="fgt_pass">Olvide mi contrasña</a>
			<button id="SignIn" class="iniciar botiniciar">
				Iniciar Sesión <i class="mdi mdi-send"></i>
			</button>
		</form>
	</div>
    <script src="<?php echo LINK ?>public/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?php echo LINK ?>public/js/jqscript.js"></script>

</body>
</html>