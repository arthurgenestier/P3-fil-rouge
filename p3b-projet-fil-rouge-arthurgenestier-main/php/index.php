<?php
// On crée les variables nécessaires à la template header
$title = 'Accueil';
$currentPage = 'home';

// On inclut la template du début du code HTML
require 'templates/header.tpl.php';
?>
            <!--
            Emmet: section#selected-destination>h1+p+a+a+img+p
            On découpe le contenu en plusieurs sections, car chaque section est sur un thème différent
            -->
            <section class="section section-selected-destination" id="selected-destination">
                <div class="max-content">
                    <div class="column1">
                        <h1>À la découverte des plus belles destinations près de chez vous</h1>
                        <p>
                            Envie de vous évader sans prendre l'avion, ni passer de longues heures dans la voiture ? Pas besoin de
                            passer la frontière pour découvrir des paysages enchanteurs, des monuments mythiques ou des plages
                            paradisiaques…
                        </p>
                        <a class="link-cta link-cta-primary" href="./contact.html">Contactez-nous</a>
                        <a class="link-cta link-cta-secondary" href="./faq.html">FAQ</a>
                    </div><!--
                    --><div class="column2">
                        <figure class="image-legend" role="figure" aria-label="Canal à travers Colmar, crédit photo : no_limit_pictures">
                            <img class="image" src="<?= $imagesURL ?>canal-colmar-610x408.jpg" alt="Le canal de Colmar" width="610" height="408">
                            <figcaption class="image-legend-caption">
                                Canal à travers Colmar<br>
                                Crédit photo : no_limit_pictures
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </section>
            <!-- Emmet: section#statistics>ul>li*4 -->
            <section class="section section-statistics" id="statistics">
                <div class="max-content">
                    <ul class="stats-list">
                        <li class="stats-element">
                            <span class="stats-nb">200</span> <span class="stats-label">villages de charme</span>
                        </li><!--
                        --><li class="stats-element">
                            <span class="stats-nb">50</span> <span class="stats-label">pépites choisies par nos soins</span>
                        </li><!--
                        --><li class="stats-element">
                            <span class="stats-nb">11</span> <span class="stats-label">experts et expertes à votre écoute</span>
                        </li><!--
                        --><li class="stats-element">
                            <span class="stats-nb">130</span> <span class="stats-label">circuits d’exception</span>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- Emmet: section#today-video>h2{En ce moment… découvrez le pays rennais en vidéo}+a{Transcription textuelle de la vidéo} -->
            <section class="section section-today-video" id="today-video">
                <div class="max-content">
                    <h2>En ce moment… découvrez le pays rennais en vidéo</h2>
                    <iframe width="1250" height="703" src="https://www.youtube.com/embed/sMClrtc27QE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen title="Vidéo Youtube : Terres de Bretagne (Émission intégrale) - Des Racines et des Ailes"></iframe>
                    <p class="video-transcription"><a class="link-arrow" href="./transcription-video.html">Transcription textuelle de la vidéo</a></p>
                </div>
            </section>
            <!-- Emmet: section#locations>h2+article*3>h3+p+a{Découvrir} -->
            <section class="section section-locations" id="locations">
                <div class="max-content">
                    <h2>Lieux à la une</h2>
                    <!-- Les 3 lieux à la une sont des contenus indépendants => article -->
                    <article class="place">
                        <h3 class="place-title">Les Alpes en vue</h3>
                        <img class="place-img" src="<?= $imagesURL ?>paysage-alpes-403x271.jpg" alt="" width="403">
                        <div class="place-content">
                            <p>
                                Fines lames et vieux couteaux à Saint-Jean-de-Maurienne, les fadas du démon à Bessans, etc.
                            </p>
                            <a href="./saint-jean-de-maurienne.html" class="link-cta link-cta-primary">Découvrir</a>
                        </div>
                    </article><!--
                    --><article class="place">
                        <h3 class="place-title">Cap à l'ouest</h3>
                        <img class="place-img" src="<?= $imagesURL ?>paysage-bretagne-404x271.jpg" alt="" width="404">
                        <div class="place-content">
                            <p>
                                Des menhirs et un manoir à Camaret-sur-Mer, les maisons fantômes de Guerlédan à Mûr-de-Bretagne, etc.
                            </p>
                            <a href="./camaret-sur-mer.html" class="link-cta link-cta-primary">Découvrir</a>
                        </div>
                    </article><!--
                    --><article class="place">
                        <h3 class="place-title">Autour de Paris</h3>
                        <img class="place-img" src="<?= $imagesURL ?>paysage-rambouillet-398x271.jpg" alt="" width="398">
                        <div class="place-content">
                            <p>
                                Rodin intime à Meudon, le brame du cerf au fond des bois à Rambouillet, etc.
                            </p>
                            <a href="./meudon.html" class="link-cta link-cta-primary">Découvrir</a>
                        </div>
                    </article>
                </div>
            </section>
            <!-- Emmet: section#slogan>p{Avec Voyage… pas loin, voyagez pas loin de chez vous mais l’esprit loin !} -->
            <section class="section-slogan" id="slogan">
                <div class="max-content">
                    <div class="image-background">
                        <p class="image-background-text">
                            <span>Avec Voyage… pas loin,</span> <span>voyagez pas loin de chez vous</span> <span>mais l’esprit loin !</span>
                        </p>
                    </div>
                    <p class="text-after-image">
                        <span>Avec Voyage… pas loin,</span> <span>voyagez pas loin de chez vous</span> <span>mais l’esprit loin !</span>
                    </p>
                </div>
            </section>

<?php
// On inclut la template du début du code HTML
require 'templates/footer.tpl.php';
