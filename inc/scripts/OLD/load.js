$(window).load(function() {
	$("#loading").fadeOut();
	document.body.style.overflow='auto';
});

$(window).bind('beforeunload', function(){
	$("#loading").fadeIn();
	// $.scrollTo( 0, 0 );
});
