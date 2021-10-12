<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package acfwp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top" >
<?php wp_body_open(); ?>
<div id="preloader" style="display: none;">
        <div id="loader"></div>
    </div>
    <div id="page" class="site">
    	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'acfwp' ); ?></a>
    	<header id="masthead" class="s-header">
    		<div class="row">
    			<?php
    			$sitelogo = get_field('site_logo', 'option'); ?>

    			<?php if($sitelogo):?>

    				<div class="s-header__logo">
    					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    						<img src="<?php echo $sitelogo; ?>" alt=""></a>
    				</div>

    			<?php endif;?>

    			<nav id="site-navigation" class="s-header__nav">

    				<?php
    				wp_nav_menu(
    					array(
    						'theme_location' => 'primary-menu',
    						'menu'           => 'Main Menu',
    						'menu_id'        => '',
    					)
    				);
    				?>
    			</nav><!-- #site-navigation -->
    		</div>

    	</header><!-- #masthead -->
