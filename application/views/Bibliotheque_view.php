<div class="content-wrapper">

    <div class="langue">
        <span>FR</span> | <a>EN</a>
    </div>
    <div class="content">
        <div>
            <h1>Bibliothèque en ligne</h1>
            <p>
                Vous recherchez un livre ou un auteur en particulier ?
                Ou bien vous souhaitez savoir si le livre préféré de votre enfant est disponible dans votre langue maternelle ?
                C’est possible en entrant les critères de votre recherche ci-dessous :
            </p>
        </div>
        <section class="biblio-livres">
            <form action="<?php echo base_url();?>Bibliotheque/page/1" method="get" class="recherche">
                <input type="text" name="k" placeholder="Exemple: Les trois petits cochons" class="recherche-input">
                <select name="l" class="recherche-input">
                    <option selected disabled hidden>Langue</option>
                    <option>Albanais</option>
                    <option>Allemand</option>
                    <option>Anglais</option>
                    <option>Bosniaque</option>
                    <option>Chinois</option>
                    <option>Danois</option>
                    <option>Espagnol</option>
                    <option>Français</option>
                    <option>Finnois</option>
                    <option>Grec</option>
                    <option>Italien</option>
                    <option>Japonais</option>
                    <option>Luxembourgeois</option>
                    <option>Néerlandais</option>
                    <option>Polonais</option>
                    <option>Roumain</option>
                    <option>Russe</option>
                    <option>Slovaque</option>
                    <option>Tchèque</option>
                    <option>Yoruba</option>
                </select>
                <input type="submit" class="recherche-submit" value="Rechercher">
            </form>
            <div class="pagination">
                <?php echo $pagination; ?>
            </div>
            <div class="livres">
                <?php foreach($all as $livre)
                {?>
                <div class="livre">
                    <img src="<?php echo base_url().'assets/images/livres/'.$livre->Code.'.jpg';?>">
                    <h3><?php echo $livre->Title;?></h3>
                    <i><?php echo $livre->Subtitle;?></i>
                    <span><b>Auteur(s) : </b><?php echo $livre->Author;?></span>
                    <span><b>Langue(s) : </b><?php echo $livre->Language;?></span>
                    <span>Disponible(s) : <b><?php echo $livre->Quantity;?></b></span>
                </div>
                <?php
                }?>
            </div>
            <div class="pagination">
                <?php echo $pagination; ?>
            </div>
        </section>
    </div>