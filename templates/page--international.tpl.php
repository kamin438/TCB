<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <header id="header" class="clearfix">    

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
  </div>
  
      
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
  
<script src="/sites/all/themes/bluewater/js/ammap.js" type="text/javascript"></script>
<script src="/sites/all/themes/bluewater/js/worldLow.js" type="text/javascript"></script>
<script>
  var map;
  var cipherBlue = '#082441';
  
  var northAmericaLink = '/international/North-America';
  var australiaLink = '/international/Australia';
  var middleEastLink = '/international/Middle-East';
  var asiaLink = '/international/Asia';
  var africaLink = '/international/Africa';
  var europeLink = '/international/Europe';
  var latinAmericaLink = '/international/Latin-America';

  AmCharts.ready(function() {
      map = new AmCharts.AmMap();
      
      map.zoomOnDoubleClick = false;
      map.dragMap = false;
      map.zoomControl.zoomControlEnabled = false;
      map.zoomControl.panControlEnabled = false;
      map.scaleControl = false;
            
      var dataProvider = {
          mapVar: AmCharts.maps.worldLow,
          zoomLevel: 1.25,
          zoomLongitude: 10,
          zoomLatitude: 20
      };
              
      var balloon = map.balloon;
      balloon.color = "#FFFFFF";
      balloon.cornerRadius = 0;
      balloon.borderThickness = 0;
      balloon.fillAlpha = 1;
      balloon.fillColor = "#FF651F";

      map.areasSettings = {
          color: cipherBlue,
          unlistedAreasColor: cipherBlue,
          rollOverOutlineColor: "#000E31",
          rollOverColor: "#E7E7E8",
          balloonText: "[[title]]",
          balloonBorderThickness: 0,
          selectedColor: cipherBlue,
          selectedOutlineColor: '#FFFFFF'
      };
            
      dataProvider.areas = [
        // North America
        {id:"US", groupId:"northAmerica", title:"North America", color: cipherBlue, url: northAmericaLink},
        {id:"CA", groupId:"northAmerica", title:"North America", color: cipherBlue, url: northAmericaLink},
        
        // Australia
        /*
        {id:"AU", groupId:"australia", title:"Australia", color: cipherBlue, url: australiaLink},
        {id:"NZ", groupId:"australia", title:"Australia", color: cipherBlue, url: australiaLink},
        {id:"NC", groupId:"australia", title:"Australia", color: cipherBlue, url: australiaLink},
        {id:"FJ", groupId:"australia", title:"Australia", color: cipherBlue, url: australiaLink},
        {id:"SB", groupId:"australia", title:"Australia", color: cipherBlue, url: australiaLink},
        {id:"VU", groupId:"australia", title:"Australia", color: cipherBlue, url: australiaLink},
        */
        /* Client request to put together with Asia */
        {id:"AU", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"NZ", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"NC", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"FJ", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"SB", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"VU", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        
        // Middle East
        {id:"DZ", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},
        {id:"YE", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},
        {id:"AZ", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},
        {id:"EG", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},
        {id:"IR", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},
        {id:"IQ", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},
        {id:"JO", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},
        {id:"KW", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},
        {id:"LB", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},
        {id:"AE", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},
        {id:"LY", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},
        {id:"MA", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},
        {id:"OM", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},
        {id:"PS", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},
        {id:"IL", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},                    
        {id:"QA", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},
        {id:"SA", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},
        {id:"SY", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},
        {id:"TN", groupId:"middleEast", title:"Middle East", color: cipherBlue, url: middleEastLink},
        
        // Asia
        //{id:"RU", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"CN", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"IN", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"JP", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"ID", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"KR", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"TR", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"TW", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"KP", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"MN", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"KZ", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"TH", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"BN", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"PH", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"PG", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"MM", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"GE", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"LK", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"BD", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"MY", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"VN", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"AF", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"PK", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"LA", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"NP", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"KG", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"UZ", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"TM", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"KH", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"TJ", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"BT", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        {id:"TL", groupId:"asia", title:"Asia", color: cipherBlue, url: asiaLink},
        
        // Latin America
        {id:"AR", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"BO", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"BR", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"CO", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"CR", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"CU", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"DO", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"EC", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"GF", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"GT", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},  
        {id:"GY", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},        
        {id:"HT", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink}, 
        {id:"HN", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},  
        {id:"JM", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},   
        {id:"NI", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink}, 
        {id:"PA", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"PY", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"PE", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"PR", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"TT", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"UY", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"VE", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"MX", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"SR", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"CL", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"BZ", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"SV", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"FK", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        {id:"BS", groupId:"latinAmerica", title:"Latin America", color: cipherBlue, url: latinAmericaLink},
        
        // Europe
        {id:"RU", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"BE", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"ES", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"FI", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"CH", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"GR", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},                 
        {id:"AL", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"AT", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"BA", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"BG", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"HR", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"CY", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"CZ", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"DE", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"GB", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"EE", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"HU", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"IE", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"IS", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"IT", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"XK", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"LV", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"LT", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"LU", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"MK", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"MD", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"ME", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"NL", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"NO", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"PL", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"RO", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"SI", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"SK", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"SE", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"UA", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"GL", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"FR", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"TF", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"DK", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"PT", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"RS", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        {id:"BY", groupId:"europe", title:"Europe", color: cipherBlue, url: europeLink},
        
        // Africa
        {id:"CI", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},      
        {id:"SZ", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"AO", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"BF", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"BI", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"BJ", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"BW", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"CD", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"CF", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"CG", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"CM", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"DJ", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"EH", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"ER", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"ET", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"GA", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"GH", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"GM", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"GN", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"GQ", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"GW", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"KE", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"LR", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"LS", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"MG", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"ML", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"MR", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"MW", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"MZ", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"NA", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"NE", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"NG", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"RW", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"SD", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"SJ", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"SL", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"SN", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"SO", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"SS", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"TD", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"TG", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"TZ", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"UG", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"ZA", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"ZM", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink},
        {id:"ZW", groupId:"africa", title:"Africa", color: cipherBlue, url: africaLink}
      ];

      map.dataProvider = dataProvider;

      map.write("international-map");

  });

</script>