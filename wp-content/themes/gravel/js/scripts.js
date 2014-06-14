$(document).ready(function() {
    
var date  = new Date(Date.UTC(2014, 2, 28, 12, 0, 0)),
    now   = new Date(),
    diff  = date.getTime()/1000 - now.getTime()/1000;

var clock = $('.festtime').FlipClock(diff, {
    clockFace: 'DailyCounter',
    countdown: true
});
    
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});

    $('#venues-slider').superslides();
    
    $(".nav-toggle").click(function(){
	    $(this).next('.subnav').slideToggle('fast');
        $(this).toggleClass('rotate');
    });  
    


/*----- NAVIGATION -----*/
    
// Cache selectors
var lastId,
    topMenu = $("#navMain ul"),
    topMenuHeight = topMenu.outerHeight(),
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 500);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }
});
    
/*----- SCROLLING MENU -----*/

function fade_header() {

		if ( $(window).width() > 900 ) {
            
			window_scroll = $(this).scrollTop();
            
            if ( window_scroll > ($('header').height())) {

				$('#navMain').css({"height": 40});
                $('#navMain ul li a').css({
                    "line-height": '40px'
                });
			} else {
				
				$('#navMain').css({"height": 60});
                $('#navMain ul li a').css({
                    "line-height": '60px'
                });            
			}
		}
	}
    $(window).scroll(function() { fade_header() });
 
});