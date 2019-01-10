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
                <p><a href="http://www.meiji.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>logo02.png" width="65" height="26" alt="Meiji"></a></p>
                <div >

                    <ul id="hd_links">
                        <li class="last"><a href="https://line.me/R/ti/p/%40erx4059x" target="_blank">Add Friends</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        <nav id="gnavi" role="navigation">
            <ul>
                <li id="gnavi01" class="first">
                    <a>カテゴリ<span class="fa fa-caret-down"></span></a>
                    <ul>
                        <li class="first"><a href="/baby/club/category/deals/index.html">得する<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/category/eat/index.html">食べる<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/category/study/index.html">学ぶ<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/category/ask/index.html">尋ねる<span class="fa fa-caret-right"></span></a></li>
                        <li class="last"><a href="/baby/club/category/play/index.html">動く<span class="fa fa-caret-right"></span></a></li>
                    </ul>
                </li>
                <li id="gnavi02">
                    <a href="/baby/club/tag/premama/index.html">プレママ<span class="fa fa-caret-down"></span></a>
                    <ul>
                        <li class="first"><a href="/baby/club/tag/pregnancy_m2/index.html">妊娠2ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/tag/pregnancy_m3/index.html">妊娠3ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/tag/pregnancy_m4/index.html">妊娠4ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/tag/pregnancy_m5/index.html">妊娠5ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/tag/pregnancy_m6/index.html">妊娠6ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/tag/pregnancy_m7/index.html">妊娠7ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/tag/pregnancy_m8/index.html">妊娠8ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/tag/pregnancy_m9/index.html">妊娠9ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li class="last"><a href="/baby/club/tag/pregnancy_m10/index.html">妊娠10ヵ月<span class="fa fa-caret-right"></span></a></li>
                    </ul>
                </li>
                <li id="gnavi03">
                    <a href="/baby/club/tag/mama/index.html">0ヵ月～11ヵ月<span class="fa fa-caret-down"></span></a>
                    <ul>
                        <li class="first"><a href="/baby/club/tag/m0/index.html">生後0ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/tag/m1/index.html">生後1ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/tag/m2/index.html">生後2ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/tag/m3/index.html">生後3ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/tag/m4/index.html">生後4ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/tag/m5/index.html">生後5ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/tag/m6/index.html">生後6ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/tag/m7/index.html">生後7ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/tag/m8/index.html">生後8ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/tag/m9/index.html">生後9ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li><a href="/baby/club/tag/m10/index.html">生後10ヵ月<span class="fa fa-caret-right"></span></a></li>
                        <li class="last"><a href="/baby/club/tag/m11/index.html">生後11ヵ月<span class="fa fa-caret-right"></span></a></li>
                    </ul>
                </li>

                <li id="gnavi04">
                    <a href="/baby/club/tag/age/index.html">1歳～3歳<span class="fa fa-caret-down"></span></a>
                    <ul>
                        <li class="item first" style="height: 57px;"><a href="/baby/club/tag/age1/index.html">1歳<span class="fa fa-caret-right"></span></a></li>
                        <li class="item" style="height: 57px;"><a href="/baby/club/tag/age1.5/index.html">1歳1ヶ月〜1歳5ヶ月<span class="fa fa-caret-right"></span></a></li>
                        <li class="item" style="height: 57px;"><a href="/baby/club/tag/age2/index.html">1歳半〜2歳頃<span class="fa fa-caret-right"></span></a></li>
                        <li class="item last" style="height: 57px;"><a href="/baby/club/tag/age3/index.html">2歳〜3歳頃<span class="fa fa-caret-right"></span></a></li>
                    </ul>
                </li>
                <li id="gnavi05">
                    <a href="/baby/hatsupapa/" target="_blank">初パパ<span class="fa fa-external-link"></span></a>
                </li>
                <li id="gnavi06" class="last">
                    <a href="/baby/club/category/products/index.html">明治からのご案内<span class="fa fa-caret-right"></span></a>
                </li>
            </ul>
        </nav>
    </header>
