<?php
include('conexion.php');
$sql = "SELECT * FROM correspondencia";
$resultado = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/Ajax.js"></script>
</head>

<body class="bg-body-tertiary">
	<header class="p-3 text-bg-dark">
		<div class="container">
		</div>
	</header>
	<main class="container pt-5">
		<div class="row g-5">
			<div id="contenido" style="background-color: white;"
			class="col-md-5 col-lg-4 order-md-last"></div>
			<div class="col-md-7 col-lg-8 table-responsive small">
				<h2>Correspondencias</h2>
				<table class="table table-striped table-sm">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="Remitente">Remitente</th>
							<th scope="Destinatario">Destinatario</th>
							<th scope="Tipo">Tipo</th>
							<th scope="Categoria">Categoria</th>
							<th scope="Estado">Estado</th>
                            <th scope="Accion">Accion</th>
						</tr>
					</thead>
					<tbody id='corres'>
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
								<?php }else{ ?>
									<td>-</td>
								<?php }?>
					    	</tr>
                        <?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</main>
	<script>
		function mostrar(id) {
    		var contenedor = document.getElementById('contenido');
    		var ajax = new XMLHttpRequest() //crea el objetov ajax 
    		ajax.open("get", 'mostrarCorres.php?id='+id , true);
    		ajax.onreadystatechange = function () {
    		    if (ajax.readyState == 4) {
    		        contenedor.innerHTML = ajax.responseText;
    		    }
    		}
    		ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	  		ajax.send();
		}

		function cargarU(){
			let id = document.getElementById('d').value
			var contenedor = document.getElementById('s');
    		var ajax = new XMLHttpRequest()
    		ajax.open("get", 'generar.php?id='+id, true);
    		ajax.onreadystatechange = function () {
    		    if (ajax.readyState == 4) {
    		        contenedor.innerHTML = ajax.responseText;
    		    }
    		}
    		ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    		ajax.send();
		}

		function enviarCorrespondencia(id) {
    		var contenedor = document.getElementById('contenido');
    		var formulario = document.getElementById("form-envio");
    		var parametros = new FormData(formulario);
			parametros.append('id', id);
			console.log(parametros);
    		var ajax = new XMLHttpRequest();
    		ajax.open("post", 'envio.php', true);
    		ajax.onreadystatechange = function () {
    		    if (ajax.readyState == 4) {
    		        contenedor.innerHTML = ajax.responseText;
    		    }
    		}
    		ajax.send(parametros);
			actualizarC()
		}

		function actualizarC() {
			console.log('actualizando...');
    		var contenedor = document.getElementById('corres');
    		var ajax = new XMLHttpRequest()
    		ajax.open("get", 'acc.php' , true);
    		ajax.onreadystatechange = function () {
    		    if (ajax.readyState == 4) {
    		        contenedor.innerHTML = ajax.responseText;
    		    }
    		}
    		ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	  		ajax.send();
		}
	</script>
</body>

</html>

<?php
$con->close();
?>