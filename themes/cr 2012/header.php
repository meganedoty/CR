<?php //getting the first post permalink for each category
	$cargs = array( child_of => 3 );
	$cats=get_categories($cargs);
  	foreach($cats as $category) {
  		$pcat = $category->cat_ID;
		$pargs = array( 'numberposts' => 1, 'category' => $pcat );
		$postslist = get_posts( $pargs );
		foreach($postslist as $post) {
			$postlinks[$pcat] = $post->post_name;
		}
	}
	wp_reset_query();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php if ( is_category() ) {
		echo single_cat_title(); echo ' | '; bloginfo( 'name' );
	} elseif ( is_tag() ) {
		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_archive() ) {
		wp_title(''); echo ' Archive | '; bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
	} elseif ( is_home() ) {
		bloginfo( 'name' );
	} elseif ( is_front_page() ) {
		bloginfo( 'name' );
	}  elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' );
	} elseif ( is_single() ) {
		wp_title('');
	} else {
		echo wp_title(''); echo ' | '; bloginfo( 'name' );
	} ?></title>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0"/><?php /* Add "maximum-scale=1" to fix the Mobile Safari auto-zoom bug on orientation changes, but keep in mind that it will disable user-zooming completely. Bad for accessibility. */ ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<?php wp_enqueue_script("jquery"); /* Loads jQuery if it hasn't been loaded already */ ?>
	<?php wp_enqueue_script("nav-hide"); ?>
	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?> <?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>
	<?php /* Remove the Less Framework CSS line to not include the CSS Reset, basic styles/positioning, and Less Framework itself */?>
	<script type="text/javascript" src="http://use.typekit.com/wtc6vap.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/lessframework.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/theme.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>
<body <?php body_class(); ?>>
<div class="none">
	<p><a href="#content"><?php _e('Skip to Content'); ?></a></p><?php /* used for accessibility, particularly for screen reader applications */ ?>
</div><!--.none-->
<div id="main"><!-- this encompasses the entire Web site -->
	<div class="container"></div>
	<div id="header"><header>
		<div class="container">
			<div id="nav-primary" class="nav"><nav>
				     <ul id="menu-primary-navigation" class="menu">
				     	<li id="menu-item-12" class="menu-item"><a href="http://carlarozman.com/<?php echo($postlinks[4]) ?>" class="<?php if (is_category( array(3,4,5,6,7,15,18)) || in_category(3)) echo'nav-current'; ?>">Work</a></li>
						<li id="menu-item-11" class="menu-item"><a href="http://carlarozman.com/news/" class="<?php if (is_category(news)) echo'nav-current'; ?>">News</a></li>
						<li id="menu-item-10" class="menu-item"><a href="http://carlarozman.com/bio/" class="<?php if (is_page(bio)) echo'nav-current'; ?>">About</a></li>
						<li id="menu-item-15" class="menu-item"><a href="http://carlarozman.com/contact/" class="<?php if (is_page(contact)) echo'nav-current'; ?>">Contact</a></li>
					</ul>
			</nav></div><!--#nav-primary-->
			<div id="title">
				<?php if( is_front_page() || is_home() || is_404() ) { ?>
					<h1 id="logo"><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h1>
					<h2 id="tagline"><?php bloginfo('description'); ?></h2>
				<?php } else { ?>
					<h2 id="logo"><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h2>
					<h3 id="tagline"><?php bloginfo('description'); ?></h3>
				<?php } ?>
			</div><!--#title-->
			<div id="Work-nav" class="nav hidden-nav<?php if (is_category( array (4,5,6,7,15,18)) || in_category( array (4,5,6,7,15,18)) || is_page(all) || is_front_page()) echo' active" style="display:block;"'?>"><nav>

				     <ul id="menu-work-navigation" class="menu">
				     	<li class="menu-item"><a href="http://carlarozman.com/<?php echo($postlinks[4]) ?>"<?php if ((is_category(4) || in_category(4)) && !is_category(3)) echo' class="nav-current"'; ?>>Magazine</a></li>
						<li class="menu-item"><a href="http://carlarozman.com/<?php echo($postlinks[5]) ?>"<?php if (is_category(5) || in_category(5)) echo' class="nav-current"'; ?>>Identity</a></li>
						<li class="menu-item"><a href="http://carlarozman.com/<?php echo($postlinks[6]) ?>"<?php if (is_category(6) || in_category(6)) echo' class="nav-current"'; ?>>Print</a></li>
						<li class="menu-item"><a href="http://carlarozman.com/<?php echo($postlinks[15]) ?>"<?php if (is_category(15) || in_category(15)) echo' class="nav-current"'; ?>>Posters</a></li>
						<li class="menu-item"><a href="http://carlarozman.com/<?php echo($postlinks[18]) ?>"<?php if (is_category(18) || in_category(18)) echo' class="nav-current"'; ?>>Film</a></li>
						<li class="menu-item"><a href="http://carlarozman.com/<?php echo($postlinks[7]) ?>"<?php if (is_category(7) || in_category(7)) echo' class="nav-current"'; ?>>Web</a></li>
						<li class="menu-item"><a href="http://carlarozman.com/all"<?php if (is_page('all')) echo' class="nav-current"'; ?>>All</a></li>
					</ul>
			</nav></div><!--#nav-work-->
			<div id="About-nav" class="nav hidden-nav<?php if (is_page(bio) ) echo' active" style="display:block;"'?>"><nav>
 					<ul id="menu-about-navigation" class="menu">
				     	<li class="menu-item">Hudson Valley, New York</li>
<!--
				     	<li class="menu-item"><a href="http://carlarozman.com/about/accolades"<?php if (is_category(10)) echo' class="nav-current"'; ?>>Accolades</a></li>
						<li class="menu-item"><a href="http://carlarozman.com/bio"<?php if (is_category(9)) echo' class="nav-current"'; ?>>Bio</a></li>
						<li class="menu-item"><a href="http://carlarozman.com/about/friends"<?php if (is_category(11)) echo' class="nav-current"'; ?>>Friends</a></li>
						<li class="menu-item"><a href="http://carlarozman.com/about/news"<?php if (is_category(12)) echo' class="nav-current"'; ?>>News</a></li>
-->
					</ul>
			</nav></div><!--#nav-about-->
			<div id="Home-nav" class="nav hidden-nav<?php //if (is_front_page() ) echo' active" style="display:block;"'?>"><nav>
				    <ul id="menu-about-navigation" class="menu">
				     	<li class="menu-item">Hello There</li>
					</ul>
			</nav></div><!--#nav-home-->
			<div id="Contact-nav" class="nav hidden-nav<?php if (is_page(contact) ) echo' active" style="display:block;"'?>"><nav>
				    <ul id="menu-about-navigation" class="menu">
				     	<li class="menu-item">Always Open</li>
					</ul>
			</nav></div><!--#nav-home-->
			<div id="Blog-nav" class="nav hidden-nav<?php if (is_category(news) || in_category(news) ) echo' active" style="display:block;"'?>"><nav>
				    <ul id="menu-about-navigation" class="menu">
				     	<li class="menu-item">Recent Work</li>
					</ul>
			</nav></div><!--#nav-home-->
			<?php if ( ! dynamic_sidebar( 'Header' ) ) : ?><!-- Wigitized Header --><?php endif ?>
			<div class="clear"></div>
		</div><!--.container-->
	</header></div><!--#header-->
	<div class="container">