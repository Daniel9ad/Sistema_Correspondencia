<?php
include('conexion.php');
$id = $_GET['id'];
$sql = "SELECT * FROM usuario WHERE idc=$id";
$resultado = $con->query($sql);
?>
<?php
while ($row = $resultado->fetch_assoc()) {
?>
    <option value="<?php echo $row['id']?>"><?php echo $row['correo']; ?></option>
<?php
}?>