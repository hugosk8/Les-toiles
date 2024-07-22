<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URL ?>assets/css/style.css">
    <title>Les toiles</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg pt-4 fixed-top">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item d-flex align-items-center active">
                        <a class="nav-link" href="/">Accueil</a>
                        <span>
                            <img src="<?= URL ?>assets/img/template/chevron.png" alt="">
                        </span>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link" href="#">Cours de couture</a>
                        <span>
                            <img src="<?= URL ?>assets/img/template/chevron.png" alt="">
                        </span>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link" href="#">Retouches</a>
                        <span>
                            <img src="<?= URL ?>assets/img/template/chevron.png" alt="">
                        </span>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link" href="#">Créations sur mesure</a>
                        <span>
                            <img src="<?= URL ?>assets/img/template/chevron.png" alt="">
                        </span>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link" href="#">Atelier zéro dechets</a>
                        <span>
                            <img src="<?= URL ?>assets/img/template/chevron.png" alt="">
                        </span>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link" href="#">Mercerie</a>
                        <span>
                            <img src="<?= URL ?>assets/img/template/chevron.png" alt="">
                        </span>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link" href="#">Contact</a>
                        <span>
                            <img src="<?= URL ?>assets/img/template/chevron.png" alt="">
                        </span>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <?= $content ?>
    </main>

    <footer></footer>
</body>
</html>