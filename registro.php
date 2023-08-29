<?php

session_start();
$id = $_SESSION['id'];
$cargo = $_SESSION['cargo'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/Ajax.js"></script>
</head>

<body class="bg-body-tertiary">

    <header class="pt-2 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="Home.html" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                    <svg width="46" height="46" fill="currentColor" class="bi bi-alipay" viewBox="0 0 16 16">
                        <path d="M2.541 0H13.5a2.551 2.551 0 0 1 2.54 2.563v8.297c-.006 0-.531-.046-2.978-.813-.412-.14-.916-.327-1.479-.536-.303-.113-.624-.232-.957-.353a12.98 12.98 0 0 0 1.325-3.373H8.822V4.649h3.831v-.634h-3.83V2.121H7.26c-.274 0-.274.273-.274.273v1.621H3.11v.634h3.875v1.136h-3.2v.634H9.99c-.227.789-.532 1.53-.894 2.202-2.013-.67-4.161-1.212-5.51-.878-.864.214-1.42.597-1.746.998-1.499 1.84-.424 4.633 2.741 4.633 1.872 0 3.675-1.053 5.072-2.787 2.08 1.008 6.37 2.738 6.387 2.745v.105A2.551 2.551 0 0 1 13.5 16H2.541A2.552 2.552 0 0 1 0 13.437V2.563A2.552 2.552 0 0 1 2.541 0Z"/>
                        <path d="M2.309 9.27c-1.22 1.073-.49 3.034 1.978 3.034 1.434 0 2.868-.925 3.994-2.406-1.602-.789-2.959-1.353-4.425-1.207-.397.04-1.14.217-1.547.58Z"/>
                    </svg>
                </a>
                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li>
                        <a href="Home.html" class="nav-link text-white btn btn-dark">
                            <svg class="bi d-block mx-auto mb-1" 
                                width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="registro.php" class="nav-link text-secondary btn btn-dark">
                            <svg class="bi d-block mx-auto mb-1" 
                                width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 0 .5Zm0 2A.5.5 0 0 1 .5 2h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm9 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-9 2A.5.5 0 0 1 .5 4h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm5 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm-12 2A.5.5 0 0 1 .5 6h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5Zm8 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-8 2A.5.5 0 0 1 .5 8h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm-7 2a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Z"/>
                            </svg>
                            Registrar
                        </a>
                    </li>
                    <li>
                        <a href="listarCorrespondencias.php" class="nav-link text-white btn btn-dark">
                            <svg class="bi d-block mx-auto mb-1" 
                                width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
                              </svg>
                            Listar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main class="container pt-5">
        <div class="row g-5">
            <div id="notificacion" class="col-md-5 col-lg-4 order-md-last"></div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Resgistro</h4>
                <form class="needs-validation" action="javascript:crearCorrespondencia()" method="POST"
                    enctype="multipart/form-data" id="form-correspondencia">
                    <div class="row g-3">
                        <?php if ($cargo=='sec') {?>
                            <div class="col-sm-6">
                                <label for="remitente" class="form-label">Remitente</label>
                                <input type="text" class="form-control" name="remitente" required>
                                <div class="invalid-feedback">
                                    Introdusca un remitente
                                </div>
                            </div>
                        <?php } ?>

                        <div class="col-sm-6">
                            <label for="destinatario" class="form-label">Destinatario</label>
                            <input type="text" class="form-control" name="destinatario" required>
                            <div class="invalid-feedback">
                                Introdusca un destinatario
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="asunto" class="form-label">Asunto</label>
                            <textarea class="form-control" cols="30" rows="3" name="asunto" required></textarea>
                            <div class="invalid-feedback">
                                Introdusca un asunto
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="tipo" class="form-label">Tipo</label>
                            <select class="form-select" name="tipo" required>
                                <option value="">carta</option>
                                <option>memorando</option>
                                <option>paquete</option>
                            </select>
                            <div class="invalid-feedback">
                                Seleccione un tipo
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-50 btn btn-dark btn-lg" type="submit">Registrar</button>
                </form>
            </div>
        </div>
    </main>

</body>

</html>