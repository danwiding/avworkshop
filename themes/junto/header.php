<!DOCTYPE html>
	<!--[if IE 6]><html id="ie6" <?php language_attributes(); ?>><![endif]-->
	<!--[if IE 7]><html id="ie7" <?php language_attributes(); ?>><![endif]-->
	<!--[if IE 8]><html id="ie8" <?php language_attributes(); ?>><![endif]-->
	
	<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
		<html <?php language_attributes(); ?>>
	<!--<![endif]-->

	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width" />
		
		<title><?php global $page, $paged;
		// Add the blog description for the home/front page.
			$site_description = get_bloginfo('description', 'display');
			if ($site_description && (is_home() || is_front_page()))
				echo $site_description . ' | ';

		// Add the blog title
			bloginfo('name');
			wp_title('|', true, 'left');		
		
		// Add a page number if necessary:
			if ($paged >= 2 || $page >= 2)
				echo ' | ' . sprintf('Page %s', max($paged, $page)); ?>
		</title>
		
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="shortcut icon" href="<?= $stlynfo; ?>/graphics/favicon.png" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/css/theme.fonts.css" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />
				
		<!--[if lt IE 9]><script src="<?= bloginfo('stylesheet_directory'); ?>/js/html5.js" type="text/javascript"></script><![endif]-->
		
		<?php if (is_singular() && get_option('thread_comments')) : wp_enqueue_script('comment-reply'); endif; ?>
		
		<?php wp_head(); ?>
	</head>		
	
	<body <?php body_class(); ?>>