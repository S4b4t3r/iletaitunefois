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
            <form action="" method="get" class="recherche">
                <input type="text" placeholder="Exemple: Les trois petits cochons" class="recherche-input">
                <select name="langue" class="recherche-input">
                    <option selected disabled hidden>Langue</option>
                    <option>français</option>
                    <option>deutsch</option>
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
                    <img src="<?php echo base_url().'assets/images/livres/'.$livre->Code;?>">
                    <h3><?php echo $livre->Title;?></h3>
                    <span><b>Auteur : </b><?php echo $livre->Author;?></span>
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