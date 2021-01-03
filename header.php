<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Onlinery_Store
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'onlinery-store' ); ?></a>

	<header id="masthead" class="site-header">
		<section class="bg-green-700 px-20 py-2 text-white">
			<p class="text-xs font-semibold">Call us on +62 817 076 5326</p>
		</section>
		<div class="flex justify-between content-center px-20 py-5 bg-white shadow-sm">
			<div class="site-branding flex-1">
				<h1 class="site-title text-gray-500 text-3xl font-bold"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				the_custom_logo();
				$onlinery_store_description = get_bloginfo( 'description', 'display' );
				if ( $onlinery_store_description || is_customize_preview() ) :
					?>
					<p class="site-description text-xs text-green-400"><?php echo $onlinery_store_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			<div class="site-search flex-1 self-center justify-self-center">
					<input class="border-2 border-green-200 text-gray-900 appearance-none block w-full rounded-md py-2 px-4 focus:outline-none focus:bg-green-50 hover:bg-green-50" type="text" placeholder="what do you wanna search?" name="" id="">
			</div>
			<div class="site-search flex-1 self-center justify-self-end">
				<a href="#" class="inline-block float-right border-2 border-gray-200 text-gray-900 appearance-none rounded-md py-2 px-4 focus:outline-none">Login</a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation px-20 py-2 bg-green-50 shadow-sm">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'onlinery-store' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
