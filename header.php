<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	content="width=device-width, initial-scale=1.0 ">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/webclipicon.png" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />

	<!-- bootstrap -->
	<!-- BootstrapのCSS読み込み -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css" type="text/css" />
	<!-- jQuery読み込み -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- BootstrapのJS読み込み -->
	<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>

	<!-- 独自css読み込み -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/default.css" type="text/css" />


	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="header-inner">
			<!--タイトルを文字にする場合-->
			<div class="site-title">
				<h1><a href="<?php echo home_url(); ?>">
					<?php bloginfo( 'name' ); ?>
				</a></h1>
			</div>
			<div class="h-showbox">
				<span></span>
				<span></span>
			</div>
		</div>
		<div class="h-hidenbox">
				<?php wp_nav_menu( array(
					'theme_location' => 'header-nav',
					'container' => 'nav',
					'container_class' => 'header-nav',
					'container_id' => 'header-nav',
					'fallback_cb' => ''
				) ); ?>
			</div>

	</header>
