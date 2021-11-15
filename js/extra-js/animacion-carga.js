window.onload = function(){ //cuando la ventana halla cargado por completo se cumple x funcion
    alert("No olvide verificar sus datos y posteriormente confirmarlos"); //quitar cuando ya este subido a la web
    $("#onload").fadeOut(); //Termina de cargar la pagina y desaparece el div de la animacion
    $("body").removeClass("hidden"); //Remueve la clase del body
};
