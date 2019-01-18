<?php
get_header();
wp_print_styles( array( 'wprig-content', 'wprig-front-page' ) ); // Note: If this was already done it will be skipped.
$tag_arr = get_tags(array('hide_empty' => false));
$cate_arr = get_categories(array('hide_empty' => false));
?>
    <div id="wrapper">
        <div id="contents">
            <main id="main" role="main">
                <div id="mainimg">
                    <?php
                    while ( have_posts() ) : the_post();

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
                            $tag_premama1 = filterTagBySlug("premama1",$tag_arr);
                            $tag_pregnancy_m2 = filterTagBySlug("pregnancy_m2",$tag_arr);
                            $tag_pregnancy_m3 = filterTagBySlug("pregnancy_m3",$tag_arr);
                            $tag_pregnancy_m4 = filterTagBySlug("pregnancy_m4",$tag_arr);
                        ?>
                        <li>
                            <dl>
                                <dt>
                                    <img src="<?php echo get_template_directory_uri().'/images/temp/'?>img_premama01.png" />
                                    <a href="<?php echo $tag_premama1["link"]; ?>"><?php echo $tag_premama1["name"];?>
                                        <span class="fa fa-caret-right"></span></a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li class="first"><a href="<?php echo $tag_pregnancy_m2["link"]; ?>"><?php echo $tag_pregnancy_m2["name"];?><span class="fa fa-caret-right"></span></a></li>
                                        <li><a href="<?php echo $tag_pregnancy_m3["link"]; ?>"><?php echo $tag_pregnancy_m3["name"];?><span class="fa fa-caret-right"></span></a></li>
                                        <li class="last"><a href="<?php echo $tag_pregnancy_m4["link"]; ?>"><?php echo $tag_pregnancy_m4["name"];?><span class="fa fa-caret-right"></span></a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                        <?php
                            $tag_premama2 = filterTagBySlug("premama2",$tag_arr);
                            $tag_pregnancy_m5 = filterTagBySlug("pregnancy_m5",$tag_arr);
                            $tag_pregnancy_m6 = filterTagBySlug("pregnancy_m6",$tag_arr);
                            $tag_pregnancy_m7 = filterTagBySlug("pregnancy_m7",$tag_arr);
                        ?>
                        <li>
                            <dl>
                                <dt>
                                    <img src="<?php echo get_template_directory_uri() . '/images/temp/' ?>img_premama02.png"/>
                                    <a href="<?php echo $tag_premama2["link"]; ?>"><?php echo $tag_premama2["name"];?>
                                        <span class="fa fa-caret-right"></span></a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li class="first"><a href="<?php echo $tag_pregnancy_m5["link"]; ?>"><?php echo $tag_pregnancy_m5["name"];?><span class="fa fa-caret-right"></span></a></li>
                                        <li><a href="<?php echo $tag_pregnancy_m6["link"]; ?>"><?php echo $tag_pregnancy_m6["name"];?><span class="fa fa-caret-right"></span></a></li>
                                        <li class="last"><a href="<?php echo $tag_pregnancy_m7["link"]; ?>"><?php echo $tag_pregnancy_m7["name"];?><span class="fa fa-caret-right"></span></a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                        <?php
                            $tag_premama3 = filterTagBySlug("premama3",$tag_arr);
                            $tag_pregnancy_m8 = filterTagBySlug("pregnancy_m8",$tag_arr);
                            $tag_pregnancy_m9 = filterTagBySlug("pregnancy_m9",$tag_arr);
                            $tag_pregnancy_m10 = filterTagBySlug("pregnancy_m10",$tag_arr);
                        ?>
                        <li>
                            <dl>
                                <dt>
                                    <img src="<?php echo get_template_directory_uri() . '/images/temp/' ?>img_premama03.png"/>
                                    <a href="<?php echo $tag_premama3["link"]; ?>"><?php echo $tag_premama3["name"];?>
                                        <span class="fa fa-caret-right"></span></a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li class="first"><a href="<?php echo $tag_pregnancy_m8["link"]; ?>"><?php echo $tag_pregnancy_m8["name"];?><span class="fa fa-caret-right"></span></a></li>
                                        <li><a href="<?php echo $tag_pregnancy_m9["link"]; ?>"><?php echo $tag_pregnancy_m9["name"];?><span class="fa fa-caret-right"></span></a></li>
                                        <li class="last"><a href="<?php echo $tag_pregnancy_m10["link"]; ?>"><?php echo $tag_pregnancy_m10["name"];?><span class="fa fa-caret-right"></span></a></li>
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
                            $tag_mama1 = filterTagBySlug("mama1",$tag_arr);
                            $tag_m0 = filterTagBySlug("m0",$tag_arr);
                            $tag_m1 = filterTagBySlug("m1",$tag_arr);
                            $tag_m2 = filterTagBySlug("m2",$tag_arr);
                            $tag_m3 = filterTagBySlug("m3",$tag_arr);
                        ?>
                        <li>
                            <dl>
                                <dt><img src="<?php echo get_template_directory_uri().'/images/temp/'?>img_monthold01.png" />
                                    <a href="<?php echo $tag_mama1["link"]; ?>"><?php echo $tag_mama1["name"];?><span class="fa fa-caret-right"></span></a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li class="first"><a href=<?php echo $tag_m0["link"]; ?>><?php echo $tag_m0["name"];?><span class="fa fa-caret-right"></span></a></li>
                                        <li><a href="<?php echo $tag_m1["link"]; ?>"><?php echo $tag_m1["name"];?><span class="fa fa-caret-right"></span></a></li>
                                        <li><a href="<?php echo $tag_m2["link"]; ?>"><?php echo $tag_m2["name"];?><span class="fa fa-caret-right"></span></a></li>
                                        <li class="last"><a href="<?php echo $tag_m3["link"]; ?>"><?php echo $tag_m3["name"];?><span class="fa fa-caret-right"></span></a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                        <?php
                            $tag_mama2 = filterTagBySlug("mama2",$tag_arr);
                            $tag_m4 = filterTagBySlug("m4",$tag_arr);
                            $tag_m5 = filterTagBySlug("m5",$tag_arr);
                            $tag_m6 = filterTagBySlug("m6",$tag_arr);
                            $tag_m7 = filterTagBySlug("m7",$tag_arr);
                        ?>
                        <li>
                            <dl>
                                <dt><img src="<?php echo get_template_directory_uri().'/images/temp/'?>img_monthold02.png" />
                                    <a href="<?php echo $tag_mama2["link"]; ?>"><?php echo $tag_mama2["name"];?><span class="fa fa-caret-right"></span></a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li class="first"><a href="<?php echo $tag_m4["link"]; ?>"><?php echo $tag_m4["name"];?><span class="fa fa-caret-right"></span></a></li>
                                        <li><a href="<?php echo $tag_m5["link"]; ?>"><?php echo $tag_m5["name"];?><span class="fa fa-caret-right"></span></a></li>
                                        <li><a href="<?php echo $tag_m6["link"]; ?>"><?php echo $tag_m6["name"];?><span class="fa fa-caret-right"></span></a></li>
                                        <li class="last"><a href="<?php echo $tag_m7["link"]; ?>"><?php echo $tag_m7["name"];?><span class="fa fa-caret-right"></span></a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                        <?php
                            $tag_mama3 = filterTagBySlug("mama3",$tag_arr);
                            $tag_m8 = filterTagBySlug("m8",$tag_arr);
                            $tag_m9 = filterTagBySlug("m9",$tag_arr);
                            $tag_m10 = filterTagBySlug("m10",$tag_arr);
                            $tag_m11 = filterTagBySlug("m11",$tag_arr);
                        ?>
                        <li>
                            <dl>
                                <dt><img src="<?php echo get_template_directory_uri().'/images/temp/'?>img_monthold03.png" />
                                    <a href="<?php echo $tag_mama3["link"]; ?>"><?php echo $tag_mama3["name"];?><span class="fa fa-caret-right"></span></a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li class="first"><a href="<?php echo $tag_m8["link"]; ?>"><?php echo $tag_m8["name"];?><span class="fa fa-caret-right"></span></a></li>
                                        <li><a href="<?php echo $tag_m9["link"]; ?>"><?php echo $tag_m9["name"];?><span class="fa fa-caret-right"></span></a></li>
                                        <li><a href="<?php echo $tag_m10["link"]; ?>"><?php echo $tag_m10["name"];?><span class="fa fa-caret-right"></span></a></li>
                                        <li class="last"><a href="<?php echo $tag_m11["link"]; ?>"><?php echo $tag_m11["name"];?><span class="fa fa-caret-right"></span></a></li>
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
                            $tag_age1_2 = filterTagBySlug("age_1-5",$tag_arr);
                            $tag_age2 = filterTagBySlug("age_2",$tag_arr);
                            $tag_age3 = filterTagBySlug("age_3",$tag_arr);
                        ?>
                        <li class="first">
                            <dl>
                                <dt>
                                    <img src="<?php echo get_template_directory_uri() . '/images/temp/' ?>img_yearold01.png"/>
                                    <a href="<?php echo $tag_age1_2["link"]; ?>"><?php echo $tag_age1_2["name"];?>
                                        <span class="fa fa-caret-right"></span></a></dt>
                                <dd>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <img src="<?php echo get_template_directory_uri() . '/images/temp/' ?>img_yearold02.png"/>
                                    <a href="<?php echo $tag_age2["link"]; ?>"><?php echo $tag_age2["name"];?>
                                        <span class="fa fa-caret-right"></span></a></dt>
                                <dd>
                                </dd>
                            </dl>
                        </li>
                        <li class="last">
                            <dl>
                                <dt>
                                    <img src="<?php echo get_template_directory_uri() . '/images/temp/' ?>img_yearold03.png"/>
                                    <a href="<?php echo $tag_age3["link"]; ?>"><?php echo $tag_age3["name"];?>
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
                        $cate_deals = filterCateGoryBySlug("deals",$cate_arr);
                        $cate_eat = filterTagBySlug("eat",$cate_arr);
                        $cate_study = filterTagBySlug("study",$cate_arr);
                        $cate_ask = filterTagBySlug("ask",$cate_arr);
                        $cate_play = filterTagBySlug("play",$cate_arr);
                    ?>
                    <ul>
                        <li class="first">
                            <a href="<?php echo $cate_deals["link"]; ?>">
                                <div class="deals01">
                                    <dl class="item" style="height: 120px;">
                                        <dt>Obtained<span>to</span></dt>
                                        <dd>Catch the deals right now in season! Certainly fun pregnancy life, parenting life.<span class="fa fa-caret-right"></span></dd>
                                    </dl>
                                    <!-- /.deals --></div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $cate_eat["link"]; ?>">
                                <div class="eat01">
                                    <dl class="item" style="height: 120px;">
                                        <dt>食<span>べる</span></dt>
                                        <dd>食べることは、ママにもお子さまにも大切。知っておきたい食のポイントや栄養レシピ。<span class="fa fa-caret-right"></span></dd>
                                    </dl>
                                    <!-- /.deals --></div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $cate_study["link"]; ?>">
                                <div class="study01">
                                    <dl class="item" style="height: 120px;">
                                        <dt>学<span>ぶ</span></dt>
                                        <dd>胎児・赤ちゃんの成長、母乳や離乳食のことなど、学んでおきたい妊娠・育児の知識。<span class="fa fa-caret-right"></span></dd>
                                    </dl>
                                    <!-- /.deals --></div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $cate_ask["link"]; ?>">
                                <div class="ask01">
                                    <dl class="item" style="height: 120px;">
                                        <dt>尋<span>ねる</span></dt>
                                        <dd>妊娠中の栄養のこと、育児に関すること、Q&amp;Aはママに役立つ情報源。<span class="fa fa-caret-right"></span></dd>
                                    </dl>
                                    <!-- /.deals --></div>
                            </a>
                        </li>
                        <li class="last">
                            <a href="<?php echo $cate_play["link"]; ?>">
                                <div class="play01">
                                    <dl class="item" style="">
                                        <dt>動<span>く</span></dt>
                                        <dd>女性にとって大切な「心とからだの正しいケア」。適度な運動で気分転換とストレス発散を。<span class="fa fa-caret-right"></span></dd>
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
            <aside id="side">
                <section>
                    <header>

                        <h2 class="h2_basic01"><span class="fa fa-star"></span>今月の特集</h2>
                        <p><a href="/baby/club/tag/special/index.html"><span
                                        class="fa fa-caret-right"></span>過去の特集一覧</a></p>
                    </header>
                    <ul class="article_list01">
                        <li class="first">
                            <a href="/baby/step/mamadays/" target="_blank">
                                <div class="ph01">
                                    <img src="<?php echo get_template_directory_uri().'/images/temp/'?>mamadays.jpg" width="120" height="90"
                                         alt="ママといっしょに！はじめてのくるまぜクッキング">
                                    <!-- /.ph01 --></div>
                                <div class="txt01">
                                    <p><span class="cat_deals01">得する</span></p>
                                    <dl>
                                        <dt>ママといっしょに！はじめてのくるまぜクッキング</dt>
                                        <dd>お子さまも一緒にできる、簡単レシピ♪1歳～3歳頃までの幼児期に必要な栄養をまとめてサポートします。</dd>
                                    </dl>
                                    <!-- /.txt --></div>
                            </a>
                        </li>
                        <li class="last">
                            <a href="/baby/cp/cube-pon-2018aw/" target="_blank">
                                <div class="ph01">
                                    <img src="<?php echo get_template_directory_uri().'/images/temp/'?>cp_disney.jpg" width="120" height="90"
                                         alt="キューブでポン！毎日らくらく！キャンペーン">
                                    <!-- /.ph01 --></div>
                                <div class="txt01">
                                    <p><span class="cat_deals01">得する</span></p>
                                    <dl>
                                        <dt>キューブでポン！毎日らくらく！キャンペーン</dt>
                                        <dd>らくらくキューブを買って当てよう！東京ディズニーリゾート®チケットやグッズが当たるチャンス！</dd>
                                    </dl>
                                    <!-- /.txt --></div>
                            </a>
                        </li>
                    </ul>

                </section>
                <section>
                    <header>
                        <h2 class="h2_basic01"><span class="fa fa-star"></span>PICK&nbsp;UP</h2>
                        <p><a href="/baby/club/pickup/index.html"><span class="fa fa-caret-right"></span>一覧</a></p>
                    </header>
                    <ul class="article_list01">
                        <li class="first shopping">
                            <a href="/baby/club/category/deals/deals16.html">
                                <div class="ph01">
                                    <img src="<?php echo get_template_directory_uri().'/images/temp/'?>30d4da318d5b354dd49df6698e388a8516c573d4.png"
                                         width="120" height="90" alt="">
                                    <!-- /.ph01 --></div>
                                <div class="txt01">
                                    <p><span class="cat_deals01">得する</span></p>
                                    <dl>
                                        <dt>らくらくショッピング</dt>
                                        <dd>明治ベビー関連商品が、お得な価格で購入できるおすすめ通販サイト！</dd>
                                    </dl>
                                    <!-- /.txt --></div>
                            </a>
                        </li>


                        <li>
                            <a href="/baby/club/category/deals/deals15.html">
                                <div class="ph01">
                                    <img src="<?php echo get_template_directory_uri().'/images/temp/'?>1f33a7635aab7ecd355df6556da3be145452a40d.jpg"
                                         width="120" height="90" alt="">
                                    <!-- /.ph01 --></div>
                                <div class="txt01">
                                    <p><span class="cat_deals01">得する</span></p>
                                    <dl>
                                        <dt>キャンペーン・イベント情報</dt>
                                        <dd>子育て家族の幸せ応援キャンペーンやイベント情報。</dd>
                                    </dl>
                                    <!-- /.txt --></div>
                            </a>
                        </li>

                        <li>
                            <a href="/baby/club/category/study/knowledge/st_knowledge277.html">
                                <div class="ph01">
                                    <img src="<?php echo get_template_directory_uri().'/images/temp/'?>ba8ff15fb7857f36a9f2cee028a8de067e6e3102.png"
                                         width="120" height="90" alt="">
                                    <!-- /.ph01 --></div>
                                <div class="txt01">
                                    <p><span class="cat_study01">学ぶ</span></p>
                                    <dl>
                                        <dt>赤ちゃんがいる家庭の「防災対策」を考える</dt>
                                        <dd>万一の事態に備えて、ご家庭の防災グッズ確認や防災対策をしておきましょう。</dd>
                                    </dl>
                                    <!-- /.txt --></div>
                            </a>
                        </li>

                        <li>
                            <a href="/baby/club/category/study/mom_advice/st_mom_advice213.html">
                                <div class="ph01">
                                    <img src="<?php echo get_template_directory_uri().'/images/temp/'?>b0968424ed322097706ff221ff443e1de13c9cd5.png"
                                         width="120" height="90" alt="">
                                    <!-- /.ph01 --></div>
                                <div class="txt01">
                                    <p><span class="cat_study01">学ぶ</span></p>
                                    <dl>
                                        <dt>ぐずる赤ちゃんを、泣き止ませる方法</dt>
                                        <dd>赤ちゃんはぐずったり泣いたりするものですが、ママとしては泣き止んで欲しいもの。先輩ママたちに聞いた、ぐずる赤ちゃんを、泣き止ませる方法を紹介します。
                                        </dd>
                                    </dl>
                                    <!-- /.txt --></div>
                            </a>
                        </li>

                        <li>
                            <a href="/baby/club/category/play/pregnancy_gym/pl_pregnancy_gym37.html">
                                <div class="ph01">
                                    <img src="<?php echo get_template_directory_uri().'/images/temp/'?>9922ccbd02f3e7fa4a1a1ca71986b378e02a33e3.png"
                                         width="120" height="90" alt="">
                                    <!-- /.ph01 --></div>
                                <div class="txt01">
                                    <p><span class="cat_play01">動く</span></p>
                                    <dl>
                                        <dt>妊婦体操って？</dt>
                                        <dd>
                                            妊婦体操は、安定期に入った妊娠中の女性に適した運動で、妊婦体操の基本である3つの要素となる「正しい姿勢」「リラックス」「呼吸」を身につけることによって、上手な出産ができるようになります。
                                        </dd>
                                    </dl>
                                    <!-- /.txt --></div>
                            </a>
                        </li>

                        <li>
                            <a href="/baby/club/category/play/after_maternity_gym/pl_after_maternity_gym52.html">
                                <div class="ph01">
                                    <img src="<?php echo get_template_directory_uri().'/images/temp/'?>c2c83b23e36bb396895eb6a999efa85332294ba9.png"
                                         width="120" height="90" alt="">
                                    <!-- /.ph01 --></div>
                                <div class="txt01">
                                    <p><span class="cat_play01">動く</span></p>
                                    <dl>
                                        <dt>すべり台のポーズ　産後5日目～</dt>
                                        <dd>すべり台のポーズは大臀筋や骨盤底筋をひきしめます。 尿漏れ予防の効果もあります。</dd>
                                    </dl>
                                    <!-- /.txt --></div>
                            </a>
                        </li>

                        <li>
                            <a href="/baby/club/category/ask/babyfood_qa/as_babyfood_qa148.html">
                                <div class="ph01">
                                    <img src="<?php echo get_template_directory_uri().'/images/temp/'?>7a1fb0b1eebaa52e290e5032da0ed6afa6b055bf.jpg"
                                         width="120" height="90" alt="">
                                    <!-- /.ph01 --></div>
                                <div class="txt01">
                                    <p><span class="cat_ask01">尋ねる</span></p>
                                    <dl>
                                        <dt>3回食はいつから？</dt>
                                        <dd>2回食が定着し、食欲が安定していれば始めます。食べられる食品数も増え、食事量も増えてきていることが目安です。</dd>
                                    </dl>
                                    <!-- /.txt --></div>
                            </a>
                        </li>

                        <li>
                            <a href="/baby/club/category/ask/milk_qa/as_milk_qa184.html">
                                <div class="ph01">
                                    <img src="<?php echo get_template_directory_uri().'/images/temp/'?>dd3e977de62b35bda927f760e7fad54f2980a5b9.jpg"
                                         width="120" height="90" alt="">
                                    <!-- /.ph01 --></div>
                                <div class="txt01">
                                    <p><span class="cat_ask01">尋ねる</span></p>
                                    <dl>
                                        <dt>ミルクはどのくらいの間隔で飲ませるの？</dt>
                                        <dd>
                                            月齢や飲む量によって違いますが、3時間以上あけるようにしましょう。特に日中はリズムを崩さないように与え、しっかりとおなかをすかせてから飲ませ、なるべく間隔をあけるようにします。
                                        </dd>
                                    </dl>
                                    <!-- /.txt --></div>
                            </a>
                        </li>

                        <li>
                            <a href="/baby/club/category/eat/point/ea_point268.html">
                                <div class="ph01">
                                    <img src="<?php echo get_template_directory_uri().'/images/temp/'?>ab72e608edc696b36edb766642f720f9fa70c4e7.jpg"
                                         width="120" height="90" alt="">
                                    <!-- /.ph01 --></div>
                                <div class="txt01">
                                    <p><span class="cat_eat01">食べる</span></p>
                                    <dl>
                                        <dt>離乳食に炊飯器を活用しよう</dt>
                                        <dd>
                                            離乳食作りのために、毎回お鍋を使ったり洗うのは大変なもの。しかし、一工夫するだけで炊飯器で簡単に離乳食が作れることをご存知ですか？ここでは先輩ママ達による炊飯器を使った簡単離乳食レシピをご紹介しています。
                                        </dd>
                                    </dl>
                                    <!-- /.txt --></div>
                            </a>
                        </li>

                        <li class="last">
                            <a href="/baby/club/category/eat/point/ea_point287.html">
                                <div class="ph01">
                                    <img src="<?php echo get_template_directory_uri().'/images/temp/'?>99a9283cf619d9692a9ee215c61210be855b5603.jpg"
                                         width="120" height="90" alt="">
                                    <!-- /.ph01 --></div>
                                <div class="txt01">
                                    <p><span class="cat_eat01">食べる</span></p>
                                    <dl>
                                        <dt>離乳食に使う野菜、もっとも人気が高いのは？</dt>
                                        <dd>「うちの離乳食、今のままで本当に良いのか不安…」「これから離乳食に入るけど、どんな野菜を与えればいいの？」
                                            そんなママたちの悩みを解決すべく、ほほえみクラブでアンケートを実施しました。
                                            ご協力いただいた皆様のお蔭でリアルな離乳食事情を垣間見ることができました。ぜひ今後の参考にしてみてくださいね。
                                        </dd>
                                    </dl>
                                    <!-- /.txt --></div>
                            </a>
                        </li>
                    </ul>
                </section>

            </aside>
            <!-- /#contents --></div>
        <!-- /#wrapper --></div>

<?php
get_footer();
