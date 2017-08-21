<header id="header">
        <div class="is-contained">
            <a href="/" id="logo">
            <meta name="Logo" content="Open Charity">
                <img src="<?php echo '/'. $directory . '/images/open_charity_logo.svg'?>" alt="Open Charity">
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
        <?php if ($main_menu): ?>
            <?php print theme('oc_links', array('links' => $main_menu, 'attributes' => array('id' => 'nav', 'class' => array('main-navigation')) )); ?>
        <?php endif; ?>
        </div>
    </header>
    <div class="is-contained">
        <?php if ($breadcrumb): ?>
        <div id="breadcrumb" style="clear:both"><?php print $breadcrumb; ?></div>
        <?php endif; ?>
        <div class="divider take-20"></div>   
        <?php print $messages; ?>

    </div>

    <div id="main" class="is-contained">

      <div id="content" class="grid">
            <div class="has-8-modules">
                <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php if ($is_article || $is_page): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                <?php print render($page['content']); ?>
                <?php print $feed_icons; ?>
            </div>

      <?php if ($page['sidebar_first']): ?>
        <div class="has-4-modules">
          <?php print render($page['sidebar_first']); ?>
        </div> <!-- /.section, /#sidebar-first -->
      <?php endif; ?>
      <?php if ($page['sidebar_second']): ?>
        <div class="has-4-modules">
          <?php print render($page['sidebar_second']); ?>
        </div>
      <?php endif; ?>
    </div>
   </div>
   <footer class="">
        <div class="is-contained">
            <?php print render($page['social_footer']); ?>                
            <span class="divider dark"></span>
            <?php print render($page['footer']); ?>                
        </div>
    </footer>
