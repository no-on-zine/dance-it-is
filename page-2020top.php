<?php //Template Name: 2020トップページ
get_header(); ?>

<main>
    <section id="m_v">
        <div class="c_wrap">
            <p class="text">コンテンポラリーダンス・プラットフォームを活用した振付家育成事業</p>
            <div class="slider">
                <?php echo do_shortcode('[metaslider id="29"]'); ?>
            </div>
        </div>
    </section>
    <section id="news">
        <div class="c_wrap">
            <div class="flex cf">
                <div class="news_h">
                    <h2>NEWS｜</h2>
                </div>
                <div id="ticker-fade" class="ticker">
                    <ul>
                        <?php query_posts('post_type=news&posts_per_page=4'); ?>
                        <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title_attribute(); ?>
                            </a>
                        </li>

                        <?php endwhile; endif; ?>
                    </ul>
                </div>
            </div>
            <div class="more">
                <a href="<?php echo home_url() ?>/news">
                    <img src="<?php bloginfo('template_url'); ?>/images/top/more.png" alt="MORE">
                </a>
            </div>
        </div>
    </section>
    <section id="about_project" class="slide_fade10">
        <div class="c_wrap">
            <div class="c_text">
                <h2>ABOUT PROJECT</h2>
                <p>
                    2019年、新しい時代の始まりに、新しいコンテンポラリーダンスの人材育成プロジェクトを開始しました。
                    ダンスのアーティストが生まれ、育つ環境、新しいダンス作品が生み出される環境を全国のダンスのオーガナイザー（運営団体）が核となり、互いに連携しながら、形創っていきます。
                    ​日本のあらゆる場所が起点となり、他の分野や地域の公共団体やホールなどと協働し、未来に向けて、ダンスの今を切り開いていきたいと思います。
                </p>
                <div class="detail">
                    <a href="<?php echo home_url() ?>/dii2020/about2020">詳しく見る ></a>
                </div>
            </div>
        </div>
    </section>
    <section id="platform" class="slide_fade10">
        <div class="c_wrap">
            <div class="flex">
                <div class="c_text">
                    <h2>PLATFORM</h2>
                    <p>
                        2020年度は、全国10のプラットフォームによる振付家育成プログラムが、8月―3月まで実施されます。また、前後にキックオフ・ミーティング（7月）、報告会＠京都芸術センター（2020年3月）を行います。様々な形で未来について話し合う場、継続するための場を設けています。
                    </p>
                    <div class="detail">
                        <a href="<?php echo home_url() ?>/dii2020/platform2020">一覧を見る ></a>
                    </div>
                    <div class="detail">
                        <a href="<?php echo home_url() ?>/program2020#schedule">年間スケジュールを見る ></a>
                    </div>
                    <div class="bold">
                        <h3>プラットフォームとは</h3>
                        <p>日本でコンテンポラリーダンスの振付家育成プログラムを企画・運営する団体・拠点</p>
                    </div>

                </div>
                <div class="p_list">
                    <div class="p_list_items">
                        <h3><span>Region Platform</span>地域プラットフォーム</h3>
                        <div class="i_w">
                            <div class="item">
                                <a href="<?php echo home_url() ?>/program2020/hcd2020/">
                                    <h4><span class="red">北海道</span>北海道コンテンポラリーダンス普及委員会</h4>
                                    <p>Sapporo Choreo（サッポロ・コレオ）振付家養成講座</p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="<?php echo home_url() ?>/program2020/dh4422_2020/">
                                    <h4><span class="red">名古屋</span>ダンスハウス黄金4442</h4>
                                    <p>レジデンスアーティスト育成事業2021</p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="<?php echo home_url() ?>/program2020/dc2020/">
                                    <h4><span class="red">城　崎</span>Dacne Camp Project</h4>
                                    <p>Dance Camp vol.4＆ダイアローグ・ワークショップ
                                        <br>by ディーン・モス＆余越保子</p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="<?php echo home_url() ?>/program2020/db2020/">
                                    <h4><span class="red">神　戸</span>NPO法人ダンスボックス</h4>
                                    <p>DANCE ARTIST VIEW2020「セルフカルチベート企画」</p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="<?php echo home_url() ?>/program2020/fh2020/">
                                    <h4><span class="red">広　島</span>FREE HEARTS</h4>
                                    <p>ダンスアートプロジェクト！！</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="p_list_items">
                        <h3><span>Creative Partner</span>クリエイティブパートナー</h3>
                        <div class="i_w">
                            <div class="item">
                                <a href="<?php echo home_url() ?>/program2020/c32020/">
                                    <h4><span class="blue">札幌・京都</span>C³ / Contact Choreograph Crossing</h4>
                                    <p>建築とコンタクト（京都‒札幌）</p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="<?php echo home_url() ?>/program2020/codex2020/">
                                    <h4><span class="blue">福　岡</span>山崎広太／フルイドハグハグ、NPO法人コデックス</h4>
                                    <p>わたしと身体の緩やかなダンス革命 in 福岡</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="p_list_items">
                        <h3><span>Creative Study</span>クリエイティブスタディ</h3>
                        <div class="i_w">
                            <div class="item">
                                <a href="<?php echo home_url() ?>/program2020/dhs2020/">
                                    <h4><span class="green">ダンスヒストリー</span>ダンスヒストリー・スタディーズ</h4>
                                    <p>ダンサー・振付家・制作者に「役に立つ」バレエ・ダンス史</p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="<?php echo home_url() ?>/program2020/na2020/">
                                    <h4><span class="green">ダンスメディア</span>一般社団法人ダンス・ニッポン・アソシエイツ</h4>
                                    <p>『ダンスを撮る！』-第4回ダンス映像撮影ワークショップ-</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="p_list_items">
                        <h3><span>performance</span>パフォーマンス</h3>
                        <div class="i_w">
                            <div class="item">
                                <a href="<?php echo home_url() ?>/program2020/kyoto2020/">
                                    <h4><span class="yellow">京　都</span>ダンスでいこう2020運営チーム</h4>
                                    <p>若手振付家のためのダンス公演（仮）</p>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section>
    <section id="program" class="slide_fade10">
        <div class="c_wrap">
            <div class="steps">
                <div class="c_text slide_fade10">
                    <h2>PROGRAM</h2>
                    <p>
                        募集対象となる振付家の活動実績等の目安をステップ１〜５に表しました。
                    </p>
                </div>
                <div class="dc slide_fade10">
                    <ul>
                        <li>
                            <span>STEP 1</span>初めてダンスを創る事にチャレンジする（ダンサーとしての経験値は別）
                        </li>
                        <li>
                            <span>STEP 2</span>ギャラリーやライブハウス等で自作を上演した事がある（即興も含む）
                        </li>
                        <li>
                            <span>STEP 3</span>これまでに15分以上の劇場作品を1作品以上創作し発表している
                        </li>
                        <li>
                            <span>STEP 4</span>これまでに20分以上の劇場作品を2作品以上創作し発表している
                        </li>
                        <li>
                            <span>STEP 5</span>30分以上の劇場作品のレパートリーが1つ以上あり、かつ、他者に振付した作品を発表している
                        </li>
                        <li>
                            <span>ALL</span>コンテンポラリーダンスに興味のある全ての人(ダンス経験が無くても参加できます)
                        </li>
                    </ul>
                </div>
                <div class="detail">
                    <a href="<?php echo home_url() ?>/program2020">一覧を見る ></a>
                </div>
                <div class="detail">
                    <a href="<?php echo home_url() ?>/program2020#schedule">年間スケジュールを見る ></a>
                </div>
            </div>
            <div class="p_detail">
                <div class="summary_point">
                    <h3>SUMMARY POINTS｜</h3>
                    <ul>
                        <li class="s_0 blank">...</li>
                        <li class="s_1">
                            <?php echo get_field ('summary_points_1',293);?>
                            <?php echo get_field ('summary_points_2',293);?>
                            <?php echo get_field ('summary_points_3',293);?>
                        </li>
                        <li class="s_2">
                            <?php echo get_field ('summary_points_1',739);?>
                            <?php echo get_field ('summary_points_2',739);?>
                            <?php echo get_field ('summary_points_3',739);?>
                        </li>
                        <li class="s_3">
                            <?php echo get_field ('summary_points_1',893);?>
                            <?php echo get_field ('summary_points_2',893);?>
                            <?php echo get_field ('summary_points_3',893);?>
                        </li>
                        <li class="s_4">
                            <?php echo get_field ('summary_points_1',848);?>
                            <?php echo get_field ('summary_points_2',848);?>
                            <?php echo get_field ('summary_points_3',848);?>
                        </li>
                        <li class="s_5">
                            <?php echo get_field ('summary_points_1',747);?>
                            <?php echo get_field ('summary_points_2',747);?>
                            <?php echo get_field ('summary_points_3',747);?>
                        </li>
                        <li class="s_6">
                            <?php echo get_field ('summary_points_1',774);?>
                            <?php echo get_field ('summary_points_2',774);?>
                            <?php echo get_field ('summary_points_3',774);?>
                        </li>
                        <li class="s_7">
                            <?php echo get_field ('summary_points_1',876);?>
                            <?php echo get_field ('summary_points_2',876);?>
                            <?php echo get_field ('summary_points_3',876);?>
                        </li>
                        <li class="s_8">
                            <?php echo get_field ('summary_points_1',840);?>
                            <?php echo get_field ('summary_points_2',840);?>
                            <?php echo get_field ('summary_points_3',840);?>
                        </li>
                        <li class="s_9">
                            <?php echo get_field ('summary_points_1',886);?>
                            <?php echo get_field ('summary_points_2',886);?>
                            <?php echo get_field ('summary_points_3',886);?>
                        </li>
                        <li class="s_10">
                            <?php echo get_field ('summary_points_1',1555);?>
                            <?php echo get_field ('summary_points_2',1555);?>
                            <?php echo get_field ('summary_points_3',1555);?>
                        </li>
                    </ul>
                </div>

                <div class="flex">
                    <?php query_posts('post_type=program2020&posts_per_page=10'); ?>
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>

                    <?php if(has_post_thumbnail()): ?>
                    <div class="flex_items">
                        <div class="img_w s_<?php echo loopNumber(); ?>_hover">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('top_tmb'); ?>
                                <img class="h_img" src="<?php bloginfo('template_url'); ?>/images/top/hover.png" alt="">
                            </a>
                        </div>
                        <p class="title"><?php the_title(); ?></p>
                        <div class="level">
                            <img src="<?php the_field('p_level'); ?>">
                        </div>
                        <div class="p_status <?php the_field('p_status'); ?>">
                            <ul>
                                <li>公募中</li>
                                <li>公募終了</li>
                                <li>これから</li>
                            </ul>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endwhile; endif; ?>
                </div>

            </div>
    </section>

    <section id="magazine">
        <div class="c_wrap">
            <div class="flex">
                <div class="left">
                    <h2>
                        <img src="<?php bloginfo('template_url'); ?>/images/top/top_magazine_01.png" alt="Magazine">
                    </h2>
                    <h3>
                        <img src="<?php bloginfo('template_url'); ?>/images/top/top_magazine_02.png"
                            alt="CHOREOGRAPHER　ダンスを書く仕事！？">
                    </h3>
                    <p>
                        日本でコンテンポラリーダンスの振付家を育成するとはどういうことなのか？振付家の役割や、ダンスが社会に求められることは？？
                        ダンスと接点を持つ多ジャンルの研究者やディレクター、アーティストなどの視点から、コンテンポラリーダンスを読み解くマガジン。
                    </p>
                </div>
                <div class="right">
                    <div class="magazine_w">
                        <?php query_posts('post_type=magazine&posts_per_page=2'); ?>
                        <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="border"></div>
                            <div class="date">
                                <?php echo get_post_time('Y.n.j D'); ?>
                            </div>
                            <div class="i_w">
                                <?php the_post_thumbnail('top_tmb'); ?>
                            </div>
                            <div class="title">
                                <?php the_title_attribute(); ?>
                            </div>
                        </a>
                        <?php endwhile; endif; ?>
                    </div>
                    <div class="more">
                        <a href="<?php echo home_url() ?>/magazine">
                            <img src="<?php bloginfo('template_url'); ?>/images/top/more_w.png" alt="MORE">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="instagram" class="slide_fade10">
        <div class="c_wrap">
            <div class="c_text">
                <h2>GALLERY</h2>
            </div>
            <?php echo do_shortcode('[instagram feed="13"]'); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>