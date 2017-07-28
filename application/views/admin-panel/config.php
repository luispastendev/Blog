<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Panel de Administracion</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

  <link rel="stylesheet" href="<?=base_url()?>assets/admin/css/style.css">
  
</head>

<body>
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
    <li class="active-propio"> <a href="<?=base_url();?>Admin/configurations" title="Admin / Identification Component"><span class="glyphicon glyphicon-cog" aria-hidden="true" data-menu="admin"></span> </a> </li>
    <li> <a href="<?=base_url();?>Admin/bloging" title="TechPub Component"><span class="glyphicon glyphicon-briefcase" aria-hidden="true" data-menu="techpub"></span> </a> </li>
   
    <li> <a href="#" title="Tools Component"><span class="glyphicon glyphicon-wrench" aria-hidden="true" data-menu="tools"></span> </a> </li>

    <li> <a href="#" title="Help"><span class="glyphicon glyphicon-question-sign" aria-hidden="true" data-menu="help"></span> </a> </li>

    <li> <a href="#" title="User Component"><span class="glyphicon glyphicon-user" aria-hidden="true" data-menu="user"></span> </a> </li>

    <li> <a href="<?=base_url();?>Admin/desconect" title="User Component"><span class="glyphicon glyphicon-off
" aria-hidden="true" data-menu="user"></span> </a> </li>
  </ul>
</nav>

<menu id="user" class="dynamicMenu">
  <!-- User Stuffs -->
  <div class="user-profile">
    <div class="profile-pic">
      <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNy4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iNDAwcHgiIGhlaWdodD0iNDAwcHgiIHZpZXdCb3g9IjAgMCA0MDAgNDAwIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA0MDAgNDAwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxjaXJjbGUgZmlsbD0iI0ZGRkZGRiIgY3g9IjIwMC4zNTkiIGN5PSIxMzAuNjkxIiByPSI4Ny45NjIiLz4NCgk8cGF0aCBmaWxsPSIjRkZGRkZGIiBkPSJNMzQxLjc4OSw0NDguNjUyYzAuNTY5LTYuOTMxLDAuODcyLTEzLjk2OSwwLjg3Mi0yMS4xMDNjMC0xMDUuNDQ3LTYzLjg3MS0xOTAuOTI5LTE0Mi42NjEtMTkwLjkyOQ0KCQlTNTcuMzM5LDMyMi4xMDIsNTcuMzM5LDQyNy41NDljMCw2LjA5NSwwLjIyMywxMi4xMTksMC42NCwxOC4wNjdDMTUyLjE1OCw0NjAuMDY2LDI0Ny43MzMsNDYxLjA4MSwzNDEuNzg5LDQ0OC42NTJ6Ii8+DQo8L2c+DQo8L3N2Zz4NCg==" alt="username here" />
    </div>

    <div class="user-info">
      <div class="username">
        <p> Username Here </p>
      </div>
      <ul class="profile-menu">
        <li><a href="/directory"><span class="glyphicon glyphicon-list-alt" title="Directory Phonebook"></span></a></li>
        <li><a href="/help?topic=index"><span class="glyphicon glyphicon-question-sign" title="Help"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-cog" title="Settings"></span></a></li>
        <li><a href="/login"><span class="glyphicon glyphicon-log-out" title="Log Out / End Session"></span></a></li>
      </ul>
    </div>
  </div>


</menu>


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
    <h2>Configura las bases de tu blog<strong>...</strong></h2>
<form method="POST" action="<?=base_url();?>Admin/config_base_of_blog">
    <p>Nombre del blog:</p>
    <input type="text" name="title" placeholder="example: Blog lautaro" value="<?=$nameblog->data;?>"><br><br>
    <button name="submit" type="submit" class="btn boton1">Guardar cambios<strong>...</strong></button>
    </form>
  </section>
</main>

<footer>
  <div class="container">
    <p>Blog Lautaro Umpierrez</p>
  </div>
</footer>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
