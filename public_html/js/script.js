/*
Note: This code was taken from the following source.
 */

/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
	var height = $(window).scrollTop();
	if (height > 100) {
		$('#backToTop').fadeIn();
	} else {
		$('#backToTop').fadeOut();
	}
});
$(document).ready(function() {
	$("#backToTop").click(function(event) {
		event.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	});

});
/*Scroll to top when arrow up clicked END*/