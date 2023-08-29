<?php

session_start();
$id = $_GET['id'];
$_SESSION['id'] = $id;

include('conexion.php');
$sql = "SELECT cargo FROM usuario WHERE id=$id";
$resultado = $con->query($sql);
$row = $resultado->fetch_assoc();
$_SESSION['cargo'] = $row['cargo'];

?>