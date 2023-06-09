<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package st
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124597188-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-124597188-2');
</script>
</head>

<body <?php body_class(); ?>>
<?php if (!is_404()): ?>
<div class="site-mobile-menu-wrapper">
	<div class="site-branding">
		<?php $home_url = tmc_get_option('home_custom_url',home_url('/'));
		if(has_custom_logo()){
			$logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $logo_id , 'full' );
			// the_custom_logo();
			echo '<a href="' . esc_url($home_url) . '"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
		}else{?>
			<h2><a  href="<?php echo esc_url($home_url); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a></h2>
		<?php }?>
	</div><!-- .site-branding -->
	<?php
	wp_nav_menu( array(
		'theme_location' => 'primary',
		'menu_id'        => 'site-mobile-menu',
	) );
	?>
</div>
<?php endif; ?>
<div class="site">
	<?php if (!is_404()): ?>
	<header id="masthead" class="site-header">
		<?php do_action('tmc_before_site_content');?>
		<div class="tmc-header">
			<div class="container">
				<div class="navbar-header">
					<div class="site-branding">
						<?php if(has_custom_logo()){
							$logo_id = get_theme_mod( 'custom_logo' );
							$logo = wp_get_attachment_image_src( $logo_id , 'full' );
							// the_custom_logo();
							echo '<a href="' . esc_url($home_url) . '"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
						}else{?>
							<h2><a  href="<?php echo esc_url($home_url); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a></h2>
						<?php }?>
					</div><!-- .site-branding -->
					<nav id="site-menu" class="main-menu hidden-md-down">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'link_before'    => '<span class="menu-item-text">',
							'link_after'     => '</span>'
						) );
						?>
					</nav><!-- #site-menu -->
					<div class="header-tools">
						<?php
							tmc_mobile_menu_btn();
							// tmc_search_icon_nav();
						?>
					</div><!-- .header-tools-->
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<?php endif; ?>
	<?php do_action('tmc_page_title');?>
	<div id="content" class="site-content">
