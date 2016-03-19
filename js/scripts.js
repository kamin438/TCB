(function ($) {


  function foldSizes(){
    var fold = $(window).height() * .45;
    var totalWidth = $(window).width();
    var totalHeight = $(window).height();
    //$('#block-views-the_cipher_brief-block_1, .front a.featured-story, .front .view-the-cipher-brief.view-display-id-attachment_1').css('height',homeFold);

    //$('.view-the-cipher-brief.view-display-id-block_2 .view-content, .view-the-cipher-brief.view-display-id-block_2 .attachment, .featured-story.image').css('height',fold);
    $('#block-views-the_cipher_brief-block_2, #block-views-the_cipher_brief-block_2 .view .attachment .grid, #block-views-the_cipher_brief-block_2 .view .featured-story.image').css('height',((totalHeight < 885) ? 398 : fold));

    if(totalWidth > 840) {
      $('.view-category-pages .view:nth-child(1), .view-category-pages .view:nth-child(1) .view-content, .view-category-pages .view:nth-child(2)').css('height',fold);
      $('.view-section-headers.view-display-id-block, .view-section-headers > .view-content, .view-section-headers .attachment').css('height',fold);
      $('.view-section-headers .view-header, #international-map').css('height',fold);
    } else {
      $('.view-category-pages .view:nth-child(1), .view-category-pages .view:nth-child(1) .view-content, .view-category-pages .view:nth-child(2)').css('height','auto');
      $('.view-section-headers.view-display-id-block, .view-section-headers > .view-content, .view-section-headers .attachment').css('height','auto');
      $('.view-section-headers .view-header, #international-map').css('height','auto');
    }

  }


  Drupal.behaviors.bwm_theme = {
    attach: function (context, settings) {

      $(document).ready(function() {

        // Back to top fun scrolling
        $('a[href=#top]').click(function(){
          $('html, body').animate({scrollTop:0}, 'slow');
          return false;
        });

        // Homepage Expert Counter
        var totalExperts = $('.view-the-cipher-brief.view-display-id-block_2 .grid-row > .views-row').length;
        $('.view-the-cipher-brief.view-display-id-block_2 .grid').addClass('total-'+totalExperts);

        // Expert Commentary tags
        $('#block-views-hidden_commentary-block .views-row').each(function(){
          var title = $('span',this).text(); // Get title of an expert commentary block
          $('.front #block-system-main .views-row h3 span:contains("'+title+'")').closest('.views-row').addClass('expert-commentary'); // Add class to matching block...
          $('.view-category-pages .views-row h3 span:contains("'+title+'")').closest('.views-row').addClass('expert-commentary'); // Add class to matching block...
          $('#block-views-the_cipher_brief-block_3 .views-row h3 span:contains("'+title+'")').closest('.views-row').addClass('expert-commentary'); // Add class to matching block...
        });


        // Mobile nav button toggle
        $('#mobile-nav-button').click(function(){
          $('body').toggleClass('mobile-nav-active');
          $('.block.main-navigation').stop().slideToggle(400);
        });

        // Global Snapshot scroller
        // Requested functionality removed
				/*
        $(".view-global-snapshot .item-list").mCustomScrollbar({
          axis: "x"
				});
        */

        //Social media tracking for Google Analytics
        /*
        $('.twitter-link').click(function(){
          window._gaq.push(['_trackEvent', 'Social Button', 'Click', 'Social Button Click: Twitter',,false]);
        });
        */

        $('.twitter-link').click(function(){
          window._gaq.push(['_trackEvent', 'Social Button', 'Social Button Click: Twitter']);
        });
        $('.linkedin-link').click(function(){
          window._gaq.push(['_trackEvent', 'Social Button', 'Social Button Click: LinkedIn']);

        });
        $('.facebook-link').click(function(){
          window._gaq.push(['_trackEvent', 'Social Button', 'Social Button Click: Facebook']);

        });

        /*
        // Homepage Filter - Couldn't figure out how to do this with views
        var homepageFeatured = $('.featured-hover .link a').attr('href');
        var homepageFeaturedRemoved = 0;
        //alert(homepageFeatured);
        $('.front .view-the-cipher-brief.view-display-id-page .views-row').each(function(){
          if($('a',this).attr('href') == homepageFeatured){
            $(this).remove();
            homepageFeaturedRemoved = 1;
          }
        });
        if(homepageFeaturedRemoved == 1){
          $('.front .view-the-cipher-brief.view-display-id-page .views-row').show();
        }


        // Homepage Hover Effects
        $('a.expert-headshot').hover(function(){
          var href = $(this).attr('href');
          $(this).parent('.views-row').addClass('hover');
          $('.expert-articles-grid a[href="'+href+'"]').parent('.views-row').addClass('hover');
        }, function(){
          $('#block-views-the_cipher_brief-block_2 .views-row').removeClass('hover');
        });

        $('.expert-articles-grid .views-row a').hover(function(){
          var href = $(this).attr('href');
          $(this).parent('.views-row').addClass('hover');
          $('a.expert-headshot[href="'+href+'"]').parent('.views-row').addClass('hover');
        }, function(){
          $('#block-views-the_cipher_brief-block_2 .views-row').removeClass('hover');
        });
        */

        // Dead Drop Masonry Integration
        $('.view-the-dead-drop .view-content').masonry({
          columnWidth: '.little-story',
          itemSelector: '.views-row',
          percentPosition: true
        });

        // Key Points Mobile
        $('#block-views-article_details-block_5').click(function(){
          $(this).toggleClass('active');
        });

        // Trigger homepage height check on load
        foldSizes();
        $('.featured-story.intro, #block-views-the_cipher_brief-block_2 .view-content:first').hover(function(){
          $('#block-views-the_cipher_brief-block_2 .view-content:first').addClass('hover');
        }, function(){
          $('#block-views-the_cipher_brief-block_2 .view-content:first').removeClass('hover');
        });

        // Sticky Footer News Ticker
        $('#block-views-news_ticker-block .view-content').marquee({
            duration: 17500,
            pauseOnHover: true,
            css3easing: false,
            allowCss3Support: false,
            duplicate: true
        });

        $('.view-id-landing_page .row').each(function(){
          var rowTotal = $('> .views-row',this).length;
          $(this).addClass('total-'+rowTotal);
        });

        /*
        // Sticky Sidebar
        $(".not-front .sidebar.second .region").sticky({topSpacing:170});
        */

        // Carousels

        /*
        $('.block.carousel .view-content').cycle({
          speed: 500,
          fx: 'carousel',
          slides: '> .views-row',
          timeout: 0,
          next: '#next-up-next'
        });

        $('#block-views-the_network-block_1 .view-content').cycle({
          speed: 500,
          fx: 'carousel',
          carouselVisible: 1,
          slides: '> .views-row',
          timeout: 0,
          next: '#expert-next',
          carouselFluid: true
        });

        //Gobal Snapshot sroll
        $('#block-views-global_snapshot-block .view-content ol').cycle({
          speed: 500,
          fx: 'carousel',
          slides: '> .views-row',
          swipe: true,
          timeout: 0,
          next: '#snapshot-next',
          prev: '#snapshot-previous'
        });
        */
        
        // Category headers
        $('.view-category-pages .view:eq(0) .view-content').cycle({
          speed: 500,
          slides: '> .views-row',
          timeout: 5000,
          pagerEvent: 'mouseover',
          pager: '.view-category-pages .view:eq(1) .view-content',
          pagerTemplate: '',
          pagerActiveClass: 'active'
        });

        $('.view-section-headers .attachment .inner').cycle({
          speed: 500,
          slides: '> .views-row',
          timeout: 5000,
          pagerEvent: 'mouseover',
          pager: '.view-section-headers .view-content:eq(1) .inner',
          pagerTemplate: '',
          pagerActiveClass: 'active',
          autoHeight: 0
        });


        // Tech - Moving last minute blocks around...
        $('.page-tech .block.latest-articles').appendTo('.page-tech .row:eq(1)');
        $('.page-tech .view-footer').appendTo('.page-tech .row:eq(1)');

      });

      $(window).resize(function() {

        // Trigger homepage height check on window resizing
        foldSizes();

      });

    }
  };

}(jQuery));
