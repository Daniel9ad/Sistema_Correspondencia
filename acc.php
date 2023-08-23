<?php
include('conexion.php');
$sql = "SELECT * FROM correspondencia";
$resultado = $con->query($sql);
?>
<?php while ($row = $resultado->fetch_assoc()) {?>
	<tr >
		<td><?php echo $row['id'] ?></td>
		<td><?php echo $row['remitente'] ?></td>
		<td><?php echo $row['destinatario'] ?></td> 
		<td><?php echo $row['tipo'] ?></td>
        <td><?php echo $row['categoria'] ?></td>
		<?php if ($row['estado']=='En proceso'){?>
			<td style="color: #FF7D96"><b><?php echo $row['estado'] ?></b></td>
		<?php }else if ($row['estado']=='Enviado'){ ?>
			<td style="color: #4EF46A"><b><?php echo $row['estado'] ?></b></td>
		<?php }else{ ?>
			<td><b><?php echo $row['estado'] ?></b></td>
		<?php }?>
		<?php if ($row['estado']=='En proceso'){?>
			<td><button class="btn btn-outline-secondary d-inline-flex align-items-center"
			style="padding: 0.5px 4px 0.5px 4px; font-size: 0.8rem;"
			onclick="mostrar('<?php echo $row['id'];?>')">
			<b>Enviar</b></button></td>
		<?php }?>
	</tr>
<?php } ?>