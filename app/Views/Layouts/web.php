<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="JE=edge">
        <meta narne="viewport" content="width=device-width, initial-scale= 1.0">
        <title>dashboard</title>
        <link rel="style sheet" href=" <?= base_url() ?> /bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg mb-3">
            <div class="container-fluid">
                <a class="navbar-brand">Shield</a>
                <div
                    class="navbar-collapse"><!-- <ul class="navbar-nav">
                                        <Ii class="nav-item">
                                        <a href="<?= base_url() ?>/dashboard/categoria" class="nav-link">Categor:fa</a>
                                        </Ii>
                                        <Ii class="nav-item">
                                        <a href="<?= base_url() ?>/dashboard/pelicula" class="nav-link"> Peliculas</a>
                                        </Ii>
                                        <Ii class="nav-item">
                                        <a href="<?= base_url() ?>/dashboard/etiqueta" class="nav-link''>Etiquetas</a>
                                        </li>
                                        </ul> -->
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h1>
                        <?= $this->renderSection('header') ?>
                    </hl>
                </div>
                <div class="card-body">
                    <?= $this->renderSection('contenido') ?>
                </div>
            </div>
        </div>
        <script src="<?= base_url() ?>/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
