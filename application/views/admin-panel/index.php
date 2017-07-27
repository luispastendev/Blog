<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Playing With Interface Designs</title>
  
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
    <li> <a href="#" title="Admin / Identification Component"><span class="glyphicon glyphicon-cog" aria-hidden="true" data-menu="admin"></span> </a> </li>
    <li> <a href="#" title="TechPub Component"><span class="glyphicon glyphicon-briefcase" aria-hidden="true" data-menu="techpub"></span> </a> </li>
   
    <li> <a href="#" title="Tools Component"><span class="glyphicon glyphicon-wrench" aria-hidden="true" data-menu="tools"></span> </a> </li>

    <li> <a href="#" title="Help"><span class="glyphicon glyphicon-question-sign" aria-hidden="true" data-menu="help"></span> </a> </li>

    <li> <a href="#" title="User Component"><span class="glyphicon glyphicon-user" aria-hidden="true" data-menu="user"></span> </a> </li>
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

  <ul class="admin-menu">
    <li> <a href="#"> Link Examples </a></li>
    <li> <a href="#"> Link Examples </a></li>
    <li> <a href="#"> Link Examples </a></li>
    <li> <a href="#"> Link Examples </a></li>
  </ul>
</menu>

<menu id="admin" class="dynamicMenu">
  <div>
    <h2> Admin </h2>
  </div>

  <ul class="admin-menu">
    <li> <a href="#"> Admin Options </a></li>
    <li> <a href="#"> Admin Options </a></li>
    <li> <a href="#"> Admin Options </a></li>
  </ul>
</menu>

<menu id="techpub" class="dynamicMenu">
  <div>
    <h2> Tech Pubs </h2>
  </div>

  <ul class="admin-menu">
    <li> <a href="#"> Tech Pub Options </a></li>
    <li> <a href="#"> Tech Pub Options </a></li>
    <li> <a href="#"> Tech Pub Options </a></li>
  </ul>
</menu>

<menu id="inspector" class="dynamicMenu">
  <div>
    <h2> Inspection Tool </h2>
  </div>

  <ul class="admin-menu">
    <li> <a href="#"> Do this </a></li>
    <li> <a href="#"> Engine Something </a></li>
    <li> <a href="#"> Check this out </a></li>
  </ul>
</menu>

<menu id="tools" class="dynamicMenu">
  <div>
    <h2> Tools </h2>
  </div>

  <ul class="admin-menu">
    <li> <a href="#"> Order Tool </a></li>
    <li> <a href="#"> Report Broken Tool </a></li>
    <li> <a href="#"> Find Needed Tool </a></li>
  </ul>
</menu>

<menu id="help" class="dynamicMenu">
  <div>
    <h2> Inspection Tool </h2>
  </div>

  <ul class="admin-menu">
    <li> <a href="#"> Application Documentation </a></li>
    <li> <a href="#"> Using Interface </a></li>
    <li> <a href="#"> Modifying  </a></li>
  </ul>
</menu>


<main>
  <section>
    <h2>A cool section</h2>

    <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em>      Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci,
      sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

    <h2>Header Level 2</h2>

    <ol>
      <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
      <li>Aliquam tincidunt mauris eu risus.</li>
    </ol>

    <blockquote>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus
        turpis elit sit amet quam. Vivamus pretium ornare est.</p>
    </blockquote>

    <h3>Header Level 3</h3>

    <ul>
      <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
      <li>Aliquam tincidunt mauris eu risus.</li>
    </ul>

    <pre><code>
#header h1 a { 
	display: block; 
	width: 300px; 
	height: 80px; 
}
</code></pre>

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
