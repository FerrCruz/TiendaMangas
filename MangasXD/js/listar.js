articulos["datos"].forEach(function(dato, index) {
    let titulo = dato['Titulo'];
    let autor = dato["Autor"];
    let tomo = dato["Tomo"];
    let precio = dato["Precio"];
    let imagen = dato["img"];
    pintar("articulos",titulo,autor,tomo,precio,imagen);
});

function pintar(categoria,titulo,autor,tomo,precio,imagen){
    var estructura = ' \
        <li class="col-6 col-sm-4 col-md-3 col-xl-2">\
            <article class="anime">\
                <a href="">\
                  <img src="'+imagen+'" alt="img">\
                </a>\
                  <h3 class="title" style="font-size: 18px">'+titulo+'</h3>\
                  <p style="font-size: 16px; color: black; margin: 0;">Autor: '+autor+'</p>\
                  <p style="font-size: 16px; color: black; margin: 0;">Tomo: '+tomo+'</p>\
                  <p style="font-size: 16px; color: black;">Precio: '+precio+'</p>\
            </article>\
        </li>\
    ';

    $("#"+categoria).append(estructura);    
}