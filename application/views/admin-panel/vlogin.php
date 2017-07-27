<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/main.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap-theme.min.css"/>
</head>
<body>
<center>
	<form class="login-admin" method="POST" action="<?=base_url();?>Login/logear"><br>
	<img class="cms" src="<?=base_url();?>assets/img/cms.png" alt="">
		<input id="input-1" type="mail" name="email" placeholder="Debe introducir su email"><br><br>
		<input id="input-2" type="password" name="password" placeholder="Debe introducir su password">
		<br><br>
		<button name="submit" type="submit" class="btn boton1">Iniciar Sesion</button><br>
		<label for=""></label>
	</form>
	</center>
<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="<?=base_url();?>assets/js/bootstrap.js"></script>
<script>
	//Aqui debo poner el codigo para que los inputs se iluminen al pulsar sobre ellos
	$(document).ready(function(){
		$('#input-1').on("focus",function(){
			$(this).addClass('iluminado');
		});
		$('#input-1').on("blur",function(){
			$(this).removeClass('iluminado');
		});
		$('#input-2').on("focus",function(){
			$(this).addClass('iluminado');
		});
		$('#input-2').on("blur",function(){
			$(this).removeClass('iluminado');
		});
	});
</script>
</body>
</html>