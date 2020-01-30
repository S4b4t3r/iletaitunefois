<a href="<?php echo base_url()?>Accueil" class="header-button <?php echo (isset($accueil)) ? 'active': '';?>">Home</a>
<a href="<?php echo base_url()?>Bibliotheque/page_en/1" class="header-button <?php echo (isset($bibliotheque)) ? 'active': '';?>">Online library</a>
<a href="<?php echo base_url()?>Aide" class="header-button <?php echo (isset($aide)) ? 'active': '';?>">Donations</a>
<a href="<?php echo base_url()?>Notreassociation" class="header-button <?php echo (isset($association)) ? 'active': '';?>">Our association</a>

<div style="display:flex; color:white"><a href="<?php echo base_url()?>Activites" class="header-button <?php echo (isset($activites)) ? 'active': '';?>" id="nosactivites">Our activities</a><span id="dropdownactivitesbutton">▼</span></div>
<span class="header-button dropdownactivites" id="dropdownactivites">
    <a href="<?php echo base_url()?>Creches" class="header-button <?php echo (isset($creches)) ? 'active': '';?>">Nurseries</a>
    <a href="<?php echo base_url()?>Singalong" class="header-button <?php echo (isset($singalong)) ? 'active': '';?>">Sing along</a>
    <a href="<?php echo base_url()?>Ateliers" class="header-button <?php echo (isset($ateliers)) ? 'active': '';?>">Reading sessions</a>
</span>

<a href="<?php echo base_url()?>Programme" class="header-button <?php echo (isset($programme)) ? 'active': '';?>"></a>
<a href="<?php echo base_url()?>LangueMaternelle" class="header-button <?php echo (isset($languematernelle)) ? 'active': '';?>">Langue maternelle</a>
<a href="<?php echo base_url()?>Photo" class="header-button <?php echo (isset($photo)) ? 'active': '';?>">Galerie photos</a>
<a href="<?php echo base_url()?>Livredor" class="header-button <?php echo (isset($livredor)) ? 'active': '';?>">Livre d'or</a>
<a href="<?php echo base_url()?>Partenaires" class="header-button <?php echo (isset($partenaires)) ? 'active': '';?>">Partenaires</a>
<a href="<?php echo base_url()?>Adhesion" class="header-button <?php echo (isset($adhesion)) ? 'active': '';?>">Adhésion</a>
<a href="<?php echo base_url()?>Coindelecture" class="header-button <?php echo (isset($lecture)) ? 'active': '';?>">Contact</a>
<a href="<?php echo base_url()?>Newsletter" class="header-button <?php echo (isset($newsletter)) ? 'active': '';?>">Newsletter</a>
<a href="<?php echo base_url()?>Reglement" class="header-button <?php echo (isset($reglement)) ? 'active': '';?>">Règlement</a>