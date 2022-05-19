<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/df9b9c7762.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?=$Constantes::WEB_ROOT."bootstrap/css/bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=$Constantes::WEB_ROOT."css/style.css";?>">
</head>
<body>
    <ul class="nav justify-content-between align-items-center bg-black">
        <div>
            <li class="nav-item">
                <a class="nav-link text-white fw-bold h5" href="/">Accueil</a>
            </li>
        </div>
        <div class="nav justify-content-between">
            <li class="nav-item">
                <a class="nav-link text-white" href="/personnes">Personnes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/logout">Déconnexion</a>
            </li>
        </div>
    </ul>
    <?= $content_for_views ;?>
    <script src="<?=$Constantes::WEB_ROOT."bootstrap/js/bootstrap.min.js";?>"></script>
    <script src="<?=$Constantes::WEB_ROOT."js/script.js";?>"></script>
</body>
</html>         