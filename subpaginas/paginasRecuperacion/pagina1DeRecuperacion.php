<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Campus la 35</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilos.css">
</head>
<body>
    <form class="formulario" method="POST" onsubmit="return registrarUsuario();">
        <div class="titulo">
            <h1><img class="logo2" src="../../img/logo4.png"><br>DNI</h1>
        </div>
        <div class="contenedor">    
            <div class="input-contenedor">
                <input type="text" id="dni" name="documento" placeholder="Ingrese el DNI" required>
            </div>
            <input type="submit" value="Siguiente" class="button">
        </div>
    </form>

    <script src="../../js/jquery.js"></script>
    <script>
        function registrarUsuario(){
            let dni = $("#dni").val();
            let parametros = {
            "documento": dni
            };

            $.ajax({
            url : "../../php/paginasRecuperacion/forgetPassword.php",
            type: "post",
            data: parametros,
            success: function (retorno){
                
                if(retorno == "OK"){
                    console.log(retorno);
                    location.href = "pagina2DeRecuperacion.php";
                }
                else{
                    alert("Error. No existe el dni ingresado.");
                }
            }
            });
        return false;
    }
  </script>
</body>
</html>