<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wprig
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php if ( ! wprig_is_amp() ) : ?>
		<script>document.documentElement.classList.remove("no-js");</script>
	<?php endif; ?>

	<?php wp_head(); ?>
    <?php wp_print_styles( array( 'wprig-app-style' ) );?>
</head>

<body <?php body_class();?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wprig' ); ?></a>
    <header id="header" role="banner">
        <div id="hd_outer">
            <h1 id="hd_logo"><a href="#"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>logo01.png" width="387" height="90" alt="ほほえみクラブ ママと家族の育児応援サイト"></a></h1>

            <div id="hd_inner">
                <p><a href="#" target="_blank"><img
                                src="<?php echo get_template_directory_uri() . '/images/temp/' ?>logo02.png" width="65"
                                height="26" alt="Meiji"></a></p>
                <div >

                    <ul id="hd_links">
                        <li class="last"><a href="#" target="_blank">Add Friends</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        <?php
            wp_nav_menu( array(
                'container' => 'nav',
                'container_id' => 'gnavi',
                'theme_location' => 'primary',
            ) );
        ?>
    </header>
