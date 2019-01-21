<?php
get_header();
wp_print_styles( array( 'wprig-content', 'wprig-front-page' ) ); // Note: If this was already done it will be skipped.
$tag_arr = get_tags(array('hide_empty' => false));
$cate_arr = get_categories(array('hide_empty' => false));
?>
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>
        </div>

    </div>
    <div id="wrapper">
        <div id="contents">
            <main id="main" role="main">
                <div id="mainimg">
                    <?php
                    while (have_posts()) : the_post();

                        the_content(); //carousel

                    endwhile;
                    ?>
                </div>
                <section id="premama" class="landing__section">
                    <header class="h2_basic01">
                        <h2>Premama</h2>
                    </header>
                    <ul class="clearfix">
                        <?php
                        $tag_premama1 = filterTagBySlug("premama1", $tag_arr);
                        $tag_pregnancy_m2 = filterTagBySlug("pregnancy_m2", $tag_arr);
                        $tag_pregnancy_m3 = filterTagBySlug("pregnancy_m3", $tag_arr);
                        $tag_pregnancy_m4 = filterTagBySlug("pregnancy_m4", $tag_arr);
                        ?>
                        <li>
                            <dl>
                                <dt>
                                    <img src="<?php echo get_template_directory_uri() . '/images/temp/' ?>img_premama01.png"/>
                                    <a href="<?php echo $tag_premama1["link"]; ?>"><?php echo $tag_premama1["name"]; ?>
                                        <span class="fa fa-caret-right"></span></a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li class="first"><a
                                                    href="<?php echo $tag_pregnancy_m2["link"]; ?>"><?php echo $tag_pregnancy_m2["name"]; ?>
                                                <span class="fa fa-caret-right"></span></a></li>
                                        <li>
                                            <a href="<?php echo $tag_pregnancy_m3["link"]; ?>"><?php echo $tag_pregnancy_m3["name"]; ?>
                                                <span class="fa fa-caret-right"></span></a></li>
                                        <li class="last"><a
                                                    href="<?php echo $tag_pregnancy_m4["link"]; ?>"><?php echo $tag_pregnancy_m4["name"]; ?>
                                                <span class="fa fa-caret-right"></span></a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                        <?php
                        $tag_premama2 = filterTagBySlug("premama2", $tag_arr);
                        $tag_pregnancy_m5 = filterTagBySlug("pregnancy_m5", $tag_arr);
                        $tag_pregnancy_m6 = filterTagBySlug("pregnancy_m6", $tag_arr);
                        $tag_pregnancy_m7 = filterTagBySlug("pregnancy_m7", $tag_arr);
                        ?>
                        <li>
                            <dl>
                                <dt>
                                    <img src="<?php echo get_template_directory_uri() . '/images/temp/' ?>img_premama02.png"/>
                                    <a href="<?php echo $tag_premama2["link"]; ?>"><?php echo $tag_premama2["name"]; ?>
                                        <span class="fa fa-caret-right"></span></a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li class="first"><a
                                                    href="<?php echo $tag_pregnancy_m5["link"]; ?>"><?php echo $tag_pregnancy_m5["name"]; ?>
                                                <span class="fa fa-caret-right"></span></a></li>
                                        <li>
                                            <a href="<?php echo $tag_pregnancy_m6["link"]; ?>"><?php echo $tag_pregnancy_m6["name"]; ?>
                                                <span class="fa fa-caret-right"></span></a></li>
                                        <li class="last"><a
                                                    href="<?php echo $tag_pregnancy_m7["link"]; ?>"><?php echo $tag_pregnancy_m7["name"]; ?>
                                                <span class="fa fa-caret-right"></span></a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                        <?php
                        $tag_premama3 = filterTagBySlug("premama3", $tag_arr);
                        $tag_pregnancy_m8 = filterTagBySlug("pregnancy_m8", $tag_arr);
                        $tag_pregnancy_m9 = filterTagBySlug("pregnancy_m9", $tag_arr);
                        $tag_pregnancy_m10 = filterTagBySlug("pregnancy_m10", $tag_arr);
                        ?>
                        <li>
                            <dl>
                                <dt>
                                    <img src="<?php echo get_template_directory_uri() . '/images/temp/' ?>img_premama03.png"/>
                                    <a href="<?php echo $tag_premama3["link"]; ?>"><?php echo $tag_premama3["name"]; ?>
                                        <span class="fa fa-caret-right"></span></a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li class="first"><a
                                                    href="<?php echo $tag_pregnancy_m8["link"]; ?>"><?php echo $tag_pregnancy_m8["name"]; ?>
                                                <span class="fa fa-caret-right"></span></a></li>
                                        <li>
                                            <a href="<?php echo $tag_pregnancy_m9["link"]; ?>"><?php echo $tag_pregnancy_m9["name"]; ?>
                                                <span class="fa fa-caret-right"></span></a></li>
                                        <li class="last"><a
                                                    href="<?php echo $tag_pregnancy_m10["link"]; ?>"><?php echo $tag_pregnancy_m10["name"]; ?>
                                                <span class="fa fa-caret-right"></span></a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </section>
                <section id="month_old" class="landing__section">
                    <header class="h2_basic01">
                        <h2>0 to 11 Months After Birth</h2>
                    </header>
                    <ul class="clearfix">
                        <?php
                        $tag_mama1 = filterTagBySlug("mama1", $tag_arr);
                        $tag_m0 = filterTagBySlug("m0", $tag_arr);
                        $tag_m1 = filterTagBySlug("m1", $tag_arr);
                        $tag_m2 = filterTagBySlug("m2", $tag_arr);
                        $tag_m3 = filterTagBySlug("m3", $tag_arr);
                        ?>
                        <li>
                            <dl>
                                <dt>
                                    <img src="<?php echo get_template_directory_uri() . '/images/temp/' ?>img_monthold01.png"/>
                                    <a href="<?php echo $tag_mama1["link"]; ?>"><?php echo $tag_mama1["name"]; ?><span
                                                class="fa fa-caret-right"></span></a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li class="first"><a
                                                    href=<?php echo $tag_m0["link"]; ?>><?php echo $tag_m0["name"]; ?>
                                                <span class="fa fa-caret-right"></span></a></li>
                                        <li><a href="<?php echo $tag_m1["link"]; ?>"><?php echo $tag_m1["name"]; ?><span
                                                        class="fa fa-caret-right"></span></a></li>
                                        <li><a href="<?php echo $tag_m2["link"]; ?>"><?php echo $tag_m2["name"]; ?><span
                                                        class="fa fa-caret-right"></span></a></li>
                                        <li class="last"><a
                                                    href="<?php echo $tag_m3["link"]; ?>"><?php echo $tag_m3["name"]; ?>
                                                <span class="fa fa-caret-right"></span></a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                        <?php
                        $tag_mama2 = filterTagBySlug("mama2", $tag_arr);
                        $tag_m4 = filterTagBySlug("m4", $tag_arr);
                        $tag_m5 = filterTagBySlug("m5", $tag_arr);
                        $tag_m6 = filterTagBySlug("m6", $tag_arr);
                        $tag_m7 = filterTagBySlug("m7", $tag_arr);
                        ?>
                        <li>
                            <dl>
                                <dt>
                                    <img src="<?php echo get_template_directory_uri() . '/images/temp/' ?>img_monthold02.png"/>
                                    <a href="<?php echo $tag_mama2["link"]; ?>"><?php echo $tag_mama2["name"]; ?><span
                                                class="fa fa-caret-right"></span></a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li class="first"><a
                                                    href="<?php echo $tag_m4["link"]; ?>"><?php echo $tag_m4["name"]; ?>
                                                <span class="fa fa-caret-right"></span></a></li>
                                        <li><a href="<?php echo $tag_m5["link"]; ?>"><?php echo $tag_m5["name"]; ?><span
                                                        class="fa fa-caret-right"></span></a></li>
                                        <li><a href="<?php echo $tag_m6["link"]; ?>"><?php echo $tag_m6["name"]; ?><span
                                                        class="fa fa-caret-right"></span></a></li>
                                        <li class="last"><a
                                                    href="<?php echo $tag_m7["link"]; ?>"><?php echo $tag_m7["name"]; ?>
                                                <span class="fa fa-caret-right"></span></a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                        <?php
                        $tag_mama3 = filterTagBySlug("mama3", $tag_arr);
                        $tag_m8 = filterTagBySlug("m8", $tag_arr);
                        $tag_m9 = filterTagBySlug("m9", $tag_arr);
                        $tag_m10 = filterTagBySlug("m10", $tag_arr);
                        $tag_m11 = filterTagBySlug("m11", $tag_arr);
                        ?>
                        <li>
                            <dl>
                                <dt>
                                    <img src="<?php echo get_template_directory_uri() . '/images/temp/' ?>img_monthold03.png"/>
                                    <a href="<?php echo $tag_mama3["link"]; ?>"><?php echo $tag_mama3["name"]; ?><span
                                                class="fa fa-caret-right"></span></a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li class="first"><a
                                                    href="<?php echo $tag_m8["link"]; ?>"><?php echo $tag_m8["name"]; ?>
                                                <span class="fa fa-caret-right"></span></a></li>
                                        <li><a href="<?php echo $tag_m9["link"]; ?>"><?php echo $tag_m9["name"]; ?><span
                                                        class="fa fa-caret-right"></span></a></li>
                                        <li><a href="<?php echo $tag_m10["link"]; ?>"><?php echo $tag_m10["name"]; ?>
                                                <span class="fa fa-caret-right"></span></a></li>
                                        <li class="last"><a
                                                    href="<?php echo $tag_m11["link"]; ?>"><?php echo $tag_m11["name"]; ?>
                                                <span class="fa fa-caret-right"></span></a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </section>
                <section id="year_old" class="landing__section">
                    <header class="h2_basic01">
                        <h2>1 to 3 Years Old</h2>
                    </header>
                    <ul class="clearfix">
                        <?php
                        $tag_age1_2 = filterTagBySlug("age_1-5", $tag_arr);
                        $tag_age2 = filterTagBySlug("age_2", $tag_arr);
                        $tag_age3 = filterTagBySlug("age_3", $tag_arr);
                        ?>
                        <li class="first">
                            <dl>
                                <dt>
                                    <img src="<?php echo get_template_directory_uri() . '/images/temp/' ?>img_yearold01.png"/>
                                    <a href="<?php echo $tag_age1_2["link"]; ?>"><?php echo $tag_age1_2["name"]; ?>
                                        <span class="fa fa-caret-right"></span></a></dt>
                                <dd>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <img src="<?php echo get_template_directory_uri() . '/images/temp/' ?>img_yearold02.png"/>
                                    <a href="<?php echo $tag_age2["link"]; ?>"><?php echo $tag_age2["name"]; ?>
                                        <span class="fa fa-caret-right"></span></a></dt>
                                <dd>
                                </dd>
                            </dl>
                        </li>
                        <li class="last">
                            <dl>
                                <dt>
                                    <img src="<?php echo get_template_directory_uri() . '/images/temp/' ?>img_yearold03.png"/>
                                    <a href="<?php echo $tag_age3["link"]; ?>"><?php echo $tag_age3["name"]; ?>
                                        <span class="fa fa-caret-right"></span></a></dt>
                                <dd>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </section>
                <section id="category" class="landing__section">
                    <header class="h2_basic01">
                        <h2>View By Category</h2>
                    </header>
                    <?php
                    $cate_deals = filterCateGoryBySlug("deals", $cate_arr);
                    $cate_eat = filterTagBySlug("eat", $cate_arr);
                    $cate_study = filterTagBySlug("study", $cate_arr);
                    $cate_ask = filterTagBySlug("ask", $cate_arr);
                    $cate_play = filterTagBySlug("play", $cate_arr);
                    ?>
                    <ul>
                        <li class="first">
                            <a href="<?php echo $cate_deals["link"]; ?>">
                                <div class="deals01">
                                    <dl class="item" style="height: 120px;">
                                        <dt>Obtained<span>to</span></dt>
                                        <dd>Catch the deals right now in season! Certainly fun pregnancy life, parenting
                                            life.<span class="fa fa-caret-right"></span></dd>
                                    </dl>
                                    <!-- /.deals --></div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $cate_eat["link"]; ?>">
                                <div class="eat01">
                                    <dl class="item" style="height: 120px;">
                                        <dt>食<span>べる</span></dt>
                                        <dd>食べることは、ママにもお子さまにも大切。知っておきたい食のポイントや栄養レシピ。<span
                                                    class="fa fa-caret-right"></span></dd>
                                    </dl>
                                    <!-- /.deals --></div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $cate_study["link"]; ?>">
                                <div class="study01">
                                    <dl class="item" style="height: 120px;">
                                        <dt>学<span>ぶ</span></dt>
                                        <dd>胎児・赤ちゃんの成長、母乳や離乳食のことなど、学んでおきたい妊娠・育児の知識。<span
                                                    class="fa fa-caret-right"></span></dd>
                                    </dl>
                                    <!-- /.deals --></div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $cate_ask["link"]; ?>">
                                <div class="ask01">
                                    <dl class="item" style="height: 120px;">
                                        <dt>尋<span>ねる</span></dt>
                                        <dd>妊娠中の栄養のこと、育児に関すること、Q&amp;Aはママに役立つ情報源。<span class="fa fa-caret-right"></span>
                                        </dd>
                                    </dl>
                                    <!-- /.deals --></div>
                            </a>
                        </li>
                        <li class="last">
                            <a href="<?php echo $cate_play["link"]; ?>">
                                <div class="play01">
                                    <dl class="item" style="">
                                        <dt>動<span>く</span></dt>
                                        <dd>女性にとって大切な「心とからだの正しいケア」。適度な運動で気分転換とストレス発散を。<span
                                                    class="fa fa-caret-right"></span></dd>
                                    </dl>
                                    <!-- /.deals --></div>
                            </a>
                        </li>
                    </ul>
                </section>
                <div style="margin-bottom: 30px;">
                    <a href="https://www.meiji.co.jp/baby/club/category/deals/deals16.html">
                        <img src="<?php echo get_template_directory_uri() . '/images/temp/' ?>rakurakushopping_link_btn.png"
                             alt="らくらくショッピング">
                    </a>
                </div>
            </main>
            <?php
                get_sidebar();
            ?>
        </div>
    </div>

<?php
get_footer();
