<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta content="es" name="language" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
          <li><a href="subpaginas/contacto.html">Contacto</a></li>
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
            echo "<li><a href='subpaginas/login.php'>Iniciar Sesion</a></li>";
          }
          
        ?>
        
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
            <p style="text-align: center; padding: 15px; font-size: 40px;">Horario: <?php echo date("H:i:s")?>.</p>
          </div>

          <ul class="animes list-unstyled row" id="articulos">
          <?php

          include("php/connect.php");
          $sql = "SELECT * FROM mangas";
          $result = $conexion->query($sql);

          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo"<li class='col-6 col-sm-4 col-md-3 col-xl-2'>
                  <article class='anime'><a href=''><img src=". $row["Imagen"]." alt='img'>
                    </a><h3 class='title' style='font-size: 18px'>". $row["Nombre"]."</h3>
                    <p style='font-size: 16px; color: black; margin: 0;'>Autor: ". $row["Autor"]."</p>
                    <p style='font-size: 16px; color: black; margin: 0;'>Tomo: ". $row["Tomo"]."</p>
                    <p style='font-size: 16px; color: black;'>Precio: ". $row["Precio"]."</p>
                  </article>
                </li>";
            }
          }
          $conexion->close();
          ?>
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
          <p style='color:white;'>&copy <?php echo date('Y')?> Tienda Mangas</p>
        </nav>
      </div>
    </footer>
  </div>
<script src="js/jquery.js"></script>
<!-- <script src="js/mangas.js"></script>
<script src="js/listar.js"></script>  -->
</body>
</html>