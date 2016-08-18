<?php get_header(); ?>
<div id="content-front">

            <div id="slideshow" class="slideshow"> 
                    <img src="../slideshow/image1.jpg" alt="" /> 
                    <img src="../slideshow/image2.jpg" alt="" /> 
                    <img src="../slideshow/image3.jpg" alt="" /> 
                    <img src="../slideshow/image4.jpg" alt="" /> 
                    <img src="../slideshow/image5.jpg" alt="" /> 
            </div> 
<script type="text/javascript"> 
	var slideshow = jQuery('#slideshow').slideshow({
	  // every option
	  transition: 'crossFade', // blind(direction, fade, ease)
	  selector: '> *', // which elements in #slideshow to be the slides
	  initialIndex: 0, // index of element to show at first
	  autoStyle: true, // handle some basic styles for you
	  autoPlay: true, // don't cycle
	  delay: 5000, // ms between transitions when autoPlay is true
	  duration: 300, // duration of a transition
	}).data('slideshow'); // get the instance out of the element data
	
	
	var slideshowElement = jQuery('#slideshow'); // for demonstration
	
	jQuery( '#showNext' ).click(function(){
	  slideshow.show( 'next' );
	  // or slideshowElement.slideshow( 'show', 'next' );
	});
	
	jQuery( '#showPrevious' ).click(function(){
	  slideshow.show( 'previous' );
	  // or slideshowElement.slideshow( 'show', 'previous' );
	  // etc.
	});

/*
	function slideSwitch() {
		var $active = jQuery('#slideshow IMG.active');
	
		if ( $active.length == 0 ) $active = jQuery('#slideshow IMG:last');
	
		var $next =  $active.next().length ? $active.next()
			: jQuery('#slideshow IMG:first');
	
		$active.addClass('last-active');
	
		$next.css({opacity: 0.0})
			.addClass('active')
			.animate({opacity: 1.0}, 300, function() {
				$active.removeClass('active last-active');
			});
	}
	
	jQuery(document).ready(function() {
		setInterval( "slideSwitch()", 5000 );
	});
*/
</script>

</div><!--#content-->
<?php get_footer(); ?>
