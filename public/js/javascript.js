$('.links li').hover(function() {
	$(this).css({
		transform: 'translateX(10px)',
		transition: '1s all ease'
	});
}, function() {
	$(this).css({
		transform: 'translateX(0px)',
		transition: '1s all ease'
	});
});
$('.social ul li').hover(function() {
	$(this).children('a').css({
		color: '#ffffff',
	});
	$(this).css({
		transform: 'translateY(-10px)',
		transition: '300ms all ease'
	});
}, function() {
	$(this).children('a').css({
		color: '#fe5d4c'
	});
	$(this).css({
		transform: 'translateY(0)',
		transition: '300ms all ease'
	});
});

$('.GirisQeydiyyat ul li').hover(function() {
	$(this).children('a').css({
		color: '#ffffff',
	});
	$(this).css({
		transform: 'translateY(-10px)',
		transition: '300ms all ease'
	});
}, function() {
	$(this).children('a').css({
		color: '#fe5d4c'
	});
	$(this).css({
		transform: 'translateY(0)',
		transition: '300ms all ease'
	});
});

$('.navbarLeft ul li').hover(function() {
	$(this).children('a').css({
		color: '#fe5d4c',
	});

}, function() {
	$(this).children('a').css({
		color: 'white'
	});
		
});


