jQuery(function(jQuery) {
	// The same for all waypoints
	jQuery('body').delegate('.post-single', 'waypoint.reached', function(event, direction) {
		var jQueryactive = jQuery(this);

		if (direction === "up") {
			jQueryactive = jQueryactive.prev();
		}
		if (!jQueryactive.length) jQueryactive = jQueryactive.end();
		
		jQuery('.section-active').removeClass('section-active');
		jQueryactive.addClass('section-active');
		
		jQuery('.link-active').removeClass('link-active');
		jQuery('a[href=#'+jQueryactive.attr('id')+']').addClass('link-active');
	});
	
	// Register each section as a waypoint.
	jQuery('.post-single').waypoint({ offset: '50%' });
	
	// Negates the flash of non-active nav.
	jQuery('.thumb-link').click(function() {
		jQuery(this).addClass('link-active');
	});
	
	// Wicked credit to
	// http://www.zachstronaut.com/posts/2009/01/18/jquery-smooth-scroll-bugs.html
	var scrollElement = 'html, body';
	jQuery('html, body').each(function () {
		var initScrollTop = jQuery(this).attr('scrollTop');
		jQuery(this).attr('scrollTop', initScrollTop + 1);
		if (jQuery(this).attr('scrollTop') == initScrollTop + 1) {
			scrollElement = this.nodeName.toLowerCase();
			jQuery(this).attr('scrollTop', initScrollTop);
			return false;
		}    
	});
	
	// Smooth scrolling for internal links
	jQuery("a[href^='#']").click(function(event) {
		event.preventDefault();
		
		var jQuerythis = jQuery(this),
		target = this.hash,
		jQuerytarget = jQuery(target);
		
		jQuery(scrollElement).stop().animate({
			'scrollTop': jQuerytarget.offset().top
		}, 500, 'swing', function() {
			window.location.hash = target;
		});
		
	});
});


jQuery(document).ready(function() {
	jQuery.waypoints.settings.scrollThrottle = 30;
	jQuery('#thumbnail-nav').waypoint({ offset: 20 })
	jQuery('#thumbnail-nav').waypoint(function(event, direction) {
		jQuery(this).parent().toggleClass('sticky-nav', direction === "down");
		event.stopPropagation();
	});
});
