<!-- TEMPLATES -->
<?php
    include_once("helpers/url.php");  // ARQUIVO DE HELP //
    include_once("data/categories.php");
    include_once("data/posts.php");
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>

    <!-- CSS com o arquivo de hlep BASE_URL -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css" type="text/css">

    <!--GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=
                Public+Sans:wght@300;400;800&family=Roboto:ital,wght@0,300;0,700;0,900;1,300;1,700;1,
                900&display=swap" rel="stylesheet">

</head>

<body>

    <header>       
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src=" <?= $BASE_URL ?>/img/logo.svg"  alt="Blog Codar">
        </a>
        <nav>
            <ul id="navbar">

                <li> <a href="<?= $BASE_URL ?>" class="nav-link"> Home </a> </li>
                <li> <a href="#" target="_blank" class="nav-link"> Categorias </a></li>
                <li> <a href="#" target="_blank" class="nav-link"> Sobre </a></li>
                <li><a href="<?= $BASE_URL ?>contato.php" class="nav-link"> Contatos </a></li>
                
            </ul>
        </nav>

    </header>