<?php
// On crée les variables nécessaires à la template header
$title = 'Plan de site';
$currentPage = 'sitemap';

// On inclut la template du début du code HTML
require 'templates/header.tpl.php';
?>
            <div class="max-content">
                <ul class="plan-site">
                    <li class="plan-site-element"><a class="plan-site-link link-arrow" href="./index.php">Accueil</a></li>
                    <li class="plan-site-element"><a class="plan-site-link link-arrow" href="./ou-voyager-pas-loin.php">Où voyager pas loin ?</a></li>
                    <li class="plan-site-element"><a class="plan-site-link link-arrow" href="./ou-voyager-pas-loin.php">Bien voyager</a></li>
                    <li class="plan-site-element"><a class="plan-site-link link-arrow" href="./faq.php">FAQ</a></li>
                    <li class="plan-site-element"><a class="plan-site-link link-arrow" href="./contact.php">Nous contacter</a></li>
                    <li class="plan-site-element"><a class="plan-site-link link-arrow" href="./accessibilite.php">Accessibilité</a></li>
                    <li class="plan-site-element"><a class="plan-site-link link-arrow" href="./mentions-legale.php">Mentions Légales</a></li>
                </ul>
            </div>

<?php
// On inclut la template du début du code HTML
require 'templates/footer.tpl.php';
