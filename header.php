<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(''); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title('');
		} else {
			echo wp_title(''); echo ' | '; bloginfo( 'name' );
		} ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True"/>
		<meta name="MobileOptimized" content="320"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico"/>

  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

		<!-- wordpress head functions -->
		<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'/>
		<?php
		wp_enqueue_script("jquery");
		wp_head();
		wp_register_script( 'forkit', get_template_directory_uri().'/library/js/forkit.js');
		wp_enqueue_script( 'forkit' );
		?>
		<!-- end of wordpress head -->

	</head>

	<body <?php body_class(); ?>>
	<a class="forkit" data-text="Experiment" data-text-detached="GitHub" href="https://github.com/Mte90">
		<img src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="GitHub">
	</a>

		<div class="logo-div">
			<div class="logo-icon">
					<div class="sprite-debian"></div>
					<div class="space"></div>
					<div class="sprite-linux"></div>
					<div class="space"></div>
					<div class="sprite-jquery"></div>
					<div class="space"></div>
					<div class="sprite-config"></div>
					<div class="space"></div>
					<div class="sprite-script"></div>
					<div class="space"></div>
			</div>
		</div>
		<div id="container">
			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">
					<div class="search">
						<? echo bones_wpsearch($a); ?>
					</div>
					<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow" class="roll-link">L'Eternauta Geek</a></p>
					<div class="social">
					<a href="http://www.mte90.net/index.php/?feed=rss2" class="roll-link"><div class="sprite-rss"> </div></a>
					<a href="http://www.facebook.com/Mte90" class="roll-link"><div class="sprite-facebook"> </div></a>
					<a href="http://twitter.com/Mte90Net" class="roll-link"><div class="sprite-twitter"> </div></a>
					<a href="http://www.linkedin.com/profile/view?id=173136999" class="roll-link"><div class="sprite-linkedin"> </div></a>
					<a href="http://www.youtube.com/user/Mte90lp" class="roll-link"><div class="sprite-youtube"> </div></a>
					<a href="https://plus.google.com/u/0/115447737942040259845/posts" rel=”publisher” class="roll-link"><div class="sprite-google"> </div></a>
					<a href="http://it.foursquare.com/mte90net" class="roll-link"><div class="sprite-foursquare"> </div></a>
					<a href="http://zerply.com/mte90net" class="roll-link"><div class="sprite-zerply"> </div></a>
					<a href="http://forrst.com/people/Mte90" class="roll-link"><div class="sprite-forrst"> </div></a>
					</div>
					<nav role="navigation">
						<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
					</nav>

				</div> <!-- end #inner-header -->
				<div class="sprite-logo"></div>
			</header> <!-- end header -->
