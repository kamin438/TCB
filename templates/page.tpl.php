<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <header id="header" class="clearfix">
    <div class="header-wrap">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
        </a>
      <?php endif; ?>

      <?php if ($page['top']): ?>
        <div id="top" class="clearfix">
          <?php print render($page['top']); ?>
        </div>
      <?php endif; ?>

      <?php if ($page['navigation']): ?>
        <nav id="navigation" class="clearfix">
          <div class="inner">

            <button id="mobile-nav-button">
              <i class="fa fa-bars"></i><i class="fa fa-times"></i> Menu
            </button>

            <?php print render($page['navigation']); ?>

          </div>
        </nav>
      <?php endif; ?>
  </div>
  </header>


  <section id="main" class="clearfix">
    <div class="wrap">

      <?php if ($messages): ?>
        <?php print $messages; ?>
      <?php endif; ?>
      <?php print render($page['help']); ?>

      <?php if ($page['content_top']): ?>
        <div id="content-top" class="clearfix">
          <?php print render($page['content_top']); ?>
        </div>
      <?php endif; ?>


      <div id="content">
        <div id="content-inner" class="inner column center">

          <?php if ($breadcrumb || $title || $tabs || $action_links): ?>
            <div id="content-header" class="content-header">

              <?php print $breadcrumb; ?>

              <?php if ($page['highlight']): ?>
                <div id="highlight"><?php print render($page['highlight']) ?></div>
              <?php endif; ?>

              <?php if (!empty($tabs['#primary'])): ?>
                <div class="tabs"><?php print render($tabs); ?></div>
              <?php endif; ?>

              <?php if ($action_links): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
              <?php endif; ?>

              <?php if ($page['content_header']): ?>
                <div id="content-header" class="clearfix">
                  <?php print render($page['content_header']); ?>
                </div>
              <?php endif; ?>

              <?php if(!$is_front): ?>
                <?php if ($title): ?>
                  <h1 class="title"><?php print $title; ?></h1>
                <?php endif; ?>
              <?php endif; ?>

            </div>
          <?php endif; ?>

          <div id="content-area" class="content-area">
            <?php print render($page['content']) ?>
          </div>

        </div>
      </div>

      <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="column sidebar first">
          <div id="sidebar-first-inner" class="inner">
            <?php print render($page['sidebar_first']); ?>
          </div>
        </div>
      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="column sidebar second">
          <div id="sidebar-second-inner" class="inner">
            <?php print render($page['sidebar_second']); ?>
          </div>
        </div>
      <?php endif; ?>


      <?php if ($page['content_bottom']): ?>
        <div id="content-bottom" class="clearfix">
          <?php print render($page['content_bottom']); ?>
        </div>
      <?php endif; ?>

    </div>
  </section>


  <?php if ($page['footer']): ?>
    <div id="footer" class="clearfix">
      <?php print render($page['footer']); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['sticky_footer']): ?>
    <div id="sticky-footer" class="clearfix">
      <?php print render($page['sticky_footer']); ?>
    </div>
  <?php endif; ?>

</div>
  
