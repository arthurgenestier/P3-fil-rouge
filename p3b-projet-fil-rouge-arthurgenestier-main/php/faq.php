<?php
// On crée les variables nécessaires à la template header
$title = 'FAQ';
$currentPage = 'faq';

// On inclut la template du début du code HTML
require 'templates/header.tpl.php';
?>
            <!--
            Emmet: section#selected-destination>h1+p+a+a+img+p
            On découpe le contenu en plusieurs sections, car chaque section est sur un thème différent
            -->
            <section class="section section-faq" id="faq">
                <div class="max-content">
                    <div class="faq-questions">
                        <h1 class="faq-questions-title">Vous avez des questions ?</h1>
                        <p class="faq-questions-intro">Nous avons la réponse. Retrouvez toutes les informations et outils pratiques pour la préparation, la réservation et le suivi de votre voyage.</p>

                        <div class="faq-bloc">
                            <h2 class="faq-bloc-title">Voir nos actualités concernant la crise sanitaire du COVID-19</h2>
                            <div class="faq-bloc-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida risus sed lacus congue porta. Donec maximus, lacus non mollis rhoncus, nisi nisl eleifend urna, ac rhoncus nisl ex non justo.</p>
                            </div>
                        </div>
                        <div class="faq-bloc">
                            <h2 class="faq-bloc-title">Comment réserver un type de séjour particulier ?</h2>
                            <div class="faq-bloc-content">
                                <p>Etiam venenatis egestas velit, elementum malesuada nibh. Praesent scelerisque mattis nibh, quis accumsan lectus pulvinar sit amet.</p>
                            </div>
                        </div>
                        <div class="faq-bloc">
                            <h2 class="faq-bloc-title">Quels documents vais-je recevoir ?</h2>
                            <div class="faq-bloc-content">
                                <p>Proin in varius sem. Praesent laoreet faucibus est, quis feugiat dui finibus ac. Quisque nisi erat, hendrerit vitae lorem viverra.</p>
                            </div>
                        </div>
                        <div class="faq-bloc">
                            <h2 class="faq-bloc-title">Comment payer mon solde restant ?</h2>
                            <div class="faq-bloc-content">
                                <p>Duis magna elit, rhoncus non ultricies iaculis, viverra et dolor.</p>
                            </div>
                        </div>
                        <div class="faq-bloc">
                            <h2 class="faq-bloc-title">Pourquoi n’y a-t-il pas de trajets prévus en avion ?</h2>
                            <div class="faq-bloc-content">
                                <p>Nunc a finibus urna. Donec cursus enim dui, nec maximus leo fermentum a.</p>
                            </div>
                        </div>
                        <div class="faq-bloc">
                            <h2 class="faq-bloc-title">En cas de sinistre sur place, comment contacter l'assurance ?</h2>
                            <div class="faq-bloc-content">
                                <p>Si vous avez souscrit à une <a href="#" class="link-content">assurance Europ Assistance</a> lors de votre commande, vous pouvez contacter l’assureur :</p>

                                <p>par téléphone au <a href="tel:0033199003698" class="link-content">00 33 1 99 00 36 98</a> (coût d’un appel vers la France métropolitaine)<br>
                                    Ce service est disponible 24h/24h, y compris les week-ends et jours fériés.</p>

                                    <p>par mail : <a href="mailto:contact@voyagepasloin.com" class="link-content">contact@voyagepasloin.com</a></p>
                                </div>
                            </div>
                            <div class="faq-bloc">
                                <h2 class="faq-bloc-title">Comment contacter mon hôtel ?</h2>
                                <div class="faq-bloc-content">
                                    <p>Pellentesque a rutrum nisi. Duis sagittis auctor feugiat. Duis diam enim, porttitor eu pulvinar vel, scelerisque sed nulla. Etiam nec interdum turpis.</p>
                                </div>
                            </div>
                            <div class="faq-bloc">
                                <h2 class="faq-bloc-title">Pouvez-vous nous aider à programmer un voyage écologique ?</h2>
                                <div class="faq-bloc-content">
                                    <p>Nous pouvons vous former pour vous préparer à réaliser un voyage le plus neutre possible du point de vue de votre empreinte carbone. Pour cela, voici notre grille tarifaire. <a href="./contact.html" class="link-content">Contactez-nous</a> pour prendre rendez-vous !</p>
                                    <table>
                                        <caption>Grille tarifaire accompagnement voyage écologique</caption>
                                        <thead>
                                            <tr>
                                                <td></td>
                                                <th id="preparer">Formation « Préparer son voyage éco » – 2h</th>
                                                <th id="vivre">Formation « Bien vivre son voyage éco » – 2h</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th id="individuel">Tarif individuel</th>
                                                <td headers="preparer individuel">150 € TTC</td>
                                                <td headers="vivre individuel">150 € TTC</td>
                                            </tr>
                                            <tr>
                                                <th id="groupe">Tarif groupe</th>
                                                <td headers="preparer groupe">100 € TTC par personne</td>
                                                <td headers="vivre groupe">100 € TTC par personne</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--

                        --><aside class="faq-contact">
                            <img src="./assets/img/plage-404x606.png" width="404" height="606" alt="">
                            <div class="bloc-contact">
                                <h2 class="bloc-contact-title">Besoin d'informations supplémentaires ?</h2>
                                <p class="bloc-contact-text">Si vous avez d’autres interrogations, nous restons à votre écoute.</p>
                                <a href="./contact.html" class="link-cta link-cta-secondary">Contactez-nous</a>
                            </div>
                        </aside>
                    </div>
                </div>
            </section>
<?php
// On inclut la template du début du code HTML
require 'templates/footer.tpl.php';
