<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/main.css"/>
</head>
<body>
<div class="todo">
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active-propio"><a href="#">Inicio<span class="sr-only">(current)</span></a></li>
        <li class="corriente"><a href="#">Noticias</a></li>
       
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="contenedor-secundario">
<br>

<div class="list-group">
<center><h2>Publicaciones</h2></center>


<?php 
$i = 0;
  foreach($consulta->result() as $fila){
    $i++;
    if($i<5):
 ?>

  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading"><?=$fila->title;?></h4>
    <p class="list-group-item-text"><?=$fila->texto;?></p><br>
   <p class="date">Fecha de publicacion : <?=$fila->date;?></p>
   <p class="date">Autor: <?=$fila->author;?></p>
  </a>
  <?
    else:
    break;
    endif;
}
  ?>

</div>
</div>
</div>
<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="<?=base_url();?>assets/js/bootstrap.js"></script>
</body>
</html>