<?php
$con = new mysqli("localhost", "root", "","bd_correspondencia");
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);
?>