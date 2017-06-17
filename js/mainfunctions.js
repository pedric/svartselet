
/*********************************************************************************/
/* MAIN FUNCTIONS SVARTSELET.SE                                                  */
/*********************************************************************************/

/* Scroll function menuposts *****************************************************/

$(document).ready(function(){
	$(".menu-post a, .scroll-this, .test").click(function (e) {

		e.preventDefault();

	    var link = $(this).attr('href');

	    var linkEl = $(link);

		    $('html, body').animate({ scrollTop: linkEl.offset().top}, 750);
		    
	});
});



/* active class to menu on load & scroll *********************************************/

activeMenu = function() {

	// Create variables based on offset for site-sections and scrollTop for window
	var h = window.innerHeight;
	h = (h/10) * 4;
	var home = $("#home").offset().top;
	var about = $("#about").offset().top-h;
	var portfolio = $("#portfolio").offset().top-h;
	var y = $(window).scrollTop();


	// Set bg color-fade
	var slow = y * 2;
	var fast = y * 4;
	var green = 255 - slow;
	var red = 255 - fast;
	if ( red <= 12 ) { red = 12 }
	if ( green > 255 ) { green = 255 }
	if ( green <= 12 ) { green = 12 }
	var blue = green;
	red = green;

	$("#fixed-bg").css("background", "rgb(" + red + "," + green + "," + blue + ")");
	$("#fullwidth-text, .h4-home").css("color", "rgb(" + slow + "," + slow + "," + slow + ")");

	// Active class on scroll
	// Activate "home"
	if(y < about){
	    $("#home-link").addClass("active");
	} else {
		$("#home-link").removeClass("active");
	}

	// Activate "about"
	if(y >= about && y < portfolio){
	    $("#about-link").addClass("active");
	} else {
		$("#about-link").removeClass("active");
	}

	// Activate "portfolio"
	if(y >= portfolio){
	    $("#portfolio-link").addClass("active");
	} else {
		$("#portfolio-link").removeClass("active");
	}


	// Fade in/out angle icons
	// Home section
	if ($(document).scrollTop() > 110){
		$(".fade-pointer-home").fadeOut(250);
	} else {
		$(".fade-pointer-home").fadeIn(250);
	}

	// About section
	var a = $("#about").offset().top+300;
	var stop = $(window).scrollTop();

	if (stop > a){
		$(".fade-pointer-about").fadeOut(250);
	} else {
		$(".fade-pointer-about").fadeIn(250);
	}
}

activeMenu();

// Add eventlisteners on load & scroll to activeMenu-function
$(function() {

	// Check if page is scrollable
	if($("#home").length) {
		window.addEventListener("load", activeMenu, false);
		window.addEventListener("scroll", activeMenu, false);

		$("#fullwidth-text").delay(500).animate({"opacity": 1});
	}
});

/* Fade in elements on scroll *************************************/

window.addEventListener("scroll", function() {
	var elements = document.getElementsByClassName('fadeMeIn');
  
	var windowHeight = window.innerHeight;
  var fadeInHeight = (windowHeight / 10) * 9;

  $(".fadeMeIn").each(function() {
  	var elTop = $(this).offset().top;
  	var fadeInPosition = $(window).scrollTop() + ($(window).height() / 10) * 8;

  	if( fadeInPosition > elTop ){          
      $(this).animate({"opacity": 1, "marginTop": "0px"});
    }
  });
});

/* scroll for devices viewport width < 430px *************************************/

$(function(){

	if(window.innerWidth < 510){

		$(".menu-post a").click(function(){
			$("#menu-bar").toggle("slide", 200);
            if($("#menu-icon").hasClass("fa-bars")){
                $("#menu-icon").fadeOut(100).switchClass("fa-bars", "fa-times").fadeIn(100);
            } else {
                $("#menu-icon").fadeOut(100).switchClass("fa-times", "fa-bars").fadeIn(100);
            }
		});
	}
});



/* toggle menu ********************************************************************/

showHideMenu = function() {

	if(window.innerWidth < 510){
		$("#menu-bar").toggle("slide", 200);
		if($("#menu-icon").hasClass("fa-bars")){
			$("#menu-icon").fadeOut(100).switchClass("fa-bars", "fa-times").fadeIn(100);
		} else {
			$("#menu-icon").fadeOut(100).switchClass("fa-times", "fa-bars").fadeIn(100);
		}

	} else {
		$("#menu-bar").toggle("slide", 200, function() { setHeadingSize(); });
		$("#content").toggleClass("menu-open", 200);
		$("#menu-icon-container").toggleClass("menu-open", 200);
		$(".left-twenty").toggle("slide", 200);
		if($("#menu-icon").hasClass("fa-bars")){
			$("#menu-icon").fadeOut(100).switchClass("fa-bars", "fa-times").fadeIn(100);
		} else {
			$("#menu-icon").fadeOut(100).switchClass("fa-times", "fa-bars").fadeIn(100);
		}
	}
}



/* scroll link *********************************************************************/

$(function(){

	function loop(){

		if(window.innerWidth < 510){

			$("#scroll-pointer, #scroll-pointer-about")
			.animate({'bottom':100, 'opacity':0}, 250).delay(750)
			.animate({'bottom':80, 'opacity':0.69}, 750, loop).delay(2500)
			.animate({'opacity':0});

		} else {
			$("#scroll-pointer, #scroll-pointer-about")
			.animate({'bottom':50, 'opacity':0}, 250).delay(750)
			.animate({'bottom':30, 'opacity':0.69}, 750, loop).delay(2500)
			.animate({'opacity':0});			
		}
	}

	loop();

});


/* Hover effect on back link and close link ****************************************/

function backLinkHover(){

	$(".pointer-change").html(" &lt; ");
}

function backLinkStopHover() {
	$(".pointer-change").html(" &gt; ");
}


/* Close portfolio item **************************************************************/

function closePage() {
	$("#portfolio-target-container").slideUp(400).html("");
	$("#portfolio-target-container").css({"margin-bottom": "0px"});
}


/* get height of menu-bar and portfolioitems *****************************************/

menuHeight = function(){

	var h = window.innerHeight;

	$("#menu-bar").css("height", h);

	if(window.innerHeight < 680){
		$("div#portrait-container > img").css({"width": "100px", "margin": "0 50px"});
		if(window.innerHeight < 450){
			$("div#portrait-container > img").css("display", "none");
		} else {
			$("div#portrait-container > img").css("display", "block");
		}
	} else {
		$("div#portrait-container > img").css({"width": "170px", "margin": "15px"});
	}
};


// $(function(){

// 	$(".portfolio-item").on('click', function(){

// 		if (!$(this).hasClass("portfolio-item-active")) {
		
// 			$(".portfolio-item").removeClass("portfolio-item-active");
			
// 			$(".portfolio-item i").show();
// 			$(this).delay(500).addClass("portfolio-item-active", function(){
// 				$("body, html").animate({ scrollTop: $(this).offset().top}, 450);
// 			});
// 			$("i.fa-angle-down", this).hide();

// 		}
// 	});
// });

/*
portfolioItemWidth = function(){

	var h = $(".portfolio-item").width();
	
	$(".portfolio-item").css("height", h);
};
*/

window.addEventListener('load', menuHeight, false);
window.addEventListener('resize', menuHeight, false);



/* Open img class "pop" blank *********************************************************/

$(function(){

	$(".pop").on("click", function( e ){

		e.preventDefault();

		var src = $(this).attr("href");

		var imgPopUp = '<div class="imgPopUp" onclick="closeImgPopUp()"><i class="fa fa-times" aria-hidden="true"></i><img class="vh-middle" src="' + src + '" alt="Portfolio image" /></div>';
		
		$(".imgPopUp").remove();
		$("body").append( imgPopUp );
		$(".imgPopUp").animate({ "opacity": 1 }, 250);

	});

	$(".imgPopUp").on("click", function(){

		$(".imgPopUp").remove();

	});
});

function closeImgPopUp() {

		$(".imgPopUp").animate({ "opacity": 0 }, 250, function(){
			$(".imgPopUp").remove();
		});
	}



/* Change "tape" in videoplayer *********************************************************/

function changeTape(tape) {

	var tapes = {
		1 : '<iframe width="560" height="315" src="https://www.youtube.com/embed/xBKZg3QuhV0?rel=0&amp;controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>',
		2 : '<iframe width="560" height="315" src="https://www.youtube.com/embed/ID9Ird8GQs8?rel=0&amp;controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>',
		3 : '<iframe width="560" height="315" src="https://www.youtube.com/embed/rvUvPHTW6lM?rel=0&amp;controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>',
		4 : '<iframe width="560" height="315" src="https://www.youtube.com/embed/_A1Xs8jbd5s?rel=0&amp;controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>',
		5 : '<iframe width="560" height="315" src="https://www.youtube.com/embed/3dASiGzbqVQ?rel=0&amp;controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>'
	};

	var playThis = tapes[tape];

	$("#changeTape").html(playThis);
	
}


/* Fullwidth heading *********************************************************/

function setHeadingSize() {

		var parent = document.getElementById("pitch-home");
		var heading = document.getElementById("fullwidth-text");

    var fontSize = parseFloat(window.getComputedStyle(heading, null).getPropertyValue('font-size'));
    var safeMargin = 27;
	
    // Element width, content width and fontsize
    var x = heading.offsetWidth;
    var y = parent.offsetWidth - safeMargin;
    var z = fontSize;

    // If content is smaller than parentelement
    if(x < y) {
        
        for (var i = x; i < y; z++) {
            heading.style.fontSize = z + 'px'
            heading.style.lineHeight = z + 'px'
            i = heading.offsetWidth
        }

    // If content is bigger than parentelement
    } else {

        for (var i = x; i > y; z--) {
            heading.style.fontSize = z + 'px'
            heading.style.lineHeight = z + 'px'
            i = heading.offsetWidth
        }
    }
}

window.addEventListener('load', function() {
    setHeadingSize()
});
window.addEventListener('resize', function() {
    setHeadingSize()
});


/* Them fishes *********************************************************/
$(function() {
	// Random position for fishes
	var fishes = $('.random-fish');
	for(var i = 0; i < fishes.length; i++) {
		var top = Math.floor(Math.random() * $(window).height());
		var left = Math.floor(Math.random() * $(window).width() - (fishes[i].offsetWidth / 2));
		fishes[i].style.top = top + 'px';
		fishes[i].style.left = left + 'px';
	}

	// Move fishes in different speed up n' down on scroll
	$(window).on('mousewheel', function(e) {
		var fishes = $('.random-fish');
		var windowHeight = $(window).height();
		var speed = 1;
		for(var i = 0; i < fishes.length; i++) {
			var negativeElHeight = -Math.abs(fishes[i].offsetHeight);
			var positiveElHeight = Math.abs(fishes[i].offsetHeight);
			var top = fishes[i].style.top;
			top = parseInt(top.replace('px', ''));
			if(top < negativeElHeight) {
				fishes[i].style.top = windowHeight + positiveElHeight + 'px';
						} else if(top > (windowHeight + positiveElHeight)) {
				fishes[i].style.top = negativeElHeight + 'px';
			} else {
				if(e.originalEvent.wheelDelta > 0) {
					fishes[i].style.top = top - speed + 'px';
				} else {
					fishes[i].style.top = top + speed + 'px';
				}
			}
			speed++;
		}
	});	
});


