<?php
$id = $_POST['id'];
$prioridad = $_POST['prioridad'];
$fecha_limite = $_POST['fl'];
$categoria = $_POST['categoria'];
$idusuario = $_POST['a'];

include('conexion.php');
$sql = "UPDATE correspondencia SET estado='Enviado' ,fecha_limite='$fecha_limite' ,prioridad=$prioridad,
        asignado=$idusuario, categoria=$categoria WHERE id=$id";

$sql2 = "SELECT id,correo,nombre,apellido,cargo FROM usuario WHERE id=$idusuario";
$resultado2 = $con->query($sql2);
$row = $resultado2->fetch_assoc();
$correo = $row['correo'];
$nombre = $row['nombre'];
$apellido = $row['apellido'];
$cargo = $row['cargo'];

$sql3 = "SELECT * FROM categoria WHERE id=$categoria";
$resultado3 = $con->query($sql3);
$row = $resultado3->fetch_assoc();
$departamento = $row['nombre'];

if ($con->query($sql) === TRUE) {
    echo '<hr class="my-4">';
    echo "<h4><b>Enviado</b></h4>";
    echo '<hr class="my-4">';
    echo "<b>Enviado a:</b> $correo <br> <b>Nombre:</b> $nombre <br> <b>Apellido:</b> $apellido <br>
        <b>Cargo:</b> $cargo <br> <b>Categoria:</b> $categoria <br>";
    echo '<hr class="my-4">';
} else {
    echo '<hr class="my-4">';
    echo "<h4><b>Error $sql </b></h4><br>";
    echo '<hr class="my-4">';
}

$con->close();
?>

