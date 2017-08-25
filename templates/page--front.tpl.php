<header id="header">
        <div class="is-contained">
            <a href="/open-charity" id="logo" class="header-item">
            <meta name="Logo" content="Open Charity">
                <img src="<?php echo  $directory . '/images/open_charity_logo.svg'?>" alt="Open Charity">
            </a>
            <div class="header-item">
                <span id="ham" class="ham">Menu</span>
            </div>
        <span class="header-item">
        <?php if ($logged_in): ?>
            
        <?php  else: ?>
        <?php  print l("Join Us", "/user/register", array('attributes' => array('class' => 'is-hollow'))); ?>
        <?php  endif; ?>
        </span>

        <?php print theme('oc_links', array('links' => $main_menu, 'attributes' => array('id' => 'nav', 'class' => array('main-navigation')) )); ?>
        </div>
    </header>

    <section class="openWindow" id="window">
        <div class="is-contained">
            <?php  print render($page['window']); ?>
        </div>
    </section>
    <?php // if (! empty($event_date)) : ?>
        <section class="wash">
            <div class="is-contained">
                <?php  print render($page['event']); ?>
            </div>
        </section>
    <?php // endif ; ?>
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
