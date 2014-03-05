jQuery(window).on('load', function(){ var $ = jQuery;

	$('.portfolio-grid-loop').masonry({ 
	singleMode: false, 
	itemSelector: '.grid-post'
  });
});