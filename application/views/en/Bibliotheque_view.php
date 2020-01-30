<div class="content-wrapper">

    <div class="langue">
    <a href="<?php echo base_url()?>/Bibliothèque">FR</a> | <span>EN</span>
    </div>
    <div class="content">
        <div>
            <h1>Online library</h1>
            <p>
                Are you looking for a book or an author in particular ?
                Or do you want to know if your children's favourite book is available in your native language ?
                You can by filling your search terms below :
            </p>
        </div>
        <section class="biblio-livres">
            <form action="<?php echo base_url();?>Bibliotheque/page/1" method="get" class="recherche">
                <input type="text" name="k" placeholder="Exemple: Three Little Pigs" class="recherche-input">
                <select name="l" class="recherche-input">
                    <option selected disabled hidden>Language</option>
                    <option value="Albanais">Albanian</option>
                    <option value="Bosniaque">Bosnian</option>
                    <option value="Chinois">Chinese</option>
                    <option value="Tchèque">Czech</option>
                    <option value="Danois">Danish</option>
                    <option value="Polonais">Dutch</option>
                    <option value="Anglais">English</option>
                    <option value="Finnois">Finnish</option>
                    <option value="Français">French</option>
                    <option value="Allemand">German</option>
                    <option value="Grec">Greek</option>
                    <option value="Italien">Italian</option>
                    <option value="Japonais">Japanese</option>
                    <option value="Luxembourgeois">Luxembourgish</option>
                    <option value="Néerlandais">Néerlandais</option>
                    <option value="Roumain">Romanian</option>
                    <option value="Russe">Russian</option>
                    <option value="Slovaque">Slovak</option>
                    <option value="Espagnol">Spanish</option>
                    <option value="Yoruba">Yoruba</option>
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
                    <span><b>Authors(s) : </b><?php echo $livre->Author;?></span>
                    <span><b>Languages(s) : </b><?php echo $livre->Language;?></span>
                    <span>Available : <b><?php echo $livre->Quantity;?></b></span>
                </div>
                <?php
                }?>
            </div>
            <div class="pagination">
                <?php echo $pagination; ?>
            </div>
        </section>
    </div>