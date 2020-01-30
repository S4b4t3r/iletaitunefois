<div class="content-wrapper accueil-bg">
    <div class="langue">
        <a href="<?php echo base_url()?>">FR</a> | <span>EN</span>
    </div>
    <div class="content">
        <div>
            <h1>Il était<span> une fois...</span></h1>
            <p>'Il était une fois…' is an ASBL (non-profit organization) located in the center of Gasperich in Luxembourg, it looks like a little library for for childrens who has books and other reading ways in not less than twenty six different languages. The association offers also regularly many multilingual reading workshops and musical discoveries, realised by more than twenty different volunteers. </p>
        </div>
        <section class="accueil-middle">
            <div class="accueil-don">
                <div class="h2title">
                    <h2>Donate</h2>
                </div>
                <br>
                <p class="dontindent">If you want to support us, you can donate by clicking on <a href="<?php echo base_url(); ?>Aide"><span>this link</span></a></p>
            </div>
            <div class="don-image image"></div>

            <div class="accueil-news">
                <div class="h2title">
                    <h2>News - feed</h2>
                </div>
                <br>
                <p class="dontindent">If you would like to be aware of our <span>news</span>, you can visit our Facebook page</p>
                <p><img src="<?php echo base_url() ?>/assets/images/icons/facebook.svg" class="icon"><a>Visit our Facebook</a></p>
            </div>
            <div class="news-image image"></div>

            <div class="accueil-bibliotheque">
                <div class="h2title">
                    <h2>Library</h2>
                </div>
                <br>
                <p class="dontindent">To get to the Online library, please follow <a href="<?php echo base_url(); ?>Bibliotheque"><span>this link</span></a></p>
            </div>
            <div class="bibliotheque-image image"></div>

            <div class="accueil-ouverture">
                <div class="h2title">
                    <h2>Opening days</h2>
                </div>
                <br>
                <p class="dontindent">The <span>Reading Workshop</span> has the pleasure to greet you during the following days:</p>

                <p><span>Tuesday:</span> from 4:30PM to 6PM</p>

                <p><span>Wednesday:</span> from 4PM to 7PM (in collaboration with the VdL, registration is required)</p>

                <p><span>Thursday:</span> from 4:30PM to 6PM<</p>

                <p><span>Saturday:</span> from 3PM to 6PM (take a look at the list of opened saturdays on the monthly program)</p>
            </div>
            <div class="ouverture-image image"></div>
        </section>
        <section class="accueil-livres">
            <div class="h2title">
                <h2>Latest books</h2>
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
                <h2>Video</h2>
            </div>
            <div class="video-wrapper">
                <iframe src="#"></iframe>
            </div>
        </section>
    </div>