<?php
$con = new mysqli("localhost", "root", "","db_correspondencias");
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);
?>