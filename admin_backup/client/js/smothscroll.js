// JavaScript Document



 jQuery(function($) {
	"use strict";
	 $(".navbar-toggle").on("click",function(){
		 $(this).toggleClass("active");
	 });//end of on method
	 
	 
    $(document).on("scroll", onScroll);
    
    //smoothscroll
    $("a[href^='#']").on("click", function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass("active");
        });
        $(this).addClass("active");
      
        var target = this.hash,
        $target = $(target);
        $("html, body").stop().animate({
            "scrollTop": $target.offset().top+2
        }, 500, "swing", function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
	
	
	function onScroll(){
    var scrollPos = $(document).scrollTop();
    $(".scroll-nav ul li a").each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $(".scroll-nav ul li a").removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}
	
	
});

