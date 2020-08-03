const mySwiper = new Swiper('.swiper-container', {
	direction: 'horizontal',
	loop: false,
	mobileFirst: true,
	slidesPerView: 1,


	pagination: {
		el: '.swiper-pagination',
	},


	breakpoints: {
		1440: {
			slidesPerView: 4,
			spaceBetween: 5,
		},
		1024: {
			slidesPerView: 3,
		},
		768: {
			slidesPerView: 2,
		},
		380:{
			slidesPerView: 1,
		}


	}

});
