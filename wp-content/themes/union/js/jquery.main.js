$(window).load(function(){
    $('.preloader').fadeOut(); // set duration in brackets
  });

$(document).ready(function(){
  $.extend($.easing, {
    def: 'easeOutQuad',
    swing: function (x, t, b, c, d) {
        //alert($.easing.default);
        return $.easing[$.easing.def](x, t, b, c, d);
      },
      easeInQuad: function (x, t, b, c, d) {
        return c * (t /= d) * t + b;
      },
      easeOutQuad: function (x, t, b, c, d) {
        return -c * (t /= d) * (t - 2) + b;
      },
      easeInOutQuad: function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t + b;
        return -c / 2 * ((--t) * (t - 2) - 1) + b;
      },
      easeInCubic: function (x, t, b, c, d) {
        return c * (t /= d) * t * t + b;
      },
      easeOutCubic: function (x, t, b, c, d) {
        return c * ((t = t / d - 1) * t * t + 1) + b;
      },
      easeInOutCubic: function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
        return c / 2 * ((t -= 2) * t * t + 2) + b;
      },
      easeInQuart: function (x, t, b, c, d) {
        return c * (t /= d) * t * t * t + b;
      },
      easeOutQuart: function (x, t, b, c, d) {
        return -c * ((t = t / d - 1) * t * t * t - 1) + b;
      },
      easeInOutQuart: function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
        return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
      },
      easeInQuint: function (x, t, b, c, d) {
        return c * (t /= d) * t * t * t * t + b;
      },
      easeOutQuint: function (x, t, b, c, d) {
        return c * ((t = t / d - 1) * t * t * t * t + 1) + b;
      },
      easeInOutQuint: function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t * t * t * t + b;
        return c / 2 * ((t -= 2) * t * t * t * t + 2) + b;
      },
      easeInSine: function (x, t, b, c, d) {
        return -c * Math.cos(t / d * (Math.PI / 2)) + c + b;
      },
      easeOutSine: function (x, t, b, c, d) {
        return c * Math.sin(t / d * (Math.PI / 2)) + b;
      },
      easeInOutSine: function (x, t, b, c, d) {
        return -c / 2 * (Math.cos(Math.PI * t / d) - 1) + b;
      },
      easeInExpo: function (x, t, b, c, d) {
        return (t == 0) ? b : c * Math.pow(2, 10 * (t / d - 1)) + b;
      },
      easeOutExpo: function (x, t, b, c, d) {
        return (t == d) ? b + c : c * (-Math.pow(2, -10 * t / d) + 1) + b;
      },
      easeInOutExpo: function (x, t, b, c, d) {
        if (t == 0) return b;
        if (t == d) return b + c;
        if ((t /= d / 2) < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
        return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
      },
      easeInCirc: function (x, t, b, c, d) {
        return -c * (Math.sqrt(1 - (t /= d) * t) - 1) + b;
      },
      easeOutCirc: function (x, t, b, c, d) {
        return c * Math.sqrt(1 - (t = t / d - 1) * t) + b;
      },
      easeInOutCirc: function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return -c / 2 * (Math.sqrt(1 - t * t) - 1) + b;
        return c / 2 * (Math.sqrt(1 - (t -= 2) * t) + 1) + b;
      },
      easeInElastic: function (x, t, b, c, d) {
        var s = 1.70158;
        var p = 0;
        var a = c;
        if (t == 0) return b;
        if ((t /= d) == 1) return b + c;
        if (!p) p = d * .3;
        if (a < Math.abs(c)) {
          a = c;
          var s = p / 4;
        } else var s = p / (2 * Math.PI) * Math.asin(c / a);
        return -(a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
      },
      easeOutElastic: function (x, t, b, c, d) {
        var s = 1.70158;
        var p = 0;
        var a = c;
        if (t == 0) return b;
        if ((t /= d) == 1) return b + c;
        if (!p) p = d * .3;
        if (a < Math.abs(c)) {
          a = c;
          var s = p / 4;
        } else var s = p / (2 * Math.PI) * Math.asin(c / a);
        return a * Math.pow(2, -10 * t) * Math.sin((t * d - s) * (2 * Math.PI) / p) + c + b;
      },
      easeInOutElastic: function (x, t, b, c, d) {
        var s = 1.70158;
        var p = 0;
        var a = c;
        if (t == 0) return b;
        if ((t /= d / 2) == 2) return b + c;
        if (!p) p = d * (.3 * 1.5);
        if (a < Math.abs(c)) {
          a = c;
          var s = p / 4;
        } else var s = p / (2 * Math.PI) * Math.asin(c / a);
        if (t < 1) return -.5 * (a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
        return a * Math.pow(2, -10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p) * .5 + c + b;
      },
      easeInBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 1.70158;
        return c * (t /= d) * t * ((s + 1) * t - s) + b;
      },
      easeOutBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 1.70158;
        return c * ((t = t / d - 1) * t * ((s + 1) * t + s) + 1) + b;
      },
      easeInOutBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 1.70158;
        if ((t /= d / 2) < 1) return c / 2 * (t * t * (((s *= (1.525)) + 1) * t - s)) + b;
        return c / 2 * ((t -= 2) * t * (((s *= (1.525)) + 1) * t + s) + 2) + b;
      },
      easeInBounce: function (x, t, b, c, d) {
        return c - $.easing.easeOutBounce(x, d - t, 0, c, d) + b;
      },
      easeOutBounce: function (x, t, b, c, d) {
        if ((t /= d) < (1 / 2.75)) {
          return c * (7.5625 * t * t) + b;
        } else if (t < (2 / 2.75)) {
          return c * (7.5625 * (t -= (1.5 / 2.75)) * t + .75) + b;
        } else if (t < (2.5 / 2.75)) {
          return c * (7.5625 * (t -= (2.25 / 2.75)) * t + .9375) + b;
        } else {
          return c * (7.5625 * (t -= (2.625 / 2.75)) * t + .984375) + b;
        }
      },
      easeInOutBounce: function (x, t, b, c, d) {
        if (t < d / 2) return $.easing.easeInBounce(x, t * 2, 0, c, d) * .5 + b;
        return $.easing.easeOutBounce(x, t * 2 - d, 0, c, d) * .5 + c * .5 + b;
      }
    });







//Hamburger animation
document.querySelector( "#nav-toggle" ).addEventListener( "click", function() {
    //$('#main-menu-container').addClass('full');
    this.classList.toggle( "active" );
    $('.mobile-navigation').toggleClass('active');
  });

$('#menu-primary-navigation-1 li a').click(function(){
  //$(this).removeClass('active');
  $('.mobile-navigation, #nav-toggle').toggleClass('active');
});


//Slider function
function do_slider(){
  var $slides = $('#slides');
  Hammer($slides[0]).on("swipeleft", function(e) {
    $slides.data('superslides').animate('next');
  });

  Hammer($slides[0]).on("swiperight", function(e) {
    $slides.data('superslides').animate('prev');
  });

  $slides.superslides({
    hashchange: false,
  });
}


$(window).bind('scroll', function() {
  var navHeight = $( window ).height();
  if ($(window).scrollTop() > navHeight) {
   $('#main-menu-container').addClass('fixed');
 }
 else {
   $('#main-menu-container').removeClass('fixed');
 }
});


function hide_images(){
  var hide_images = $('.hide-images');
  hide_images.remove();
}



/*function do_image_slider(){
  var $carousel = $('.image-carousel'),
  $imageSrc = $('.gallery-link');
  $carousel.royalSlider({
    autoScaleSlider: true,
    startSlideId: 0,
    loop: true,
    arrowsNav: false,
    sliderDrag: true,
    sliderTouch: true,
    slidesSpacing: 0,
    addActiveClass: true,
    controlNavigation: 'none',
    imageScaleMode: 'none', 
    autoScaleSliderWidth: 10,
    autoScaleSliderHeight: 3.93,
    visibleNearby: {
      enabled: true,
      centerArea: 0.7,
      center: true,
      breakpoint: 650,
      breakpointCenterArea: 0.64,
      navigateByCenterClick: false
    }
  });
};*/

function do_fit_vids(){
  $(".videos").fitVids();
}


function do_google_map(){
//Google maps
var map;
var myMap = new google.maps.LatLng(51.514753, -0.136690);
var image;

var stylez = [
{
  featureType: "all",
  elementType: "all",
  stylers: [
  { "saturation": -50 },
  { "hue": "#8f9d8d" },
  { "weight": 1 }]
}
];

var mapOptions = {
  zoom: 16,
  center: myMap,
  mapTypeControl:false,
  mapTypeControlOptions: {
    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'tehgrayz']
  },
    // zoomControl: true,
    // zoomControlOptions: {
    //     style: google.maps.ZoomControlStyle.SMALL,
    //     position: google.maps.ControlPosition.LEFT_CENTER
    // },
    // zoomControl: false,
    // scaleControl: false,
    // scrollwheel: false,
    // draggable: false,
    // streetViewControl: false,
    // disableDoubleClickZoom: true,
    // mapTypeControl:false
    panControl: false,
    zoomControl: false,
    mapTypeControl: false,
    scaleControl: false,
    scrollwheel: false,
    streetViewControl: false,
    draggable: false,
    overviewMapControl: false
  };

  map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
  var mapType = new google.maps.StyledMapType(stylez, { name:"Grayscale" });    
  map.mapTypes.set('tehgrayz', mapType);
  map.setMapTypeId('tehgrayz');

//Map Marker 
var image = 'wp-content/themes/union/img/union-o-sml.png';
var myLatLng = myMap;
var beachMarker = new google.maps.Marker({
  position: myLatLng,
  map: map,
  icon: image
});

}


function do_vimeo_full_screen(){
  $('#fullscreen_background_bullets').fullscreen_background({
    skin: 'bullets',
    showNavArrows:false,
    showBottomNav:false,
    height100Proc:true,
    setAsBg:true,
    autoHideBottomNav:true,
    bottomNavLateralMargin:25, //only for left & right
    showPreviewThumbs:false,
    thumbsWrapperMarginTop: -55
  });   
}

//Full window height;
function set_window_height(){
  $('.image-seq').css('height', window.innerHeight);
  //$('.js-video').css('height', window.innerHeight); 
}





function do_single_page_nav(){
  // Menu active state - single page scroll
  /*$('.primary-navigation').singlePageNav({
    offset: -48,
    //offset: $('.primary-navigation').outerHeight(),
    //filter: ':not(.external)',
    updateHash: false
  });*/


$('.primary-navigation').onePageNav({
  changeHash: false,
  easing: 'easeInOutQuart',
  scrollThreshold: 0.1
});

}



function do_scrollTo(){
  $('a[href*=#]:not([href=#])').on('click',function (e) {
    e.preventDefault();

    var target = this.hash;
    $target = $(target);

    $('html, body').stop().animate({
      'scrollTop': $target.offset().top
    }, 900, 'easeInOutQuart', function () {
      //window.location.hash = target;
    });
  });
}


/*$(document).ready(function(){
    $(".snap").snapPoint({
      scrollSpeed: 70,
      outerTopOffset: 250,
      innerTopOffset: 250,

    });
});*/

//Section snap 
/*$(document).ready(function() {
  $(document).scrollsnap({
    snaps: '.snap',
    offset: -48,
    proximity: 150,
    easing: 'easeOutBack'
  });
});
*/

/*function do_flexslider(){
 $('.flexslider').flexslider({
  animation: "slide",
  controlNav: true,
  itemWidth: 260,
  itemMargin: 0,
  directionNav: false,
  slideshow: false,
  minItems: 1,
  maxItems: 3
});
}*/


function do_slick_slider(){
  $('.slick-slider').slick({
    dots: true,
    arrows: false,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
  });

//Feautured projects
$('.featured-projects').slick({
  centerMode: true,
  centerPadding: '120px',
  slidesToShow: 1,
  dots: false,
  arrows: true,
  infinite: false,
  // onAfterChange : function(slider,index){
  //     console.log(slider, index);
  //     $('.videosz iframe').hide();
  // },
  responsive: [
  {
    breakpoint: 1024,
    settings: {
      arrows: true,
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 1,
    }
  },
  {
    breakpoint: 768,
    settings: {
      arrows: true,
      centerMode: true,
      centerPadding: '30px',
      slidesToShow: 1,
    }
  },
  {
    breakpoint: 480,
    settings: {
      arrows: true,
      centerMode: true,
      centerPadding: '30px',
      slidesToShow: 1
    }
  }
  ]
}, function(){


});

  //End
}





// var slick_prev = $('.slick-prev'),
//     slick_next = $('.slick-next')


/*function do_mixin(){
  $('#Container').mixItUp();
}*/

  //Call slider function
  //do_flexslider();
  do_slick_slider();
  do_scrollTo();
  //do_image_slider();
  do_google_map();
  do_fit_vids();
  do_slider();
  set_window_height();
  do_single_page_nav();
  do_vimeo_full_screen();
  //do_mixin();
  //do_scroll_snap();


//skrollr







window.onload = function() {

  //Featured and recent 
  var latest_news_toggle = $('#latest-news-toggle'),
  recent_press_toggle = $('#recent-press-toggle'),
  news = $('#news'),
  press = $('#press'),
  featured_projects_toggle = $('#featured-projects-toggle'),
  in_production_toggle = $('#in-production-toggle'),
  gallery = $('#gallery'),
  production = $('#in-production');
  snappoint = $(".snap");



$(window).resize(function(){
  set_window_height();
  do_google_map();
  s.refresh();
  $('.slick-slider').get(0).slick.setPosition();
//   setTimeout(function() {
//     //press.removeClass('hideme');
// //    alert(press.css('display', 'block'));
//     $('.slick-slider').get(0).slick.setPosition();
//   }, 7000);
  //
});



  var windowWidth = $(window).width();

  if(windowWidth > 1024){
    var s = skrollr.init({
      forceHeight: false,
      smoothScrolling: true,
      mobileDeceleration: 0.004,
      easing: {
              //This easing will sure drive you crazy
              wtf: Math.random,
              inverted: function(p) {
                return 1 - p;
              }
            },
            render: function(data) {
            //Log the current scroll position.
            //console.log(data.curTop);
            $('#info').text(data.curTop);
          }
        });

/*      production.hide( "fast", function() {
        s.refresh();
      });*/

      production.addClass('hideme', function(){
        s.refresh();
      });

      press.addClass('hideme', function(){
        s.refresh();
      });

/*      press.hide( "fast", function() {
        s.refresh();
      });*/

$('.in-production li, .do_height').matchHeight();

/*     snappoint.snapPoint({
        scrollSpeed: 70,
        outerTopOffset: 250,
        innerTopOffset: 250,
      });*/

      } else {
        //Hide preloaded images
        hide_images();
        press.addClass('hideme');
        production.addClass('hideme');
      }


   //s.refresh();


//News
latest_news_toggle.click(function(event){
  $(this).addClass('active');
  recent_press_toggle.removeClass('active');
  news.removeClass('hideme');
  press.addClass('hideme');
  s.refresh();
  event.preventDefault();
});

recent_press_toggle.click(function(event){
  $(this).addClass('active');
  latest_news_toggle.removeClass('active');
  press.removeClass('hideme');
  news.addClass('hideme');
  s.refresh();
  event.preventDefault();
});

//Project
featured_projects_toggle.click(function(event){
  $(this).addClass('active');
  in_production_toggle.removeClass('active');
  gallery.removeClass('hideme');
  production.addClass('hideme');
  s.refresh();
  event.preventDefault();
});

in_production_toggle.click(function(event){
  $(this).addClass('active');
  featured_projects_toggle.removeClass('active');
  production.removeClass('hideme');
  gallery.addClass('hideme');
  s.refresh();
  event.preventDefault();
});  


//var loading_graphic = $('<div class="cover-image-for-spinner"><img src="http://www.staging.unionvfx.com/wp-content/themes/union/img/spinner.gif" alt="Loading..." class="spinner"></div>');
//var loading_graphic = $("#feaurted-project-data-container").html("Loading content");

$.ajaxSetup({cache:false});

// Ajax call - scroll and load post data
function do_load_single_project(post_link){
  $('html, body').animate({
    scrollTop: $("#feaurted-project-data-container").offset().top
  }, 900, function(){
    //$("#feaurted-project-data-container").html(loading_graphic);
    $("#feaurted-project-data-container").html("Loading content");
    $("#feaurted-project-data-container").load(post_link);
  });
}

$(".featured-post-link").click(function(){
  var post_link = $(this).attr("href");
  do_load_single_project(post_link);
  //window.location.hash = post_id;
  return false;
});

$(document).ajaxComplete(function(){
   //$('.single-post').slideUp(100);        
   var $text = $(".feautured-single-post");
   var contentHeight = $text.addClass('heightAuto').height();
   $text.removeClass('heightAuto').animate({ 
    height: (contentHeight == $text.height() ? 100 : contentHeight)
  }, 900, 'easeInOutQuart', function(){
    s.refresh();
    console.log('done')
  });
 });

$(document).on("click", "#close-me a", function(event) {
//alert( 'bob' );
$(".feautured-single-post").slideUp(600, 'easeInOutQuad', function(){
  $('html, body').animate({
    scrollTop: $("#gallery").offset().top
  }, 900, 'easeInOutQuart', function(){
    s.refresh();
  });
});
event.preventDefault();
});




// Ajax call - scroll and load post data bios
function do_load_single_biog(post_link){
  $('html, body').animate({
    scrollTop: $("#bios-project-data-container").offset().top
  }, 900, function(){
    $("#bios-project-data-container").html("Loading content");
    $("#bios-project-data-container").load(post_link);
  });
}

var thumb_icon = $(".biog-post-link");

thumb_icon.click(function(){
  //$(this).removeClass('thumb-opacity');  
  //thumb_icon.not(this).addClass('thumb-opacity');

  var post_link = $(this).attr("href");
  do_load_single_biog(post_link);
  //window.location.hash = post_id;
  return false;
});

$(document).ajaxComplete(function(){       
 var $text = $(".biog-single-post");
 var contentHeight = $text.addClass('heightAuto').height();
 $text.removeClass('heightAuto').animate({ 
  height: (contentHeight == $text.height() ? 100 : contentHeight)
}, 900, 'easeInOutQuart', function(){
  s.refresh();
});
});

$(document).on("click", "#close-me-biog a", function(event) {
  $(".biog-single-post").slideUp(600, 'easeInOutQuad', function(){
    $('html, body').animate({
      scrollTop: $("#bios").offset().top
    }, 900, 'easeInOutQuart', function(){
      //thumb_icon.removeClass('thumb-opacity');
      s.refresh();
    });
  });
  event.preventDefault();
});



// Ajax call - scroll and load post data news
function do_load_news(post_link){
  $('html, body').animate({
    scrollTop: $("#new-press-project-data-container").offset().top
  }, 900, function(){
    $("#new-press-project-data-container").html("Loading content");
    $("#new-press-project-data-container").load(post_link);
  });
}

var title_link = $(".title-link");

title_link.click(function(){ 
  var post_link = $(this).attr("href");
  do_load_news(post_link);
    //s.destroy(); 
    return false;
  });

$(document).ajaxComplete(function(){       
 var $text = $(".news-single-post");
 var contentHeight = $text.addClass('heightAuto').height();
 $text.removeClass('heightAuto').animate({ 
  height: (contentHeight == $text.height() ? 100 : contentHeight)
}, 900, 'easeInOutQuart', function(){
  s.refresh();
});
});

$(document).on("click", "#close-me-news a", function(event) {
  $(".news-single-post").slideUp(600, 'easeInOutQuad', function(){
    $('html, body').animate({
      scrollTop: $("#news-press").offset().top
    }, 900, 'easeInOutQuart', function(){
      thumb_icon.removeClass('thumb-opacity');
      s.refresh();
    });
  });
  event.preventDefault();

});

// END Ajax call - scroll and load post data bios
};

//End document ready
});



