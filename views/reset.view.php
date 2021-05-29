<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resetear contrasena</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo LINK; ?>public/img/logo/logosn.png">
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
		<p class="registrar">Reseteo de contrasena</p>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id ="passReset">
			<div class="elemento">
			    <input class="dato1 inputbar" name="pass" type="password" id="pass" onfocus="enfoque(this);" onblur="desenfoque(this);">
			    <label class="dato1 inputext" for="pass">Contraseña</label>
			</div>
			<div class="elemento">
			    <input class="dato2 inputbar" name = "passConf" type="password" id="passConf" onfocus="enfoque(this);" onblur="desenfoque(this);">
			    <label class="dato2 inputext" for="passConf">Confirmar contraseña</label>
			</div>
			<input type="hidden" name="fgt" value="<?php echo $fgt ?>">
			<button id="" class="iniciar botiniciar" name="resetSubmit" >
				Siguiente<i class="mdi mdi-send"></i>
			</button>
			<button class="startSess" href="<?php LINK ?>/controllers/login.php"><i class="mdi mdi-user"></i> Iniciar Session</button>
		</form>
	</div>
    <script src="<?php echo LINK ?>public/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?php echo LINK ?>public/js/jqscript.js"></script>

</body>
</html>