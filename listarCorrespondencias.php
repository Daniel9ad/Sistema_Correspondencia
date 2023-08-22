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
                            <th scope="Accion">Accion</th>
						</tr>
					</thead>
					<tbody>
                        <?php while ($row = $resultado->fetch_assoc()) {?>
					    	<tr >
					    		<td><?php echo $row['id'] ?></td>
					    		<td><?php echo $row['remitente'] ?></td>
					    		<td><?php echo $row['destinatario'] ?></td>
					    		<td><?php echo $row['tipo'] ?></td>
                                <td><?php echo $row['categoria'] ?></td>
					    		<td><a href="javascript:mostrar('<?php echo $row['id'];?>')">Enviar</a></td>
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
	</script>
</body>

</html>

<?php
$con->close();
?>