
function slideSwitch() {
        var $active = $('div#slideshow IMG.active');
        var $next = $active.next();  


        if (!$next.attr("src")){
        	$next=$('div#slideshow IMG.firstslide');
        }

        $next.fadeIn(200);
        $active.fadeOut(200);
        $next.addClass('active');
        $active.removeClass('active');
    }

$( document ).ready(function() {

	$(".menubutton").click(function(){
		$(".menubtns").toggleClass("mobilemenu");
	});

	$(".memberloginbtn").click(function(){
		$(".registerform").css("overflow","hidden");
		$(".registerform").animate({height:"0"});
		$(".memberlogin").css("display","block");
		$(".memberlogin").css("height","0");
		$(".memberlogin").css("overflow","hidden");
		$(".memberlogin").animate({height:"230px"});

	});

	$(".memberregisterbtn").click(function(){
		$(".registerform").animate({height:"450px"});
		$(".memberlogin").animate({height:"0px"});

	});



   
   setInterval( "slideSwitch()", 5000 );

   $(".property-photo-slide").click(function(){slideSwitch();});


});