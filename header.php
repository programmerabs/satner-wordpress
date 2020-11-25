<!doctype html>
<html <?php language_attributes(); ?>>
<?php
global $redux_demo;
?>
<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo('charset')?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">

</head>
<?php wp_head();?>
<body>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="<?php echo home_url('/');?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<?php
									wp_nav_menu([
										'theme_location' => 'primary_menu',
										'menu_class'		 =>	'nav navbar-nav menu_nav justify-content-end',
										'container'			 =>	false,
									]);

						?>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->
