	<div class="clear"></div>
	</div><!--.container-->
	<div id="footer"><footer>
		<div class="container">
			<?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?><!--Wigitized Footer--><?php endif ?>

			<div id="footer-content">
				<ul>
					<li class="footer-hide">CARLA ROZMAN GRAPHIC DESIGN</li>
					<li>&nbsp;&nbsp;845 750 7543</li>
					<li><a href="mailto:carlarozman@gmail.com">CARLAROZMAN@GMAIL.COM</a></li>
					<li>ALL RIGHTS RESERVED</li>
				</ul>
			</div>
<!--
			<p><a href="<?php bloginfo('rss2_url'); ?>" rel="nofollow"><?php _e('Entries (RSS)'); ?></a> | <a href="<?php bloginfo('comments_rss2_url'); ?>" rel="nofollow"><?php _e('Comments (RSS)'); ?></a></p>
			<p>&copy; <?php echo date("Y") ?> <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a>. <?php _e('All Rights Reserved.'); ?></p>
			<p><?php _e('Built on the'); ?> <a href="http://whiteboardframework.com/">Whiteboard Framework for Wordpress</a> <span class="amp">&amp;</span> <a href="http://lessframework.com">Less Framework</a>. <?php _e('Powered by'); ?> <a href="http://wordpress.org">Wordpress</a>.</p><?php /* Whiteboard Framework is free to use. You are only required to keep a link in the CSS. We do not require a link on the site, though we do greatly appreciate it. Likewise, Less Framework is free to use. Links are not required on the website or in the CSS but are greatly appreciated. */ ?>
-->
		</div><!--.container-->
	</footer></div><!--#footer-->
</div><!--#main-->
<?php wp_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
<script type="text/javascript">
window.addEventListener('load', function() {
    setTimeout(scrollTo, 0, 0, 1);
}, false);
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34255106-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>