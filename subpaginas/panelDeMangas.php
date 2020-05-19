<?php
   if(!isset($_SESSION)){
      session_start();
   }
   if(isset($_SESSION["iniciado"])&&$_SESSION["iniciado"] === true){
   }else{
      header('Location: ../index.php');
   }
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <title>Panel de Control</title>
      <link rel="stylesheet" type="text/css" href="../css/panelDeMangas.css">
   </head>
   <body>
      <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
         
         <tr>
            <td valign="top">
               <table width="800"  border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                     <td valign="top">                       
                        <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#94B1C3">
                           <tr>
                              <td></td>
                              <td height="32" colspan="5" align="center" bgcolor="#384D5A"><strong><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><a name="comiquerias" id="occidental2"></a>PANEL DE CONTROL</font></strong></td>
                              <td></td>
                           </tr>
                           <tr>
                              <td height="6"></td>
                              <td height="6"></td>
                              <td height="6"></td>
                              <td height="6"></td>
                              <td height="6"></td>
                              <td height="6"></td>
                              <td height="6"></td>
                           </tr>
                           <tr>
                              <td width="10"></td>
                              <td colspan="6" valign="top" bgcolor="#D1DFE7">
                                 <table width="100%" border="0" cellpadding="10">
                                    <tr>
                                       <td bgcolor="#D1DFE7">
                                          <div align="center">
                                             <div align="center" class="Estilo26" style="padding: 15px; background-color: rgb(142, 174, 195);">
                                                <font color="#000000" size="4"><strong><a name="capital"></a>MANGAS</strong></font>
                                                 <a href="../index.php"><button style="float: right; cursor: pointer;">HOME</button></a>
                                             </div>
                                            
                                             <table width="100%" cellpadding="10" cellspacing="1">

                                                <button onclick="agregar('formAgregar');"  style="width: 100%; padding: 10px;">AGREGAR</button>
                                                <thead>
                                                                                                     
                                                   <tr>
                                                      <td width="20%" bgcolor="#002842">
                                                         <p style="text-align: center;"><font color="#FFFFF0">
                                                            <span style="text-transform: uppercase"><span class="Estilo26" style="font-size: 15px;">Nombre</span></span>
                                                            </font>
                                                      </td>
                                                      <td width="20%" bgcolor="#002842">
                                                         <p style="text-align: center;"><font color="#FFFFF0">
                                                         <span style="text-transform: uppercase"><span class="Estilo26" style="font-size: 15px;">Autor</span></span>
                                                         </font>
                                                      </td>
                                                      <td width="20%" bgcolor="#002842">
                                                         <p style="text-align: center;"><font color="#FFFFF0">
                                                         <span style="text-transform: uppercase"><span class="Estilo26" style="font-size: 15px;">Tomo</span></span>
                                                         </font>
                                                      </td>
                                                      <td width="20%" bgcolor="#002842">
                                                         <p style="text-align: center;"><font color="#FFFFF0">
                                                         <span style="text-transform: uppercase"><span class="Estilo26" style="font-size: 15px;">Precio</span></span>
                                                         </font>
                                                      </td>

                                                      <td width="10%" bgcolor="#002842">
                                                         <p style="text-align: center;"><font color="#FFFFF0">
                                                         <span style="text-transform: uppercase"><span class="Estilo26" style="font-size: 15px;">Imagen</span></span>
                                                         </font>
                                                      </td>
                                                       <td width="10%" bgcolor="#002842">
                                                         <p style="text-align: center;"><font color="#FFFFF0">
                                                         <span style="text-transform: uppercase"><span class="Estilo26" style="font-size: 15px;"></span></span>
                                                         </font>
                                                      </td>

                                                   </tr>
                                                </thead>
                                                
                                                <?php 
                                                   include("../php/connect.php");
                                                   
                                                   $resultados = mysqli_query($conexion,"SELECT*FROM Mangas");
                                                   while($consulta = mysqli_fetch_array($resultados)){
                                                ?>

                                                   <tr>
                                                      <td width="20%" bgcolor="#002842">
                                                         <p style="margin-left: 10px"><font color="#FFFFF0">
                                                            <span style="text-transform: uppercase"><span class="Estilo26"><?php echo $consulta['Nombre'] ?></span></span></font>
                                                      </td>
                                                      <td width="20%" bgcolor="#002842">
                                                         <p style="margin-left: 10px"><font color="#FFFFF0">
                                                            <span style="text-transform: uppercase"><span class="Estilo26"><?php echo $consulta['Autor'] ?></span></span></font>
                                                      </td>
                                                      <td width="20%" bgcolor="#002842">
                                                         <p style="margin-left: 10px; text-align: center;"><font color="#FFFFF0">
                                                            <span style="text-transform: uppercase"><span class="Estilo26"><?php echo $consulta['Tomo'] ?></span></span></font>
                                                      </td>
                                                      <td width="20%" bgcolor="#002842">
                                                         <p style="margin-left: 10px; text-align: center;"><font color="#FFFFF0">
                                                            <span style="text-transform: uppercase"><span class="Estilo26"><?php echo $consulta['Precio'] ?></span></span></font>
                                                      </td>
                                               
                                                      <td width="10%" style="padding: 0px;" bgcolor="#002842">
                                                         <?php $url= $consulta['Imagen'];
                                                            echo "<a target='_blank' href='../$url'><img src='../$url'></a>";
                                                         ?>
                                                      </td>
                                    
                                                      <td width="10%" class="icon" bgcolor="#002842">
                                                      
                                                         
                                                         <?php
                                                            echo "<a onclick='editar(".$consulta["MangaID"].");' style=' cursor: pointer;'><img style='height: 50px;' margin-bottom: 5px;' src='../img/edit.svg'>"; 
                                                            //echo '<a type='button' onclick='editar(".$consulta[""].");' style='cursor: pointer;' ><img style='height: 50px; margin-bottom: 5px;' src='../img/edit.svg'></a>";
                                                            echo "<a onclick='eliminar(".$consulta["MangaID"].");' style=' cursor: pointer;'><img style='height: 50px; ' src='../img/trash.svg'>";
                                                         ?>
                                                         <!-- <a onclick="eliminar('formAgregar');" style=" cursor: pointer;"><img style="height: 50px; " src="../img/trash.svg"></a> -->
                                                      </td>
                                                   </tr>
                                                <?php 
                                                   }
                                                ?>

                                             </table>
                                          </div>
                                          <table width="100%" border="0">
                                          </table>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                              <td width="10"></td>
                           </tr>
                           <tr>
                              <td height="8"></td>
                              <td height="8"></td>
                              <td height="8"></td>
                              <td height="8"></td>
                              <td height="8"></td>
                              <td height="8"></td>
                              <td height="8"></td>
                           </tr>
                        </table>
                     </td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>

      <div id="formAgregar">

      </div>

      <script src="../js/jquery.js"></script>
    <script>

         var tipo = false;
        function agregar(categoria){
         
         if (tipo==false){
            var estructura = ' \
             <a href="#miModal">Abrir Modal</a>\
               <div id="miModal" class="modal">\
                    <div class="modal-contenido">\
                      <div class="cuerpo">\
                          <form action="../php/panelDeMangas.php" method="POST" enctype="multipart/form-data">\
                           <a href="#" class="close">X</a>\
                            <article class="login">\
                                <div>\
                                    <h3>TITULO</h3>\
                                    <input name="Titulo" id="login-user" type="text" class="form-control " maxlength="32" required>\
                                    <h3>AUTOR</h3>\
                                    <input name="Autor" id="login-user" type="text" class="form-control " maxlength="32" required>\
                                    <h3>TOMO</h3>\
                                    <input name="Tomo" id="login-user" type="text" class="form-control " maxlength="32" required>\
                                    <h3>PRECIO</h3>\
                                    <input name="Precio" id="login-user" type="value" class="form-control " maxlength="32" required>\
                                    <h3>IMAGEN</h3>\
                                    <input style="border:none;" name="Imagen" id="login-user" type="text" class="form-control " maxlength="1000" required>\
                                    <input name="archivo" type="file" class="instextbox">\
                                </div>\
                                <div style="padding: 15px 0px;">\
                                    <input type="submit" name="botonAgregar" class="button" value="Registrar">\
                                </div>\
                            </article>\
                        </form>\
                      </div>\
                     </div>\
               </div>\
          ';
          tipo=true;
         }


          

    $("#"+categoria).append(estructura);    
}

       function editar(id){   
         let cosa = "formAgregar"

         
         if (tipo==false){
            var estructura = ' \
             <a href="#miModal">Abrir Modal</a>\
               <div id="miModal" class="modal">\
                    <div class="modal-contenido">\
                      <div class="cuerpo">\
                          <form action="../php/panelDeMangas.php" method="POST">\
                           <a href="#" class="close">X</a>\
                            <article class="login">\
                                <div>\
                                    <h3>TITULO</h3>\
                                    <input name="Titulo" id="titulo" id="login-user" type="text" class="form-control " maxlength="32" required >\
                                    <h3>AUTOR</h3>\
                                    <input name="Autor" id="login-user" type="text" class="form-control " maxlength="32" required>\
                                    <h3>TOMO</h3>\
                                    <input name="Tomo" id="login-user" type="text" class="form-control " maxlength="32" required>\
                                    <h3>PRECIO</h3>\
                                    <input name="Precio" id="login-user" type="value" class="form-control " maxlength="32" required>\
                                    <h3>IMAGEN</h3>\
                                    <input style="border:none;" name="Imagen" id="login-user" type="text" class="form-control " maxlength="600" required>\
                                    <input name="archivo" type="file" class="instextbox">\
                                </div>\
                                <div style="padding: 15px 0px;">\
                                    <input type="submit" name="botonEditar" class="button" value="Registrar">\
                                </div>\
                            </article>\
                        </form>\
                      </div>\
                     </div>\
               </div>\
          ';
          tipo=true;
         }        

    $("#"+cosa).append(estructura);    
}

  function eliminar(id){

       $.ajax({
               data: {'id':id},
               url: '../php/eliminardatos.php',
               type: "post" ,
				   success: function(retorno){
          if(retorno == "OK"){
            
            alert("Se elimino el articulo");
                     location.reload();
          }
        }
            });
        }
    </script>
   </body>
</html>