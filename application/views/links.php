<a href="Accueil" class="header-button <?php echo (isset($accueil)) ? 'active': '';?>">Accueil</a>
<a href="Bibliotheque" class="header-button <?php echo (isset($bibliotheque)) ? 'active': '';?>">Bibliothèque en ligne</a>
<a href="Aide" class="header-button <?php echo (isset($aide)) ? 'active': '';?>">Donations</a>
<a href="Notreassociation" class="header-button <?php echo (isset($association)) ? 'active': '';?>">Notre association</a>

<div style="display:flex; color:white"><a href="activites" class="header-button <?php echo (isset($activites)) ? 'active': '';?>" id="nosactivites">Nos activités</a><span id="dropdownactivitesbutton">▼</span></div>
<span class="header-button dropdownactivites" id="dropdownactivites">
    <a href="Creches" class="header-button <?php echo (isset($creches)) ? 'active': '';?>">Crèches</a>
    <a href="Singalong" class="header-button <?php echo (isset($singalong)) ? 'active': '';?>">Sing along</a>
    <a href="Ateliers" class="header-button <?php echo (isset($ateliers)) ? 'active': '';?>">Ateliers de lecture</a>
</span>

<a href="Programme" class="header-button <?php echo (isset($programme)) ? 'active': '';?>">Programme du mois</a>
<a href="LangueMaternelle" class="header-button <?php echo (isset($languematernelle)) ? 'active': '';?>">Langue maternelle</a>
<a href="Photo" class="header-button <?php echo (isset($photo)) ? 'active': '';?>">Galerie photos</a>
<a href="Livredor" class="header-button <?php echo (isset($livredor)) ? 'active': '';?>">Livre d'or</a>
<a href="Partenaires" class="header-button <?php echo (isset($partenaires)) ? 'active': '';?>">Partenaires</a>
<a href="Adhesion" class="header-button <?php echo (isset($adhesion)) ? 'active': '';?>">Adhésion</a>
<a href="Coindelecture" class="header-button <?php echo (isset($lecture)) ? 'active': '';?>">Contact</a>
<a href="Newsletter" class="header-button <?php echo (isset($newsletter)) ? 'active': '';?>">Newsletter</a>
<a href="Reglement" class="header-button <?php echo (isset($reglement)) ? 'active': '';?>">Règlement</a>