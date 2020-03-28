<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body >
    <div class="container">
        <form action="../php/login.php" method="POST">
            <input type="hidden" name="password" id="password">
            <div class="row">
                <div class="center-block col-lg-5 ">
                    <article class="login">
                        <header style="text-align: center;">
                            <img src="../img/login.png">
                        </header>
                        
                        <div class="form-group">
                            <input placeholder="Usuario" name="user" id="login-user" type="text" class="form-control " maxlength="32" required>
                            <input placeholder="Contraseña" name="pass" id="pass" type="password" class="form-control " maxlength="32" required> 
                        </div>
                        <div class="form-group">
                            <input type="submit" name="" class="btn btn-primary btn-lg btn-block" value="Ingresar">
                        </div>
                        <footer>
                            <a href="">Olvidaste tu contraseña?</a>
                        </footer>
                    </article>
                </div>
            </div>
        </form>
    </div>
    <script src="../js/jquery.js"></script>
</body>
</html>