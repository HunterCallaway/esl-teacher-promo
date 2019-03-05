/*
Note: This code was taken from the following source.
 */

//Scroll to the top when the arrow up clicked
$(window).scroll(() => {
	const height = $(window).scrollTop();
	if (height > 100) {
		$('#backToTop').fadeIn();
	} else {
		$('#backToTop').fadeOut();
	}
});
$(document).ready(() => {
	$("#backToTop").click((event) => {
		event.preventDefault();
		$("html, body").animate({scrollTop: 0}, "slow");
		return false;
	});

});

