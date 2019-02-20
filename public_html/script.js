/*
 Note: The following code was taken from JavaScript30 - Lesson 13
 */

function debounce(func, wait = 20, immediate = true) {
	let timeout;
	return () => {
		const context = this, args = arguments;
		const later = () => {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		const callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
}

const sliderElements = document.querySelectorAll('.slide-in');

function checkSlide() {
	//console.log(event);
	//console.log(window.scrollY);
	sliderElements.forEach(sliderElement => {
		//Half way through the image
		const slideInAt = (window.scrollY + window.innerHeight) - sliderElement.height / 2;
		//Bottom of the image
		const elementBottom = sliderElement.offsetTop + sliderElement.height;
		const isHalfShown = slideInAt > sliderElement.offsetTop;
		const isNotScrolledPast = window.scrollY < elementBottom;
		if(isHalfShown && isNotScrolledPast) {
			sliderElement.classList.add('active');
		} else {
			sliderElement.classList.remove('active');
		}
	});
}

window.addEventListener('scroll', debounce(checkSlide));