const myscript = () => {
	const init = () => {
		initCardMore();
		initModals();
	};

	const initCardMore =  function () {
		document.querySelectorAll('[data-more]')
			.forEach( el => {
				el.onclick = () => {
					const item = document.querySelector(`[data-card='${el.dataset.more}']`);
					item.classList.toggle('closed');
				}
			});
	};

	const initModals = function () {
		document.querySelectorAll('[data-modal]')
			.forEach( el => {
				el.onclick = () => {
					const item = document.querySelector(`#${el.dataset.modal}`);
					item.classList.toggle('hide');
				}
			});
	};
	requestAnimationFrame( () => {
		init();
	})
};


window.onload = myscript;
