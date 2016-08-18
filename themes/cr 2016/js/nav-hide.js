/*
jQuery(document).ready(function() { 
    jQuery('.hidden-nav').hide();
});
*/

function toggleNav(navID){
	
	var whatIsIt = jQuery(navID).html();
	var hideIt = "Hide";
	
	jQuery(navID).parent().siblings().children().removeClass('nav-current');	
	jQuery(navID).addClass('nav-current');

	if(jQuery('.hidden-nav.active').is('#' + whatIsIt + '-nav')){
		//alert('#' + whatIsIt + '-nav');
	} else {
		jQuery('.hidden-nav.active').hide();
		jQuery('.hidden-nav.active').toggleClass('active');
	}
	
	jQuery('#' + whatIsIt + '-nav').fadeIn(400).toggleClass('active');
	
	return false;
	
}