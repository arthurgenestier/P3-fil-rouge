<?php
// On stocke l'URL du dossier des images
// Ainsi, si ce dossier change, on pourra + facilement le modifier
// Mais ce n'est pas une "déduplication" obligatoire
$imagesURL = './assets/img/';


// On cherche à savoir si une variable $currentPage est définie dans le fichier qui appelle celui-ci.
// Si c'est le cas on utilise sa valeur sinon c'est vide.
$classPage = '';
if(!empty($currentPage)) {
    $classPage = $currentPage;
}
// Toutes les pages utilisent ce fichier de template
// Donc toutes les pages ont accès à cette variable

?><!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Emmet : meta:vp -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?> - Voyage… pas loin</title>
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/print.css" media="print">
    </head>

    <body class="site <?= $classPage ?>">
        <!--
        Emmet: header+main+footer
        Ces 3 balises sont la base de la structure sémantique de notre page
        on oublie pas le role "banner" (ARIA) stipulant que c'est l'entête de la page
        -->
        <header class="site-header" role="banner">
            <div class="skip-link">
                <a href="#main" class="link-arrow">Aller au contenu</a>
            </div>
            <div class="max-content">
                <p class="header-logo">
                    <a href="index.php">
                        <img src="<?= $imagesURL ?>logo-voyage-pas-loin.svg" alt="Voyage… pas loin" width="120" height="40">
                    </a>
                </p>
                <!--
                Emmet: nav>ul>li*5>a
                On oubli pas le role "navigation" (ARIA) stipulant que le contenu correspond à la navigation dans le site
                -->
                <nav class="navigation" role="navigation">
                    <!-- Et nos liens doivent être une liste de liens dans la navigation -->
                    <ul class="navigation-list">
                        <li class="navigation-element"><a class="navigation-link" href="./index.php"<?php if ($currentPage == 'home') : ?> aria-current="page"<?php endif; ?>>Accueil</a></li><!--
                        --><li class="navigation-element"><a class="navigation-link" href="./ou-voyager-pas-loin.php"<?php if ($currentPage == 'where') : ?> aria-current="page"<?php endif; ?>>Où voyager pas loin ?</a></li><!--
                        --><li class="navigation-element"><a class="navigation-link" href="./bien-voyager.php"<?php if ($currentPage == 'travel') : ?> aria-current="page"<?php endif; ?>>Bien voyager</a></li><!--
                        --><li class="navigation-element"><a class="navigation-link" href="./faq.php"<?php if ($currentPage == 'faq') : ?> aria-current="page"<?php endif; ?>>FAQ</a></li><!--
                        --><li class="navigation-element"><a class="navigation-link" href="./contact.php"<?php if ($currentPage == 'contact') : ?> aria-current="page"<?php endif; ?>>Nous contacter</a></li>
                    </ul>
                    <button type="button" class="menu-toggle" aria-controls="menu">
                        <span class="toggle__button" aria-hidden="true"> <span class="toggle__bar"></span> <span class="toggle__bar toggle__bar__short"></span> <span class="toggle__bar"></span> </span>
                        <span class="menu-toggle__text">Menu</span>
                    </button>
                </nav>
            </div>
        </header>
        <!-- On oubli pas le role "main" (ARIA) stipulant que cette balise contient le contenu principal de la page -->
        <main role="main" id="main">
