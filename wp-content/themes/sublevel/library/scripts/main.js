$(function() {

  // set booleans for window size
  var body = $('body');
  var isPhone = body.css('padding-bottom') === '1px';
  var isDesktop = body.css('margin-bottom') !== '1px';
  var notDesktop = body.css('margin-bottom') === '1px';


  // svg fallback
  if ( !Modernizr.svg ) {
    $('img[src*="svg"]').attr('src', function() {
      return $(this).attr('src').replace('.svg', '.png');
    });
  }


  // setup request animation frame shim
  (function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
        window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] || window[vendors[x]+'CancelRequestAnimationFrame'];
    }

    if (!window.requestAnimationFrame)
        window.requestAnimationFrame = function(callback, element) {
            var currTime = new Date().getTime();
            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
            var id = window.setTimeout(function() { callback(currTime + timeToCall); },
              timeToCall);
            lastTime = currTime + timeToCall;
            return id;
        };

    if (!window.cancelAnimationFrame)
        window.cancelAnimationFrame = function(id) {
            clearTimeout(id);
        };
  }());



  // if is desktop, add video bg
  // var addVid = function() {

  //   $('<video>', {
  //     autoplay: '',
  //     loop: '',
  //     src: '/img/structure/header-bg-black.jpg',
  //     class: 'bg-video'
  //   }).appendTo('.video-bg');

  //   $('<source>', {
  //     src: '/video/sublevel.mp4',
  //     type: 'video/mp4'
  //   }).appendTo('.bg-video');

  //   $('<source>', {
  //     src: '/video/sublevel.webm',
  //     type: 'video/webm'
  //   }).appendTo('.bg-video');

  // };

  // if ( isDesktop && body.hasClass('home') ) {
  //   addVid();
  // }


  // show scroll nav
  var showNav = function() {
    var mainNav = $('nav.nav-main');
    var height = $(mainNav).height();
    var padding = $(mainNav).css('padding-top');
    var position = parseInt(height) + parseInt(padding);
    var nav = $('nav.nav-scroll');
    var scrollPosition = $(window).scrollTop();

    if ( scrollPosition > position ) {
      if ( !nav.hasClass('show') ) {
        nav.addClass('show');
      }
    } else {
      if ( nav.hasClass('show') ) {
        nav.removeClass('show');
      }
    }

  };

  if ( isDesktop ) {
    $(window).on('scroll', function() {
      window.requestAnimationFrame(showNav);
    });
  }


  // grab instagram photos (for homepage)
  var getInstagram = function() {

    $.getJSON('https://api.instagram.com/v1/users/1364227902/media/recent?access_token=11843940.22ce416.2a318dfd6d324973bcc432be194f6148&count=4&callback=?', function(data) {

      $.each(data.data, function(i, image) {
        var target = '#instagram';

        $('<div>', {
          'class': 'span3'
        }).appendTo(target);
        $('<a>', {
          href: image.link
        }).appendTo(target + ' .span3:last');
        $('<img>', {
          'class': 'fade-in delay-' + (i + 4),
          src: image.images.low_resolution.url,
          alt: 'Sublevel Drum Co.'
        }).appendTo(target + ' .span3:last a');

      });

    });

  };

  if ( body.hasClass('home') ) {
    getInstagram();
  }


  var checkFill = function() {
    var form = $('form.wpcf7-form');
    var input = $('form .validate-field');

    $(input).on('keyup', function() {

      var empty = $(input).filter(function() {
        return this.value === '';
      });

      if ( !empty.length ) {
        if ( !form.hasClass('valid') ) {
          form.addClass('valid');
        }
      } else {
        form.removeClass('valid');
      }

    });

  }();



  var formLabel = function() {
    var input = $('form input, form textarea');

    input.on('focus', function() {
      $(this).parents('.col').addClass('focus');
    });

    input.on('blur', function() {
      $(this).parents('.col').removeClass('focus');
    });
  }();

});