jQuery(document).ready(function($) {
	// Set default visibility to hide
	$('#comments').hide();
	$('.author-links').hide();

	// Toggle visibility of comments form
	$('#main').on( 'click', '.toggle-comments', function() {
		$('#comments').toggle();
	});

	// Toggle 'See Article' link icon on click
	// Toggle visibility of author widget links
	$('.author-meta').on( 'click', '.toggle-authors', function(ev) {
		ev.preventDefault();
		$( this ).toggleClass('open-authors');
		$( this ).parent().siblings('.author-links').toggle();
	});
});