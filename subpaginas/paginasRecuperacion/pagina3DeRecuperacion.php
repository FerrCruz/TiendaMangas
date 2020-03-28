<html>
<head>
	<meta charset="UTF-8">
	<title>Campus la 35</title>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/estilos.css">
</head>
<body>
	<form class="formulario" method="POST" onsubmit="return verificarContraseña();">
		<div class="titulo">
			<h1><img class="logo2" src="../../img/logo4.png"><br>Ingrese su nueva contraseña</h1>
		</div>
		<div class="contenedor">    
        	<div class="input-contenedor">
        		<input type="password" id="pass1" placeholder="Ingrese su nueva contraseña" required>
            </div>
            <div class="input-contenedor">
				 <input type="password" id="pass2" placeholder="Ingrese su contraseña de nuevo" required>
			</div>
			<input type="submit" value="Siguiente" class="button">
        </div>
	</form>
	<script src="../../js/jquery.js"></script>
    <script>
        function verificarContraseña(){
            let pass1 = $("#pass1").val();
			let pass2 = $("#pass2").val();
			console.log(pass1);
			console.log(pass2);
            let parametros = {
            "password": pass1,
			"password2" : pass2
            };

            $.ajax({
            url : "../../php/paginasRecuperacion/changePassword.php",
            type: "post",
            data: parametros,
            success: function (retorno){				
                if(retorno == "OK"){
                    location.href = "pagina4DeRecuperacion.php";
                }
                else{
                    alert("Error. No coinciden la contraseñas.");
                }
            }
            });
        return false;
    	}
  	</script>
</body>
</html>