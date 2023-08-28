function crearCorrespondencia() {
    var contenedor = document.getElementById('notificacion');
    var formulario = document.getElementById("form-correspondencia");
    var parametros = new FormData(formulario);
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("post", 'create.php' , true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.send(parametros);
}

