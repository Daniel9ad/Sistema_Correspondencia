<?php
$id = $_GET['id'];
include('conexion.php');

$sql = "SELECT * FROM correspondencia WHERE id=$id";
$resultado = $con->query($sql);
$row = $resultado->fetch_assoc();

$sql2 = "SELECT * FROM departa";
$resultado2 = $con->query($sql2);

$sql3 = "SELECT id,correo,idd FROM usuario WHERE idd='1'";
$resultado3 = $con->query($sql3);

$remitente = $row['remitente'];
$destinatario = $row['destinatario'];
$asunto = $row['asunto'];
$tipo = $row['tipo'];   
$categoria = $row['categoria'];
$fecha_recepcion = $row['fecha_recepcion'];
echo '<hr class="my-4">';
echo "<b>Remitente:</b> $remitente <br> <b>Destinatario:</b> $destinatario <br> <b>Asunto:</b> $asunto <br>
    <b>Tipo:</b> $tipo <br> <b>Categoria:</b> $categoria <br> <b>Fecha recepcion:</b> $fecha_recepcion <br>";
echo '<hr class="my-4">';
?>

<form class="needs-validation" action="javascript:enviarCorrespondencia('<?php echo $id; ?>')" method="POST"
    enctype="multipart/form-data" id="form-envio">
    <div class="row g-3">
        <div class="col-sm-12">
            <label for="prioridad" class="form-label">Prioridad:</label>
            <input type="number" class="form-control" name="prioridad" required>
            <div class="invalid-feedback">
                Introdusca un prioridad
            </div>
        </div>

        <div class="col-sm-12">
            <label for="fl" class="form-label">Fecha limite:</label>
            <input type="date" class="form-control" name="fl" required>
            <div class="invalid-feedback">
                Introdusca un fecha limite
            </div>
        </div>
        <!--
        <div class="col-md-12">
            <label for="como" class="form-label">Como:</label>
            <select class="form-select" name="como" required>
                <option value="">carta</option>
                <option>memorando</option>
                <option>correo</option>
                <option>paquete</option>
            </select>
            <div class="invalid-feedback">
                Seleccione una forma de envio
            </div>
        </div>
        -->
        <div class="col-md-12">
            <label for="departamento" class="form-label">Departamento:</label>
            <select class="form-select" name="departamento" onchange='cargarU()' id="d" required>
                <?php while ($d = $resultado2->fetch_assoc()) { ?>
                    <option value="<?php echo $d['id']; ?>">
                        <?php echo $d['nombre']; ?>
                    </option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
                Seleccione a que departamento de enviara
            </div>
        </div>

        <div class="col-md-12">
            <label for="a" class="form-label">A:</label>
            <select class="form-select" name="a" id="s" required>
                <?php while ($c = $resultado3->fetch_assoc()) { ?>
                    <option value="<?php echo $c['id']; ?>">
                        <?php echo $c['correo']; ?>
                    </option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
                Seleccione a quien se enviara
            </div>
        </div>
    </div>

    <hr class="my-4">
    <button class="w-50 btn btn-dark btn-lg" type="submit">Enviar</button>
    <hr class="my-4">
</form>

<?php
$con->close();
?>