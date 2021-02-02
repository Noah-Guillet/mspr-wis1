<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title><?php if (!isset($title)):
            echo 'Page sans titre';
        else:
            echo $title;
        endif; ?>
    </title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<header id="header">

    <nav>
        <ul>
            <li>
                <a href="index.php">Accueil</a>
            </li>
            <li>
                <a href="#">Boutique</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>
</header>
