<!DOCTYPE html>
<?php global $base_path; ?>
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"
  <?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]>
    <script src="<?php print $base_path . path_to_theme() ?>/js/html5shiv.js"></script>
  <![endif]-->
  <!-- Icons -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <link rel="apple-touch-icon" href="<?php print $base_path . path_to_theme() ?>/images/meta/apple-touch-icon.png" />

  <meta name="application-name" content="The Cipher Brief" />
  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta name="msapplication-TileImage" content="<?php print $base_path . path_to_theme() ?>/images/meta/favicon-tile.png" />
  <link rel="stylesheet" href="/stylesheets/jquery.mCustomScrollbar.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//load.sumome.com/" data-sumo-site-id="809b75d48817326671e416827335b7c08764f2a64fcaf1d7dfe8ea10a8da00c8" async="async"></script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <a name="top"></a>
  <div id="skip">
    <a href="#navigation"><?php print t('Skip to Navigation'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
