function crearCorrespondencia() {
    var contenedor = document.getElementById('notificacion');
    var formulario = document.getElementById("form-correspondencia");
    var parametros = new FormData(formulario);
    f=new FormData();
    f.add
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("post", 'create.php' , true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.send(parametros);
}


//function mostrarC(id) {
//    console.log('funciona')
//    var contenedor = document.getElementById('datos');
//    var ajax = new XMLHttpRequest();
//    ajax.open("get", '../mostrar.php?id='+id, true);
//    ajax.onreadystatechange = function () {
//        if (ajax.readyState == 4) {
//            contenedor.innerHTML = ajax.responseText;
//        }
//    }
//    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
//    ajax.send();
//}