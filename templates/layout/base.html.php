<?php use Rawane\Core\Constantes;?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$Constantes::WEB_ROOT."css/style.css";?>">
    <link rel="stylesheet" href="<?=$Constantes::WEB_ROOT."bootstrap/css/bootstrap.min.css";?>">
</head>
<body>
    <ul class="nav justify-content-end mt-1">
        <li class="nav-item">
            <a class="nav-link active" href="/personnes">Personnes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/logout">Déconnexion</a>
        </li>
    </ul>
    <?= $content_for_views ;?>
    <script src="<?=$Constantes::WEB_ROOT."bootstrap/js/bootstrap.min.js";?>"></script>
    <script src="<?=$Constantes::WEB_ROOT."js/script.js";?>"></script>
</body>
</html>         