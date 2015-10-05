$(function(){
	//your jQuery here
	// Initialize Smooth Scroll
	$('a').smoothScroll({
		speed: 800,
		offset: -75
	});

	//Menu nav
	$('#open').on('click', function(){
		$('ul.menu').css('left', 0);
		$('#close').css('display', 'block')
	});

	$('#close').on('click', function(){
		$('ul.menu').css('left', '100%');
		$(this).css('display', 'none');
	});

	$('ul.menu a').on('click', function(){
		$('ul.menu').css('left', '100%');
		$('#close').css('display', 'none');
	});
});