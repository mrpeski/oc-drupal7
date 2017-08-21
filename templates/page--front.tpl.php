<header id="header">
        <div class="is-contained">
            <a href="/" id="logo">
            <meta name="Logo" content="Open Charity">
                <img src="<?php echo '/' . $directory . '/images/open_charity_logo.svg'?>" alt="Open Charity">
            </a>
            <div class="header-item">
                <span id="ham" class="ham">Menu</span>
            </div>
        <span class="is-top">
        <?php // if ($logged_in): ?>
            
        <?php // else: ?>
        <?php // print l("Join Us", "/user/register", array('attributes' => array('class' => 'is-hollow', 'style' =>"float:right"))); ?>
        <?php // endif; ?>
        </span>

        <?php print theme('oc_links', array('links' => $main_menu, 'attributes' => array('id' => 'nav', 'class' => array('main-navigation')) )); ?>
        </div>
    </header>

    <section class="openWindow" id="window">
        <div class="is-contained">
            <?php  print render($page['window']); ?>
        </div>
    </section>

    <section class="wash">
        <div class="is-contained">
        <div class="event">
            <div class="grid">
                <div class="has-10-modules">
                    <h4 class=""><span class="next-event is-brand-color">Next Event:</span> September 24th 2017 18:30 - 21:00</h4>
                    <p class="">Neque aspernatur consequuntur fugit, nostrum ullam expedita</p>
                </div>
                <div class="has-2-modules register">
                    <a href="#" class="button">Register</a>
                </div>
            </div>
        </div>
        
    </section>
     <section class="section">
        <div class="is-contained">
            <?php  print render($page['get_involved']); ?>
        </div>
    </section>
    <section class="wash section">
        <div class="is-contained">
        <?php  print render($page['mission']); ?>
        <div class="divider gray"></div>
        </div>
    </section>
    
    <section class="section wash">
        <div class="is-contained">
            <?php  print render($page['members']); ?>
        </div>
    </section>

    <section class="section blog slider">
    <div class="is-contained">
        <?php  print render($page['promoted_articles']); ?>
        <button class="chevron prev">Previous</button>
        <button class="chevron next">Next</button>
    </div>
    </section>
    <footer class="">
        <div class="is-contained">
            <?php print render($page['social_footer']); ?>                
            <span class="divider dark"></span>
            <?php print render($page['footer']); ?>                
        </div>
    </footer>
