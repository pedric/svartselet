
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
}

// Add eventlisteners on load & scroll to activeMenu-function
$(function() {

	// Check if page is scrollable
	if($("#home").length) {
		window.addEventListener("load", activeMenu);
		window.addEventListener("scroll", activeMenu);
	}
});

/* scroll for devices viewport width < 430px *************************************/

$(function(){

	if(window.innerWidth < 510){

		$(".menu-post a").click(function(){
			$("#menu-bar").toggle("slide", 500);
            if($("#menu-icon").hasClass("fa-bars")){
                $("#menu-icon").fadeOut(100).switchClass("fa-bars", "fa-times").fadeIn(100);
            } else {
                $("#menu-icon").fadeOut(100).switchClass("fa-times", "fa-bars").fadeIn(100);
            }
		});
	}
});

/* fade in pitch *****************************************************************/

$(document).ready(function (){
	
	if(window.innerWidth < 800){
		$("#bgvid").hide();
		/*$("#home").css("background", "#E8E8E8");*/
	} else {
		$("#bgvid").delay(15300).fadeOut(10000);
	}
});


/* toggle menu ********************************************************************/

showHideMenu = function() {

	if(window.innerWidth < 510){
		$("#menu-bar").toggle("slide", 500);
		if($("#menu-icon").hasClass("fa-bars")){
			$("#menu-icon").fadeOut(100).switchClass("fa-bars", "fa-times").fadeIn(100);
		} else {
			$("#menu-icon").fadeOut(100).switchClass("fa-times", "fa-bars").fadeIn(100);
		}

	} else {
		$("#menu-bar").toggle("slide", 500);
		$("#content").toggleClass("menu-open", 500);
		$("#menu-icon-container").toggleClass("menu-open", 500);
		$(".left-twenty").toggle("slide", 500);
		if($("#menu-icon").hasClass("fa-bars")){
			$("#menu-icon").fadeOut(100).switchClass("fa-bars", "fa-times").fadeIn(100);
		} else {
			$("#menu-icon").fadeOut(100).switchClass("fa-times", "fa-bars").fadeIn(100);
		}
	}
}


/* fade out pitch and scroll-pointer-links on scroll *******************************/

$(document).ready(function(){
	$(window).scroll(function(){

		if ($(document).scrollTop() > 110){
			$("#pitch-home, .fade-pointer-home").fadeOut(250);
		} else {
			$("#pitch-home, .fade-pointer-home").fadeIn(250);
		}
	});
});

$(document).ready(function(){
	if($("#about").length) {
	$(window).scroll(function(){
		
		var a = $("#about").offset().top+300;
		var stop = $(window).scrollTop();

		if (stop > a){
			$(".fade-pointer-about").fadeOut(250);
		} else {
			$(".fade-pointer-about").fadeIn(250);
		}
	});
	}
});

$(document).ready(function(){
	$(window).scroll(function(){

		if(window.innerWidth > 430){

            if ($(document).scrollTop() > 5){
                $(".portfolio-pitch-holder").fadeOut(250);
            } else {
                $(".portfolio-pitch-holder").fadeIn(250);
            }
        }
	});
});

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

/* Add fancybox selector *****************************************/

$(function(){
	$("a.fancy").fancybox();
});

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


$(function(){

	$(".portfolio-item").on('click', function(){

		if ($(this).hasClass("portfolio-item-active")) {
			$(this).removeClass("portfolio-item-active");
		} else {
		
			$(".portfolio-item").removeClass("portfolio-item-active");
			$(".portfolio-item i").show();
			$(this).addClass("portfolio-item-active");
			$("i.fa-arrow-circle-down", this).hide();
		}
	});
});

/*
portfolioItemWidth = function(){

	var h = $(".portfolio-item").width();
	
	$(".portfolio-item").css("height", h);
};
*/

window.addEventListener('load', menuHeight, false);
window.addEventListener('resize', menuHeight, false);