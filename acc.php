<?php

session_start();
$id = $_SESSION['id'];
$cargo = $_SESSION['cargo'];

$c = $_GET['c'];
if ($c=='1'){
	$c = 'registro';
}else{
	$c = 'asignado';
}

include('conexion.php');
if ($cargo=='au'){
	$sql = "SELECT * FROM correspondencia WHERE $c=$id";
}else{
	$sql = "SELECT * FROM correspondencia";
}
$resultado = $con->query($sql);

?>
<?php while ($row = $resultado->fetch_assoc()) {?>
	<tr >
		<td><?php echo $row['id'] ?></td>
		<td><?php echo $row['remitente'] ?></td>
		<td><?php echo $row['destinatario'] ?></td>
		<td><?php echo $row['tipo'] ?></td>
		<?php if ($cargo=='sec') { ?>
			<?php if ($row['estado']=='En proceso'){?>
				<td style="color: #9CC8D9"><b><?php echo $row['estado'] ?></b></td>
			<?php }else if ($row['estado']=='Enviado'){ ?>
				<td style="color: #7DBF1B"><b><?php echo $row['estado'] ?></b></td>
			<?php }else{ ?>
				<td><b><?php echo $row['estado'] ?></b></td>
			<?php }?>
			<?php if ($row['estado']=='En proceso'){?>
				<td><button class="btn btn-outline-secondary d-inline-flex align-items-center"
				style="padding: 0.5px 4px 0.5px 4px; font-size: 0.8rem;"
				onclick="mostrarRE('<?php echo $row['id'];?>')">
				<b>Enviar</b></button></td>
			<?php }else{ ?>
				<td>-</td>
			<?php }?>
		<?php } ?>
	</tr>
<?php } ?>