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
