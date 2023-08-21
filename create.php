<?php

#$remitente = $_POST['remitente'];
#$destinatario = $_POST['destinatario'];
echo 'Funciona';

#$fotografia = null;
#if (isset($_FILES['archivo'])) {
#    $archivo_original = $_FILES['archivo']['name'];
#    $arreglo = explode(".", $archivo_original);
#    $extension = $arreglo[1];
#    $fotografia = uniqid() . '.' . $extension;
#}
#
#include('conexion.php');
#
#copy($_FILES['archivo']['tmp_name'], 'images/' . $fotografia);
#$sql = "INSERT into personas (fotografia,nombres,apellidos,celular,idprofesion)
#VALUES ('$fotografia','$nombres','$apellidos',$celular,$idprofesion)";
#//echo $sql;
#if ($con->query($sql) === TRUE) {
#    echo "Se creo el registro correctamente";
#} else {
#    echo "Error: " . $sql . "<br>" . $con->error;
#}

#$con->close();
?>