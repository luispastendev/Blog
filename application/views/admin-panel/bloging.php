<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Panel de Administracion</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

  <link rel="stylesheet" href="<?=base_url()?>assets/admin/css/style.css">
  
</head>

<body style="word-wrap: break-word;">
  <header class="fixed-header" role="banner">
  <div class="container-fluid">

    <!-- Site Title  -->
    <div class="site-title col-xs-3">
      <h1>Blog de Lautaro Umpierrez</h1>
    </div>
  </div>
</header>

<nav id="sideNav">
  <ul>
    <li > <a href="<?=base_url();?>Admin/configurations" title="Admin / Identification Component"><span class="glyphicon glyphicon-cog" aria-hidden="true" data-menu="admin"></span> </a> </li>
    <li class="active-propio"> <a href="#" title="TechPub Component"><span class="glyphicon glyphicon-briefcase" aria-hidden="true" data-menu="techpub"></span> </a> </li>
   
    <li> <a href="#" title="Tools Component"><span class="glyphicon glyphicon-wrench" aria-hidden="true" data-menu="tools"></span> </a> </li>

    <li> <a href="#" title="Help"><span class="glyphicon glyphicon-question-sign" aria-hidden="true" data-menu="help"></span> </a> </li>

    <li> <a href="#" title="User Component"><span class="glyphicon glyphicon-user" aria-hidden="true" data-menu="user"></span> </a> </li>

    <li> <a href="<?=base_url();?>Admin/desconect" title="User Component"><span class="glyphicon glyphicon-off
" aria-hidden="true" data-menu="user"></span> </a> </li>
  </ul>
</nav>



<menu id="help" class="dynamicMenu">
  <div>
    <h2>Herramientas</h2>
  </div>

  <ul class="admin-menu">
    <li> <a href="#"> Manual de uso </a></li>

  </ul>
</menu>


<main>
  <section>    
    

<div class="list-group">
  <a href="#" class="list-group-item active">
   <h3>Aqui se mostraran todas las enradas que vayas creando !!!</h3>
  </a>
  <?
    foreach($posts->result() as $post){
  ?>
  <a href="#" class="list-group-item">
  <h4><?=$post->title;?></h4>
 <p> <? $letras=50; 
    if(strlen($post->texto)>=$letras):
       echo substr($post->texto,0,$letras)."<p></p>";
    else:
      echo $fila->texto;
    endif;?>
 </p>
 <a href="https://google.com?id=<?=$post->id;?>"><button   class="botoneditar">Editar</button></a>
 <a href=""><button class="botoneliminar">Eliminar</button></a>
 <a href=""><button class="botonprevisualizar">Previsualizar</button></a>
 <br>
 <?}?>
  </a>
  <br>
</div>
  </section>
</main>

<footer>
  <div class="container">
    <p>Blog Lautaro Umpierrez</p>
  </div>
</footer>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<

</body>
</html>
