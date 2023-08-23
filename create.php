<?php

$remitente = $_POST['remitente'];
$destinatario = $_POST['destinatario'];
$asunto = $_POST['asunto'];
$tipo = $_POST['tipo'];
$categoria = $_POST['categoria'];
$fecha_recepcion = date("Y-m-d");

include('conexion.php');

$sql = "INSERT INTO correspondencia(remitente,destinatario,asunto,tipo,categoria,fecha_recepcion,estado)
VALUES ('$remitente','$destinatario','$asunto','$tipo','$categoria','$fecha_recepcion','En proceso')";

if ($con->query($sql) === TRUE) {
    echo '<hr class="my-4">';
    echo "<h4><b>Se creo el registro correctamente</b></h4><br>";
    echo '<hr class="my-4">';
    echo "<b>Remitente:</b> $remitente <br> <b>Destinatario:</b> $destinatario <br> <b>Asunto:</b> $asunto <br>
        <b>Tipo:</b> $tipo <br> <b>Categoria:</b> $categoria <br> <b>Fecha recepcion:</b> $fecha_recepcion <br>
        <b>Estado:</b> En proceso";
    echo '<hr class="my-4">';
} else {
    echo '<hr class="my-4">';
    echo "<h4><b>Error $sql </b></h4><br>";
    echo '<hr class="my-4">';
}

$con->close();
?>