(function($) {
  	"use strict";
	
	if ( $('a[href$="png"], a[href$="jpg"]').length > 0 ) {
		$('a[href$="png"], a[href$="jpg"]').each(function () {
			$(this).attr('data-lightbox', $(this).attr('href'));
			$(this).attr('data-title', $(this).children().attr('alt'));
		});
	}
	  
})(jQuery);