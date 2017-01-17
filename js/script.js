/*
 * @file
 * MoAR - Website Redesign
 * @Description - Main Javascript file
 * @copyright 2015 Bluecadet, info@bluecadet.com
 ***********************************************/

(function ($, Drupal, window, document, undefined) {

/********************
 ** Global Variables
 ********************/

var mq = jQuery('#js-mediaquery-reference')[0],
    mqSupport = true,
    prevDevice = '',
    device = '',
    $b = $("body"),
    $page = $("#page"),
    $height = $(window).height(),
    $navBar = $('#nav-bar'),
    $mobileBtn = $('.mobile-nav');

var $bottomContent = $('#page-content');

$.fn.slideFadeToggle = function (speed, easing, callback) {
  return this.animate({
    opacity: 'toggle'
  }, callback);
};

/********************
** Blazy
********************/

function initBLazy() {
  var bLazy = new Blazy({
    offset: 300,
    success: function(element, context){ }
  });
}

/********************
** Mobile Nav
********************/

function mobileNav() {
  $mobileBtn.on('click', function(event){
    event.preventDefault();

    if ($(this).hasClass('open')) {
      $(this).removeClass('open');
      $navBar.removeClass('menu-open');
      $navBar.addClass('menu-close');

      setTimeout(function(){
        $navBar.removeClass('menu-close');
      }, 350);
    } else {
      $('.mobile-nav').addClass('open');
      $navBar.addClass('menu-open');
    }
  });
}

/********************
** Init Fixto
********************/

function initFixto() {
  $('.desktop .basic-sb').fixTo('.page-content');
}

/********************
** Basic Hero
********************/

function basicHeroStart() {
  var htl = new TimelineLite();
  var a = $('.ani-up');
  var img = $('.page-hero figure');
  htl.insert(TweenLite.to(img, 0.6, {css:{autoAlpha:1}, ease:Power1.easeOut}), 0);
  a.each(function( i ) {
    var item = $(this);
    htl.insert(TweenLite.to(item, 0, {css:{autoAlpha:0}, ease:Power1.easeOut}), 0.3);
    htl.insert(TweenLite.to(item, 0.4, {css:{autoAlpha:1}, delay:i*0.10, ease:Power1.easeOut}), .5 + i*0.20);
  });
}

/********************
** Donation Hero
********************/

function donationHeroStart() {
  if($('.donate-hero').get(0)) {
    var tl = new TimelineLite();
    var l = $('.ani-left');
    var r = $('.ani-right');
    var f = $('.ani-fade');

    TweenLite.set(l, {left:-100, autoAlpha: 0});
    TweenLite.set(r, {right:-100, autoAlpha: 0});
    TweenLite.set(f, {autoAlpha: 0});
    
    tl.pause();
    tl.insert(TweenLite.to(l, 0.4, {css:{left:0, autoAlpha:1}, ease:Power1.easeOut}), 0);
    tl.insert(TweenLite.to(r, 0.4, {css:{right:0, autoAlpha:1}, ease:Power1.easeOut}), 0.4);
    tl.insert(TweenLite.to(f, 0.3, {css:{autoAlpha:1}, ease:Power1.easeInOut}), .8);
    tl.play();
  }
}

/********************
** Donation Tracker Functions
********************/

var triggeredDonation = false;

function setDonationTracker() {
  var currentImage = $('.donation-current');
  var currentLabel = $('.current-amount');
  var goal = $('.tracker-wrapper').data('goal');
  var current = $('.donation-current').data('current');
  TweenLite.set(currentImage,{height: 0});
  TweenLite.set(currentLabel,{opacity: 0});
  if(current >= (goal * 0.83) && current <= (goal * 0.96)) {
    var goalAmount = $('.goal-amount');
    if($(window).width()<400) {
      goalAmount.hide();
    }else {
      $('.goal-label').addClass('so-close');
      if ($('.goal-amount').hasClass('right-amount')) {
        TweenLite.set(goalAmount,{left: '142%'});
      } else {
      	if($(window).width()>750) {
      		TweenLite.set(goalAmount,{right: '142%'});
      	}
      	else{
      		TweenLite.set(goalAmount,{left: '142%'});
      	}
      };
    }
  }else if(current >= (goal * 0.96) && current <= (goal - 1)){
    $('.goal-amount').hide();
    $('.current-label').text('So Close!');
  }else if(current >= goal) {
    $('.goal-amount').hide();
    $('.current-label').text('We did it!');
  }
}

function donationTrackerStart(){
  if($('.block-donation-tracker').get(0) || $('.block-donation-page-tracker').get(0)){
    if (triggeredDonation) {
       return;
    }
    var triggerPos = $('.tracker-wrapper').offset().top - ($(window).height() * 0.60);
    var scrollPos = $(window).scrollTop();
    if(scrollPos < triggerPos) {
      return;
    }
    triggeredDonation = true;

    var goal = $('.tracker-wrapper').data('goal');
    var current = $('.donation-current').data('current');
    var percent = current / goal;
    var goalHeight = $('.tracker-wrapper').height();
    var currentHeight = goalHeight * percent;
    var amt = document.getElementById('amt');
    var counter = {inc: 0};
    if(current >= goal) {
       currentHeight = goalHeight;
       current = goal; // should these numbers equal one another?? ask client/putra so we can know
    }

    var currentImage = $('.donation-current');
    var currentLabel = $('.current-amount');
    //annimate the height of an image to correspond to the percentage of donation money raised

    TweenLite.to(currentImage, 2, {css:{height: currentHeight}, ease:Expo.easeOut, delay:0.5});
    TweenLite.to(currentLabel, 1, {css:{opacity: 1}, ease:Expo.easeOut, delay:0.75});
    $('.current-label').addClass('extended');
    //annimate an incremented integer from 0 to the current goal ammount
    TweenLite.to(counter, 2, {
        inc: current,
        onUpdate: function () {
            amt.innerHTML = Math.ceil(counter.inc);
        },
        ease:Expo.easeOut, delay:0.5
    });
  }
}

/********************
** Donation Tabs
********************/

function donationTabsInit() {
  if ( jQuery().responsiveTabs) {
    $('#donationTab').responsiveTabs({
        rotate: false,
        startCollapsed: 'accordion',
        collapsible: 'accordion',
        setHash: false,
        classes: {
          stateDefault: 'r-tabs-state-default',
          stateActive: 'r-tabs-state-active',
          stateDisabled: 'r-tabs-state-disabled',
          stateExcluded: 'r-tabs-state-excluded',
          tab: 'r-tabs-tab',
          anchor: 'r-tabs-anchor',
          panel: 'r-tabs-panel',
          accordionTitle: 'r-tabs-accordion-title'
        }

    });
  }
}

/********************
** Donation Scroll
********************/

function donationScroll() {
  $('a.make-gift-header-scroll-down').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        TweenLite.to($(window), 1, {scrollTo:{y: target.offset().top}, ease:Power4.easeInOut});
        return false;
      }
    }
  });
}

/********************
** ImageLoaded Function
********************/

function initImageLoaded() {
  $.waitForImages.hasImgProperties = ['backgroundImage'];
  $('.page-hero, .w-img, #big-video-wrap').waitForImages({
      finished: function() {
        $(this).addClass('loaded');
        basicHeroStart();
        setTimeout(function(){
          donationHeroStart();
        }, 300);
      }
  });
}

/********************
** init fancybox
********************/

function initFancybox() {
  if ( jQuery().fancybox ) {
   $('.fancybox').fancybox({
      padding: [0, 0, 0, 0],
      margin: [0, 0, 0, 0],
      autoSize: false,
      fitToView:true,
      nextEffect: 'fade',
      prevEffect: 'fade',
      aspectRatio: true,
      afterShow: function() {
        var publicURL = $.fancybox.current.href;
        var uri = encodeURIComponent(publicURL);
        this.inner.append(
          '<ul class="lightbox-download"><li><span class="title">DOWNLOAD</span></li><li><a href="'+ publicURL +'" class="ico-download" download></a></li></ul><ul class="lightbox-share"><li><span class="title">SHARE</span></li><li><a class="share-link ico-facebook" href="https://www.facebook.com/sharer/sharer.php?u='+ uri +'" target="blank_"></a></li><li><a class="share-link ico-twitter" href="https://twitter.com/home?status='+ uri +'" target="blank_"></a></li><li><a class="share-link ico-tumblr" href="http://www.tumblr.com/share/link?url='+ uri +'" target="blank_"></a></li></ul>');
      },
      tpl: {
          wrap     : '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><h2 class="lightbox-title">' + $('.title').text() + '</h2><div class="fancybox-inner"></div></div></div></div>',
          image    : '<img class="fancybox-image" src="{href}" alt="" /><a href="'+ $(this).attr('src','fancybox-image') +'" download><span class="ico-facebook"></span><a><span class="overlay bottom"></span>',
          iframe   : '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0"' + ($.browser.msie ? ' allowtransparency="true"' : '') + '></iframe>',
          error    : '<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>',
          closeBtn : '<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>',
          next     : '<a title="Next" class="fancybox-nav fancybox-next in-from-right overlay-right" href="javascript:;"><span></span></a>',
          prev     : '<a title="Previous" class="fancybox-nav fancybox-prev in-from-left overlay-left" href="javascript:;"><span></span></a>'
        },
   });
   
    $(".fancybox-link").fancybox({
      fitToView : false,
      width   : '90%',
      height    : '90%',
      autoSize  : false,
      closeClick  : false,
      openEffect  : 'none',
      closeEffect : 'none',
      afterLoad : function(){
        $('.fancybox-wrap').addClass('fancybox-default');
      }
    });
  }
}

/********************
** init zoom
********************/

function initZoom() {
  if ( jQuery().smoothZoom ) {
    $('#collection-zoom-img').smoothZoom({
      initial_POSITION: '0 0',
      mouse_WHEEL: false,
      zoom_MAX: 100,
      width: '100%',
      height: '100%',
      zoom_SINGLE_STEP: true,
      responsive: true,
      responsive_maintain_ratio: true,
      button_BG_TRANSPARENCY: 0,
      pan_BUTTONS_SHOW: false,
      button_COLOR: '#309b98',
      button_MARGIN: 20,
      button_ROUND_CORNERS: false,
      container: 'zoom-container',
      background_COLOR: '#000000',
      button_AUTO_HIDE: "NO",
      button_SIZE: 40,
      button_SIZE_TOUCH_DEVICE: 24
    });
  }
}

/********************
** Mobile sidebar Nav
********************/

function initMobileSidebar() {
  $(document).on('click','.mobile-menu-toggle',function(){
    $('.block-menu-block').toggleClass('open');
    $(this).siblings().children().slideToggle();
  });
}

/********************
** Parallex Function
********************/

function parallexScroll() {
  var scrollPos = $(window).scrollTop();
  var hero = $('.page-hero, .donate-hero');

  if (!Modernizr.touch) {
    $('img, .make-gift-bg', hero).css({'transform': 'translate3d(0px,' +(scrollPos*.4) + 'px, 0px)'});

    var opacity = 1 - scrollPos/400;
    if (opacity >= .999) opacity = .999;
    if (opacity <= 0) opacity = 0;
    TweenLite.to($('.hero-title, .make-gift-header-content', hero), 0, {css: {autoAlpha:opacity}});
  }
}

/********************
** Experience Section
********************/

function bounce() {
  $('.btn-scroll-down').addClass('bounce');
}

var textslideTimeline = new TimelineLite({delay:1.2, onComplete:bounce});

function experienceTexts() {
  $(".slide.active").each(function() {
      $slideContent = $(".inner", this);
      if ($(".ani-heading", $slideContent).length > 0) {
        $slideHeading = $(".ani-heading", $slideContent);
      }

      var aniScale = $('.ani-scale', this);
      TweenLite.to(aniScale, 0.8, {css:{transform: 'scale(1)', opacity:1}, ease:Power3.easeOut});

    if (!Modernizr.touch) {
      if ($slideHeading) {
        $slideHeading.css("opacity", 1);
        $('.inner .label', this).css("opacity", 1);
      }
      var l = new TimelineLite();
      var o = new TimelineLite();

      var a = new SplitText($slideHeading, {
          type: "words,chars", charsClass:"characterClass"
      });

      var f = new SplitText($('.inner .label', this), {
          type: "words,chars", charsClass:"characterClass"
      });

      var aniUp = $('.ani-txt-up', this);
      var aniDown = $('.ani-txt-down', this);

      for (var i = 0; i < a.chars.length; i++) {
          $(a.chars[i]).addClass("rise-up")
      }

      for (var i = 0; i < f.chars.length; i++) {
        $(f.chars[i]).addClass("rise-down")
      }

      l.staggerTo(f.chars, 1, {
          autoAlpha: 1,
          y: 0,
          delay: .4,
          ease: Power3.easeOut
      }, .02);

      o.staggerTo(a.chars, 1, {
          autoAlpha: 1,
          y: 0,
          delay: .7,
          ease: Power3.easeOut
      }, .03);

      aniDown.each(function(i) {
        var item = $(this);
        textslideTimeline.insert(TweenLite.to(item, 0, {css: {opacity:0, transform: 'translateY(-40px)'}, ease:Power1.easeOut}), 0);
        textslideTimeline.insert(TweenLite.to(item, 0.6, {css:{transform: 'translateY(0px)', autoAlpha:1}, delay:i*0.20, ease:Power1.easeOut}), 1.6 + i*0.35);
      });
    }
  });
}

function experienceLoadIamge(){
  $('.bg-slide-img').waitForImages(function() {
      $(this).addClass('loaded');
      $('.loader-progress').remove();
      var $slide = $(this).parents('.slide');
      if ($slide.hasClass('active')) {
        setTimeout(function(){
          experienceTexts();
        }, 400);
      }
  });
}

function experienceTextsOut(i) {
  var index = i - 1;
  $(".slide:eq("+index+")").each(function() {
      textslideTimeline.clear().time(0);
      if (!Modernizr.touch) {
        var aniOut = $('.ani-txt-down, .ani-heading, .ani-txt', this);
        TweenLite.to(aniOut, 0.5, {css:{opacity:0}, ease:Power1.easeOut});
      }
  });
}

function getAnchors() {
  var anchors = [];
  $( "#experience-menu li" ).each(function() {
    anchors.push($(this).data('menuanchor'));
  });
  return anchors;
}

function experienceSlide() {
  if (!Modernizr.touch) {
  if ( jQuery().pagepiling ) {
  var current_slide = 0
  var size = $('#experience .slide').size();
  $('#experience').pagepiling({
        sectionSelector: '.slide',
        navigation: false,
        anchors: getAnchors(),
        menu: '#experience-menu',
        direction: 'vertical',
        verticalCentered: true,
        scrollingSpeed: 800,
        loopBottom: false,
        loopTop: true,
        css3: true,
        keyboardScrolling: true,
        animateAnchor: false,
        onLeave: function(index, nextIndex, direction){
          var $section = $('#experience').find('.slide').eq(index-1);
          if ($section.find('.jp-audio').get(0)) {
            var $jpPlayer = $section.find('.jp-jplayer');
            if ($section.find('.jp-audio').hasClass('jp-state-playing')) {
              $.jPlayer.pause();
            }
          }
          experienceTextsOut(index);
        },
        afterLoad: function(anchorLink, index){
          current_slide = index;
          experienceTexts();
        },
        afterRender: function(){
          //experienceLoadIamge();
          $('#experience').addClass('loaded');
        }
    });

    $("#experience-menu .btn-skip").click(function() {
      var $section = $('#experience').find('.slide.active');
        if ($section.find('.jp-audio').get(0)) {
          var $jpPlayer = $section.find('.jp-jplayer');
          if ($section.find('.jp-audio').hasClass('jp-state-playing')) {
            $.jPlayer.pause();
          }
        }
        $b.addClass('scroll');
        experienceTextsOut(current_slide);
        TweenLite.to('#wrap', 1, {y:'-100%', ease:Power3.easeOut});
    });

    $(".btn-scroll-down").click(function() {
      if (current_slide == size) {
        $b.addClass('scroll');
        experienceTextsOut(current_slide);
        TweenLite.to('#wrap', 1, {y:'-100%', ease:Power3.easeOut});
      } else {
        $.fn.pagepiling.moveSectionDown();
      }
    });

    $('#experience').on('mousewheel DOMMouseScroll wheel',function(event){
        if (event.originalEvent.wheelDelta < 0 || event.originalEvent.detail > 0) {
          var scroll_down;
          if ($('body').hasClass('scroll')) scroll_down = true; else scroll_down = false;
          if (scroll_down) return false;
            if (current_slide == size) {
              $b.addClass('scroll');
              experienceTextsOut(current_slide);
              TweenLite.to('#wrap', 1, {y:'-100%', ease:Power3.easeOut});
              return false;
          } 
        }
    });

    jQuery(window).on('beforeunload', function(){
      jQuery(window).scrollTop(0);
    });
  }
}
}

function experienceScroll() {
  if ($(window).scrollTop() == 0) {
      $b.removeClass('scroll');
      TweenLite.to('#wrap', 1, {y:'0%', ease:Power3.easeOut});

      experienceTexts();
      if ($('.jp-audio').hasClass('jp-state-playing')) {
        $.jPlayer.pause();
      }
    }
}

/********************
** More and Less
********************/

function morelessText() {
  var showChar = 255;
  var ellipsestext = "...";
  var moretext = "more";
  var lesstext = "less";

  $('.more-less').each(function() {
    var content = $(this).html();

    if(content.length > showChar) {
      var c = content.substr(0, showChar);
      var h = content.substr(showChar-0, content.length - showChar);
      var html = c + '<span class="moreellipses">' + ellipsestext+ ' </span><span class="morecontent"><span>' + h + '</span>  <a href="" class="morelink btn more">' + moretext + '</a></span>';
      $(this).html(html);
      $(this).addClass('loaded');
    }
  });

  $(".morelink").click(function(){
      if($(this).hasClass("less")) {
        $(this).removeClass("less");
        $(this).html(moretext);
      } else {
        $(this).addClass("less");
        $(this).html(lesstext);
      }
      $(this).parent().prev().toggle();
      $(this).prev().slideFadeToggle();
      $('.hidden-content').slideFadeToggle();
      $(this).parent().parent().toggleClass('open');
      return false;
  });
}

/********************
** General Slider Function
********************/

function slideCenter() {
  if ( jQuery().flexslider ) {
    $('.slide-center').flexslider({
      selector: 'ul.slides > li',
      animation: "slide",
      animationLoop: false,
      startAt: 0,
      itemMargin: 0,
      smoothHeight: false,
      controlNav: true,
      slideshow: false,
      touch: true,
      pauseOnAction: false,
      start: function(slider) {
        slider.addClass('loaded');
        slider.controlNavScaffold.find('li').removeClass('current').eq(slider.animatingTo).addClass('current');

        slider.each(function() {
          $('.flex-direction-nav li:nth-child(1)').addClass('btn-prev');
          $('.flex-direction-nav li:nth-child(2)').addClass('btn-next');
        });

        nextSlide = slider.currentSlide + 1;
        var $nextSlide = slider.slides.eq(nextSlide);
        var $nextTitle = $nextSlide.find('.title').text();

        //$('.flex-direction-nav li a').eq(1).append('<h3></h3>');
        $('.custom-nav .flex-direction-nav li').find('h3').text($nextTitle);

        slider.addClass('fade');
        //console.log('Start ' + $nextTitle);
      },
      before: function(slider) {
        slider.controlNavScaffold.find('li').removeClass('current').eq(slider.animatingTo).addClass('current');
        slider.removeClass('fade');
      },
      after: function(slider) {
        nextSlide = slider.currentSlide + 1;
        var $nextSlide = slider.slides.eq(nextSlide);
        var $nextTitle = $nextSlide.find('.title').text();

        var $firstSlide = slider.slides.eq(0);
        var $firstTitle = $firstSlide.find('.title').text();

        if(nextSlide == slider.count) {
          $('.custom-nav .flex-direction-nav li').find('h3').text($firstTitle);
          //console.log('Last ' + $firstTitle);
        } else {
          $('.custom-nav .flex-direction-nav li').find('h3').text($nextTitle);
          //console.log('After ' + $nextTitle);
        }
        slider.addClass('fade');
      }
    });
  }
}

/********************
 ** Home Tabs - Ajax and SVG Functions
********************/

function fadeInContent() {
  var fadecontent = new TimelineLite();
  fadecontent.insert(TweenLite.to($('.tab-content'), 0, {css:{opacity:0}, ease:Power1.easeOut}), 0);
  fadecontent.insert(TweenLite.to($('.tab-content'), 0.3, {css:{opacity:1}, ease:Power1.easeOut}), 0.3);
  fadecontent.play();
}

function getSVGInfo(el, status) {
  if ($('.lt-ie9').get(0)) {
    return;
  } else {
    var s = Snap(el[0].querySelector('svg'));
    var path = s.select('path');
    var pathConfig = {
        from: (status == 'in') ? path.attr('d') : path.attr('d-orig'),
        to: el.attr('data-path-hover')
    };
    return {
        s: s,
        path: path,
        pathConfig: pathConfig
    };
  }
}

function unanimate(el) {
  var svgInfo = getSVGInfo(el, 'out');

  svgInfo.path.animate({ 'path' : svgInfo.pathConfig.from }, 400, mina.easeinout);
  el.removeClass('is-selected');
}

function ajaxTabs(){

  $('#tab-location-content .btn.expand').on('click',function(){
    $('#tab-location-content').toggleClass('expand-img');
    $(this).toggleClass('close');
    return false;
  });
  
  $('.home-tab').on('click',function(event){
    $('.home-tabs-content').removeClass('active');

    var id = $(this).attr('id');
    var home_tabs_display = $('.home-tabs').css('display');
    var $tab = $(this);
    var $tab_content = $('#' + id + '-content');
    var $tab_mobile = $(this).parent();
    var html  = $tab_content.html();
    var url = 'ajax/moar/block/' + $tab_content.attr('data-index') + '/' +
      $tab_content.attr('data-block-module') + '/' + $tab_content.attr('data-block-delta');
    var el = $(this);

    var $contaner_tab = el.parent();

    if (! el.hasClass('is-selected')) {
      var svgInfo = getSVGInfo(el, 'in');

      svgInfo.path.animate({ 'path' : svgInfo.pathConfig.to }, 400, mina.easeinout);

      $.each($('.home-tab.is-selected'), function() {
        unanimate($(this));
      });
      el.addClass('is-selected');
    }
    
    if ($contaner_tab.hasClass('home-tabs')){
      var index = $contaner_tab.find('.home-tab').index(el);
      var el_two = $('.home-tabs-mobile:eq('+index+')').find('.home-tab');
    } else {
      var index = $('.home-tabs-mobile').index($contaner_tab);
      var el_two = $('.home-tabs').find('.home-tab:eq('+index+')');
    }
    
    if (! el_two.hasClass('is-selected')) {
      var svgInfo = getSVGInfo(el_two, 'in');

      svgInfo.path.animate({ 'path' : svgInfo.pathConfig.to }, 400, mina.easeinout);
      el_two.addClass('is-selected');
    }

    if (html.length < 100) {
      var ajax = new Drupal.ajax(false, this, {
        url : url,
        beforeSend: function (xmlhttprequest, options) {
          //console.log('beforeSend');
          TweenLite.to($('.tab-content'), 0.4, {css:{opacity:0}, ease:Power1.easeOut});
          if ( home_tabs_display == 'none') {
            $('.home-tabs-content .tab-content').hide();
            TweenLite.to($(window), 1, {scrollTo:{y: $tab_mobile.position().top - 59, autoKill:false}, ease:Power3.easeInOut});
          }
          Drupal.ajax.prototype.beforeSend.apply(this, arguments);
        },
        success: function (response, status) {
          fadeInContent();
          //console.log('success');
          Drupal.ajax.prototype.success.apply(this, arguments);
          initBLazy();

          if ( home_tabs_display == 'none') {
            TweenLite.to($(window), 1, {scrollTo:{y: $tab_mobile.position().top - 59, autoKill:false}, ease:Power3.easeInOut});
          } else {
            var desktopTop = parseInt($tab.offset().top);
            TweenLite.to($(window), 1, {scrollTo:{y: desktopTop }, ease:Power3.easeInOut});
          }
        },
        error : function (response, uri) {
          //console.log('error');
          Drupal.ajax.prototype.error.apply(this, arguments);
        },
      });
      ajax.eventResponse(ajax, { });

    } else {
      fadeInContent();
      $('.home-tabs-content .tab-content').hide();
      $tab_content.show();
      initBLazy();

      if ( home_tabs_display == 'none') {
        //var top = parseInt($tab_mobile.offset().top);
        TweenLite.to($(window), 1, {scrollTo:{y: $tab_mobile.position().top - 59, autoKill:false}, ease:Power3.easeInOut});
      } else {
        var desktopTop = parseInt($tab.offset().top);
        TweenLite.to($(window), 1, {scrollTo:{y: desktopTop }, ease:Power3.easeInOut});
      }
    }
  });
}

/********************
** jPlayer
********************/

function initjPlayer(){
  $('.audio, .mobile-audio').each(function(){
    var $container_audio  = $(this).find('.audio-title');
    var $play_audio = $(this).find('.play');
    var id_player = '#jquery_jplayer_'+$play_audio.attr('data-fid');
    var id_container = '#jp_container_'+$play_audio.attr('data-fid');
    var url = $play_audio.attr('data-audio');
    $(id_player).jPlayer({
      ready: function () {
        $(this).jPlayer("setMedia", {
          mp3 : url
        });
      },
      swfPath: Drupal.settings.basePath+"sites/all/themes/moar/js/plugins/jplayer",
      supplied: 'mp3',
      wmode: "window",
      useStateClassSkin: true,
      keyEnabled: true,
      remainingDuration: true,
      toggleDuration: true,
      cssSelectorAncestor: id_container
    });

    $play_audio.on('click',function(){
      $container_audio.fadeOut(400,function(){
        $(id_container).fadeIn();
        $(id_player).jPlayer("play", 0);
      });

      return false;
    });
  });
  
  $('.callout-audio').each(function(){
    var $container_audio  = $(this).find('.audio-title');
    var $play_audio = $(this).find('.play');
    var id_player = '#jquery_jplayer_'+$play_audio.attr('data-fid');
    var id_container = '#jp_container_'+$play_audio.attr('data-fid');
    var url = $play_audio.attr('data-audio');
    $(id_player).jPlayer({
      ready: function () {
        $(this).jPlayer("setMedia", {
          mp3 : url
        });
      },
      swfPath: Drupal.settings.basePath+"sites/all/themes/moar/js/plugins/jplayer",
      supplied: 'mp3',
      wmode: "window",
      useStateClassSkin: true,
      keyEnabled: true,
      remainingDuration: true,
      toggleDuration: true,
      cssSelectorAncestor: id_container
    });
    var currentTime  = 0;
    $(id_player).bind($.jPlayer.event.timeupdate, function(event) { 
      currentTime = event.jPlayer.status.currentTime;
    });

    $(id_player).bind($.jPlayer.event.play, function(event) { 
      $play_audio.addClass('pause');
    });
    
    $(id_player).bind($.jPlayer.event.pause, function(event) { 
      $play_audio.removeClass('pause');
    });

    $play_audio.on('click',function(){
      if (!$(this).hasClass('pause')) {
         $('.callout-audio .audio-player').fadeIn();
         $(id_player).jPlayer("play", currentTime);
      } else{
         $(id_player).jPlayer("pause", currentTime);
      }
      return false;
    });
  });
}
/********************
** Patriots Ledger
********************/

function initPatriotsLedgerExpand(){
  $('#content').find('div.alphabetic-item').find('.link a').on('click',function(event){
    event.preventDefault();

    var $content = $(this).parents('.alphabetic-item').find('.body');
    var $link = $(this);
    $content.slideToggle(400,function(){
      if ($link.hasClass('expand')) {
        $link.removeClass().addClass('close');
        $link.text('close');
      } else{
        $link.removeClass().addClass('expand');
        $link.text('expand');
      }
    });
  });
}

function initPatriotsLedger(){
  initPatriotsLedgerExpand();

  $('#content').find('div.sort-patriots a').on('click',function(event){
    if (!$(this).hasClass('active')) {
      $(this).parents('ul').find('a').removeClass('active');
      $(this).addClass('active');
      var url = $(this).attr('href');
      $('#content').find('div.sort-patriots').append('<div class="loader" />');
      $.ajax({
        url : url,
        type: "GET",
        data : 'is_ajax=1',
        success : function(msg){
           $('#content').find('div.sort-patriots .loader').fadeOut().remove();
           $('#content').find('div.alphabetic').fadeOut(400,function(){
             $('#content').find('div.alphabetic').html(msg);
             initPatriotsLedgerExpand();
             $('#content').find('div.alphabetic').fadeIn(400);

           });
        }
      });
    }
    event.preventDefault();
  });
}

/********************
** Background Video Function
********************/

function backgroundVideo() {
  var vidBg = $('.video-background'),
      vidContainer = $('.video-player');

  if(vidBg.get(0)){
    var BV = new $.BigVideo({useFlashForFirefox:false, controls:false, doLoop: true, container:vidBg});
    BV.init();
    if (Modernizr.touch) {
      BV.show(vidBg.attr('data-src'));
    } else {
      BV.show([
          { type: "video/mp4",  src: vidBg.attr('data-video') },
          { type: "video/webm", src: vidBg.attr('data-video-fallback') }
      ], {preload:true, ambient:true});

      BV.getPlayer().on('durationchange',function(){
          setTimeout(function(){
            $('#big-video-wrap').addClass('loaded');
          }, 200);
      });
    }
  }

  $b.on('click', '.hero-vid-play', function(e) {
      e.preventDefault();
      var url = $(this).attr('href');
      vidContainer.css('display', 'block');
      setTimeout(function() {
          vidContainer.css('opacity', '1');
          setTimeout(function() {
              vidContainer.find('.iframe-wrapper').append('<iframe src="' + url + '" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
          }, 500);
      }, 50);
  });

  vidContainer.on('click', '.close-btn, .inner-wrap', function(e) {
      e.preventDefault();
      vidContainer.css('opacity', '0');
      setTimeout(function() {
          vidContainer.css('display', 'none');
          vidContainer.find('iframe').remove();
      }, 500);
  });
}

/********************
 ** Function to reset any styles that may have been changed on screen resize
********************/

function resetStyles() {
    if (device == 'mobile') {
      $b.addClass('mobile');
      $b.removeClass('desktop');
      //console.log('mobile');
    }
    else {
      $b.removeClass('mobile');
      $b.addClass('desktop');
      $navBar.removeClass('menu-open');
      $mobileBtn.removeClass('open');
      initFixto();
      experienceSlide();
      //console.log('desktop');
    }
}

/********************
** Window Resize Manager
********************/

function deviceCheck() {
  if (mqSupport) {
    prevDevice = device;
    if(navigator.userAgent.indexOf("Firefox") != -1 ) {
      device = window.getComputedStyle(mq,':after').getPropertyValue('content').replace(/"/g, '');
    } else {
      device = window.getComputedStyle(mq,':after').getPropertyValue('content').replace(/'/g,"");
    }
    resetStyles();
  } else {
    device = 'desktop';
  }
}

/********************
 ** jQuery Window Load
 ********************/

jQuery(window).load(function () {
  initBLazy();
  initImageLoaded();
  slideCenter();
  experienceLoadIamge();
});

/********************
 ** jQuery DOM Ready
 ********************/

jQuery(document).ready(function () {
  //Check if the browser supports media queries
  if (!Modernizr.mq('only all')) {
    mqSupport = false;
  }

  //If the browser supports media queries
  if (mqSupport) {
    //Set up event listeners tied to media queries
    mq.addEventListener('webkitTransitionEnd', deviceCheck, true);
    mq.addEventListener('MSTransitionEnd', deviceCheck, true);
    mq.addEventListener('oTransitionEnd', deviceCheck, true);
    mq.addEventListener('transitionend', deviceCheck, true);
  }

  //Check for the device on initial load
  deviceCheck();

  mobileNav();
  backgroundVideo();
  ajaxTabs();
  initFancybox();
  initZoom();
  initMobileSidebar();
  setDonationTracker();
  initPatriotsLedger();
  donationTabsInit();
  initjPlayer();
  donationScroll();
  morelessText();
});

/********************
** jQuery Window Scroll
********************/

jQuery(window).on('scroll', function () {
    parallexScroll();
    donationTrackerStart();
    experienceScroll();
});

//To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.moar_behavior = {
  attach: function(context, settings) {
    initBLazy();

    /********************
    ** Masonry and IAS
    ********************/

    if ( jQuery().masonry && $('.masonry-tiles', context).get(0)) {

      var container = document.querySelector('.masonry-tiles', context);
      var msnry;
      var imgLoad = imagesLoaded(container);

      imgLoad.on( 'always', function() {
        msnry = new Masonry( container, {
          itemSelector: '.node-teaser, .tweets-pulled-listing-masonry, .related-row',
          columnWidth: container.querySelector('.col-small')
        });
        $('.masonry-tiles', context).addClass('loaded');
      });

      var ias = $.ias({
        container: ".masonry-tiles",
        item: ".node-teaser",
        pagination: ".pager",
        next: ".pager-next a",
        delay: 1200
      });
      
      ias.on('render', function(items) {
        $(items).css({ opacity: 0 });
        initBLazy();
      });

      ias.on('rendered', function(items) {
        msnry.appended(items);
        initBLazy();
      });

      ias.extension(new IASSpinnerExtension());
      ias.extension(new IASNoneLeftExtension({html: '<div class="ias-noneleft"><p>All items are loaded</p></div>'}));
    }

    $('.view', context).ajaxStart(function(event, xhr, settings) {
      initBLazy();
      TweenLite.to($('.content', context), 0.4, {css:{autoAlpha:1}, ease:Power1.easeOut});
      //console.log("Ajax START!");
    });

    $('.view', context).ajaxSuccess(function(event, xhr, settings) {
      var ajaxtl = new TimelineLite();
      ajaxtl.insert(TweenLite.to($('.content', context), 0, {css:{autoAlpha:0}, ease:Power1.easeOut}), 0);
      ajaxtl.insert(TweenLite.to($('.content', context), 0.4, {css:{autoAlpha:1}, ease:Power1.easeOut}), 0.3);
      ajaxtl.play();
      //console.log("Ajax Complete!");
    });
  }
};

})(jQuery, Drupal, this, this.document);