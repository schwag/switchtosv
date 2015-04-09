$(document).ready(function () {
    $(".navbar-collapse").click(function(event) {
        // check if window is small enough so dropdown is created
    $(".navbar-collapse").removeClass("in").addClass("collapse");
    });
	
	$(".accordion-toggle").click(function() {

	($(".accordion-toggle").not($(this))).removeClass("acord-minus-me");
	$(this).toggleClass("acord-minus-me");

	});
	
});

