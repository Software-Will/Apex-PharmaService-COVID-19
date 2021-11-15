//FUNCION REGION
function region(regionNum) {
    switch (regionNum) {
        case 1:return'Amazonas';break;
        case 2:return'Ancash';break;
        case 3:return'Apurimac';break;
        case 4:return'Ayacucho';break;
        case 5:return'Cajamarca';break;
        case 6:return'Callao';break;
        case 7:return'Cusco';break;
        case 8:return'Huancavelica';break;
        case 9:return'Huanuco';break;
        case 10:return'Ica';break;
        case 11:return'Junín';break;
        case 12:return'La Libertad';break;
        case 13:return'Lambayeque';break;
        case 14:return'Lima';break;
        case 15:return'Loreto';break;
        case 16:return'Madre de Dios';break;
        case 17:return'Moquegua';break;
        case 18:return'Pasco';break;
        case 19:return'Piura';break;
        case 20:return'Puno';break;
        case 21:return'San Martín';break;
        case 22:return'Tacna';break;
        case 23:return'Tumbes';break;
        case 24:return'Ucayali';break;
    }
}


//FUNCION RECEPTORDATOS
function getData() {
//    localStorage.setItem('nombres');
//    var nombre = localStorage.getItem('nombres');
//    document.getElementById('nombreMuestreo').innerHTML = nombre;
    alert("REVISE LA CONSOLA - F12");
    //DECLARAR - RECOLECTAR DATOS
    var dni = document.getElementById("DNI").value;
    var nombre = document.getElementById("nombres").value;
    var apellido = document.getElementById("apellidos").value;
    var edad = document.getElementById("edad").value;
    var direccion = document.getElementById("direccion").value;
    var celular = document.getElementById("numeroCelular").value;
    var correo = document.getElementById("email").value;
    var regionNum = parseInt(document.getElementById("regiones").value);
    //var estado; -> A FUTURO 
    //MUESTREO
    console.log("DATOS DEL REGISTRADO - VACUNACION"
            + "\nDNI: " + dni
            + "\nNombres: " + nombre
            + "\nApellidos: " + apellido
            + "\nEdad: " + edad + " años"
            + "\nDirección: " + direccion
            + "\nNúmero Celular: " + celular
            + "\nCorreo: " + correo
            + "\nRegión: " + region(regionNum));
}

