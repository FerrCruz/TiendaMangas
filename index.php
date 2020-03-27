<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta content="es" name="language" />
    <title>MangasxD</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
</head>
<body>
  <div>
    <header>
      <nav class="menu  navbar-expand-lg navbar-light bg-secondary">
        <ul class="list-unstyled row" id="itemBarra">
          <li><a href="">Home</a></li>
          <?php
          if(!isset($_SESSION)){
            session_start();
          }
          if(isset($_SESSION["iniciado"])&&$_SESSION["iniciado"] === true){
            $usuario = $_SESSION['user'];
            echo "<li style='color:white;'>$usuario</li>";
            echo "<li><a href='subpaginas/panelDeMangas.php'>Panel de control</a></li>";
            echo "<li><a href='api/api.php'>API</a></li>";
            echo "<li><a href='php/logout.php'>Cerrar Sesion</a></li>";


          }else{
            echo "<li><a href='subpaginas/login.html'>Iniciar Sesion</a></li>";
          }
        ?>
         
          <!--
          <li><a href="">API</a></li>
          <li><a href="#">Acerca de</a></li>
          <li><a href="#">Contacto</a></li> 
          -->
        </ul>
        <div>
          <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo4.png" alt="logo"></a>
        </div>
      </nav>
    </header>

    <div class="container">
      <div class="row justify-content-between">
        <aside class="principal col-12">
          <div class="header">
            <h1 style="text-align: center; padding: 25px;">Mangas en Emisión</h1>
          </div>

          <ul class="animes list-unstyled row" id="articulos">
          </ul>
        </aside>

        <!--
        <aside class="sidebar col-12">
          <div class="fixed">
            <section>
              <div class="header">
                <h3 class="title fa-folder">Generos</h3>
                <ul class="categories list-unstyled">
                  <li><a href="/directorio?genero=vampiros" class="dropdown-item">Vampiros</a></li>
                  <li><a href="/directorio?genero=yaoi" class="dropdown-item">Yaoi</a></li>
                  <li><a href="/directorio?genero=yuri" class="dropdown-item">Yuri</a></li>
                </ul>
              </div>
            </section>
          </div>
        </aside>
        -->
        
      </div>
    </div>

    <footer>
      <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <figure class="navbar-brand logo"><img class="logo" src="img/logo4.png" alt="logo"></figure>
          <div id="ftnav">
            <ul class="social-ft">
              <li class="nav-item"><a class="nav-link fa-twitter fab" href="" rel="nofollow" target=""></a></li>
              <li class="nav-item"><a class="nav-link fa-facebook-f fab" href="" rel="nofollow" target=""></a></li>
              <li class="nav-item"><a class="nav-link fa-youtube fab" href="" rel="nofollow" target=""></a></li>
            </ul>
          </div>
        </nav>
      </div>
    </footer>
  </div>
<script src="js/jquery.js"></script>
<script src="js/mangas.js"></script>
<script src="js/listar.js"></script>
</body>
</html>