<?php
session_start();
$id = $_SESSION['id'];
$cargo = $_SESSION['cargo'];

include('conexion.php');
if ($cargo=='sec'){
    $remitente = $_POST['remitente'];
}else{
    $s = "SELECT nombre FROM usuario WHERE id=$id";
    $resultado = $con->query($s);
    $row = $resultado->fetch_assoc();
    $remitente = $row['nombre'];
}
$destinatario = $_POST['destinatario'];
$asunto = $_POST['asunto'];
$tipo = $_POST['tipo'];
$fecha_recepcion = date("Y-m-d");

$sql = "INSERT INTO correspondencia(remitente,destinatario,asunto,tipo,fecha_recepcion,registro,estado)
VALUES ('$remitente','$destinatario','$asunto','$tipo','$fecha_recepcion',$id,'En proceso')";

if ($con->query($sql) === TRUE) {
    echo '<hr class="my-4">';
    echo "<h4><b>Se creo el registro correctamente</b></h4><br>";
    echo '<hr class="my-4">';
    echo "<b>Remitente:</b> $remitente <br> <b>Destinatario:</b> $destinatario <br> <b>Asunto:</b> $asunto <br>
        <b>Tipo:</b> $tipo <br> <b>Fecha recepcion:</b> $fecha_recepcion <br>
        <b>Estado:</b> En proceso";
    echo '<hr class="my-4">';
} else {
    echo '<hr class="my-4">';
    echo "<h4><b>Error $sql </b></h4><br>";
    echo '<hr class="my-4">';
}

$con->close();
?>