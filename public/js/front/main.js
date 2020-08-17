$(document).ready(function(){
	$(".animated-link").on('click',function () {
		$("html,body").animate({
			scrollTop: $($.attr(this,'href')).offset().top -55
		},500);
	});
});


function readMore(){
    let dots =document.getElementById('dots');
    let moreText = document.getElementById('more');
    let moreBtn = document.getElementById('moreBtn');

    if (dots.style.display === 'none'){
        dots.style.display = 'inline';
        moreBtn.innerHTML = 'read more <i>&#8594</i>';
        moreText.style.display = 'none';
    } else {
        dots.style.display = 'none';
        moreBtn.innerHTML = 'read less <i>&#8592;</i>';
        moreText.style.display = 'inline';
    }
};
