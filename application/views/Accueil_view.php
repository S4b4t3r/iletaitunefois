<div class="content-wrapper accueil-bg">
    
    <div class="content">
        <div>
            <h1>Il était<span> une fois...</span></h1>
            <p>'Il était une fois…' est une ASBL (Association Sans But Lucratif) situé au centre de Gasperich au Luxembourg,
                et actuellement dirigée par Daniela Sotto, elle a principalement deux objectifs :<br><br>
                - Accompagner les enfants dans leur apprentissage de la littérature dans le but de leur donner l’envie et le plaisir de lire<br>
                - Permettre aux enfants issus de l’immigration de garder la possibilité de travailler leur langue maternelle en dehors du cadre familial<br><br>
                L’association prend donc la forme d’une petite bibliothèque enfantine possédant des livres et autres formes de lecture dans pas moins de
                vingt-six langues différentes. Cette dernière est ouverte aux particuliers, mais aussi aux visites de groupe comme des crèches, des écoles, ou des foyers.
                L’association propose aussi régulièrement de nombreux ateliers de lecture multilingues ainsi que de découvertes musicales, réalisés par plus
                d’une vingtaine de bénévoles différents, toujours dans le but d’accompagner les enfants.<br><br>
                L’association est financée de deux façon, à la fois grâce aux différents abonnements qu’elle propose donnant la possibilité aux
                parents et aux crèches d’emprunter des livres et de participer aux différentes activités, mais aussi grâce aux donations qui
                peuvent être réalisées de différentes manières :<br><br>
                - Financièrement, en versant un don à l’association par l’intermédiaire du « Fonds Interculturel »<br>
                - En donnant des livres ou lectures encore en bon état<br>
                - En devenant bénévole au sein de l’association<br>
                - En réalisant un partenariat avec cette dernière (Dans le cadre d’une entreprise ou une fondation)<br><br>
                Toutes les informations concernant l’association et ses activités sont trouvables sur leur site internet situé à l’adresse suivante : https://www.iletaitunefois.lu/ , ainsi que sur leur page Facebook trouvable à cette adresse : https://www.facebook.com/iletaitunefois.asbl .
            </p>
        </div>
        <section class="accueil-middle">
            <div class="accueil-don">
                <div class="h2title">
                    <h2>Faire un don</h2>
                </div>
                <br>
                <p class="dontindent">Si vous souhaitez nous soutenir, vous pouvez nous faire un don en cliquant sur <a href="<?php echo base_url(); ?>Aide"><span>ce lien</span></a></p>
            </div>
            <div class="don-image image"></div>

            <div class="accueil-news">
                <div class="h2title">
                    <h2>News - feed</h2>
                </div>
                <br>
                <p class="dontindent">Si vous désirez rester au courant de nos <span>actualités</span>, vous pouvez vous abonner à notre fil <i>(news feed)</i></p>
                <p><img src="<?php echo base_url() ?>/assets/images/icons/feed.svg" class="icon"><a>Ouvrir / S'abonner au feed</a></p>
            </div>
            <div class="news-image image"></div>

            <div class="accueil-bibliotheque">
                <div class="h2title">
                    <h2>Bibliothèque</h2>
                </div>
                <br>
                <p class="dontindent">Pour accéder à l'espace Bibliothèque en ligne, veuillez suivre <a href="<?php echo base_url(); ?>Bibliotheque"><span>ce lien</span></a></p>
            </div>
            <div class="bibliotheque-image image"></div>

            <div class="accueil-ouverture">
                <div class="h2title">
                    <h2>Jours d'ouverture</h2>
                </div>
                <br>
                <p class="dontindent">Le <span>Coin de Lecture</span> a le plaisir de vous accueillir les jours suivants:</p>

                <p><span>Mardi:</span> de 16h30 à 18h</p>

                <p><span>Mercredi:</span> de 16h à 19h (en collaboration avec la VdL et sous réserve d'inscription)</p>

                <p><span>Jeudi:</span> de 16h30 à 18h</p>

                <p><span>Samedi:</span> de 15h à 18h (voir la liste des samedis
                    ouverts sur le programme du mois)</p>
            </div>
            <div class="ouverture-image image"></div>
        </section>
        <section class="accueil-livres">
            <div class="h2title">
                <h2>Derniers livres</h2>
            </div>
            <div class="accueil-livres-display">
                <?php foreach($all as $livre)
                {?>
                <div class="accueil-livres-single">
                    <img src="<?php echo base_url().'assets/images/livres/'.$livre->Code.'.jpg';?>">
                    <p class="dontindent"><?php echo $livre->Title;?></p>
                </div>
                <?php 
                }?>
            </div>
        </section>
        <section class="accueil-video">
            <div class="h2title">
                <h2>Video de présentation</h2>
            </div>
            <video controls>
                <source src="<?php echo base_url();?>assets/introduction.mp4" type="video/mp4">
            </video>
        </section>
    </div>

    <!-- translate.js -->
    <script src="assets/js/translations.js"></script>
    <script src="assets/js/lingumania.min.js" type="text/javascript"></script>