<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wprig
 */

?>
<footer id="footer_banner">
    <div class="ft_link01">
        <section class="ft_inner01">
            <header class="h2_basic01">
                <h2>Meiji products introduction</h2>
            </header>
            <div class="flex-container">
                <div class="hohoemi01">
                    <div class="img_hohoemi01"><a href="/baby/hohoemi/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>img_brand_hohoemi01.png" width="275" height="209" alt="明治ほほえみ らくらくキューブ"></a></div>
                    <ul>
                        <li class="first"><a href="/baby/hohoemi/languages/simplified_characters/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>txt_language01.png" height="22" width="97" alt="简体中文"></a></li>
                        <li><a href="/baby/hohoemi/languages/traditional_chinese/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>txt_language02.png"  height="22" width="97" alt="繁體中文"></a></li>
                        <li><a href="/baby/hohoemi/languages/english/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>txt_language03.png"  height="22" width="97" alt="English"></a></li>
                        <li><a href="/baby/hohoemi/languages/korean/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>txt_language04.png"  height="22" width="97" alt="한국어"></a></li>
                        <li><a href="/baby/hohoemi/languages/portuguese/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>txt_language05.png"  height="22" width="97" alt="Portugues"></a></li>
                        <li class="last"><a href="/baby/hohoemi/languages/vietnam/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>txt_language06.png" height="22" width="97" alt="Việt Nam"></a></li>
                    </ul>
                </div>
                <div class="step01">
                    <div class="img_step01"><a href="/baby/step/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>img_brand_step01.png" width="280" height="209" alt="明治ステップ らくらくキューブ"></a></div>
                    <ul>
                        <li class="first"><a href="/baby/step/languages/simplified_characters/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>txt_language01.png" height="22" width="97" alt="简体中文"></a></li>
                        <li><a href="/baby/step/languages/traditional_chinese/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>txt_language02.png" height="22" width="97" alt="繁體中文"></a></li>
                        <li><a href="/baby/step/languages/english/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>txt_language03.png" height="22" width="97" alt="English"></a></li>
                        <li><a href="/baby/step/languages/korean/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>txt_language04.png" height="22" width="97" alt="한국어"></a></li>
                        <li><a href="/baby/step/languages/portuguese/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>txt_language05.png" height="22" width="97" alt="Portugues"></a></li>
                        <li class="last"><a href="/baby/step/languages/vietnam/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>txt_language06.png" height="22" width="97" alt="Việt Nam"></a></li>
                    </ul>
                </div>
                <!-- /.clearfix --></div>
        </section>
        <!-- /.ft_link01 --></div>
    <div class="ft_link02">
        <section class="ft_inner01">
            <header class="h2_basic01">
                <h2><span class="fa fa-link"></span>Related content</h2>
            </header>
            <div class="relation01">
                <ul>
                    <li class="first"><a href="/baby/hatsupapa/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>bnr_papa01.png" width="300" height="146" alt="初パパ"></a></li>
                    <li><a href="http://catalog-p.meiji.co.jp/products/baby_mother/milkpowder/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>bnr_intro01.png"  width="300" height="146" alt="明治製品のご紹介"></a></li>
                    <li class="last"><a href="https://line.me/R/ti/p/%40erx4059x" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>bnr_line.png" width="300" height="146" alt="明治ほほえみクラブ公式LINE"></a></li>
                </ul>
                <!-- /.relation01 --></div>
        </section>
        <!-- /.ft_link02 --></div>
</footer>
<div id="footer">
    <div id="footer-inner">
        <p class="copyright"><a href="https://www.meiji.co.jp/"><img src="<?php echo get_template_directory_uri().'/images/temp/'?>ft_logo.gif" border="0" alt="株式会社 明治 Copyright Meiji Co., Ltd. All Rights Reserved." width="180" height="25"></a></p>
        <div class="right-section">
            <ul class="utility-link">
                <li class="privacy first"><a href="https://www.meiji.co.jp/privacy/">個人情報保護について</a></li>
                <li class="rules last"><a href="https://www.meiji.co.jp/regulation/">ご利用規約</a></li>
            </ul>
            <ul class="company-link">
                <li class="first"><a href="https://www.meiji.com/" target="_blank">明治ホールディングス株式会社</a></li>
                <li class="last"><a href="https://www.meiji-seika-pharma.co.jp" target="_blank">Meiji Seika ファルマ株式会社</a></li>
            </ul>
        </div>
    </div>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
