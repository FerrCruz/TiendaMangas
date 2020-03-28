<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Campus la 35</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilos.css">
</head>
<body>
    <form class="formulario" method="POST" onsubmit="return verificarCodigo();">
        <div class="titulo">
            <h1><img class="logo2" src="../../img/logo4.png"><br>CODIGO</h1>
            <p>Revise su correo electronico e ingrese el codigo de verificacion.</p>
        </div>
        <div class="contenedor">    
            <div class="input-contenedor">
                <input type="text" id="cod"  placeholder="Ingrese el codigo" required>
            </div>
            <input type="submit" value="Siguiente" class="button">
        </div>
    </form>
</body>
<script src="../../js/jquery.js"></script>
    <script>
        function verificarCodigo(){
            let cod = $("#cod").val();
            let parametros = {
            "codigo": cod
            };

            $.ajax({
            url : "../../php/paginasRecuperacion/checkRecoverCode.php",
            type: "post",
            data: parametros,
            success: function (retorno){
                console.log(retorno);
                if(retorno == "OK"){
                    location.href = "pagina3DeRecuperacion.php";
                }
                else{
                  // 
                    alert("Codigo no deseado. Vuelva a revisar su bandeja.");
                }
            }
            });
        return false;
    }
  </script>
</html>