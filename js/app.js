$('.m-nav-toggle').click( function(e) {
	e.preventDefault();
	$('.menu-droit').toggleClass('is-open');
	$('.m-nav-toggle').toggleClass('is-open');
	// body...
})