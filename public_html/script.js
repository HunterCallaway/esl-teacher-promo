function debounce(func, wait = 20, immediate = true) {
	let timeout;
	return () => {
		let context = this, args = arguments;
		let later = () => {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		let callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
}

const sliderElements = document.querySelectorAll(".slide-in");

function checkSlide(event) {
	//console.log(event);
}

window.addEventListener("scroll", debounce(checkSlide));