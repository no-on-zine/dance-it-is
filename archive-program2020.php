<?php
get_header(); ?>

<main>
    <section id="m_v">
        <div class="w_box"></div>
        <div class="c_wrap">
            <div class="thum">
                <img src="<?php bloginfo('template_url'); ?>/images/page/pr_m_v.jpg" alt="">
            </div>
        </div>
        <div class="w_box title">プログラム / スケジュール</div>
    </section>

    <section id="about_project">
        <div class="c_wrap">
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
        </div>
    </section>

    <section id="p_list">
        <div class="c_wrap">

            <div class="list">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post">

                    <a class="post_w" href="<?php the_permalink() ?>">
                        <div class="post_h">
                            <div class="p_status <?php the_field('p_status'); ?>">
                                <ul>
                                    <li>公募中</li>
                                    <li>公募終了</li>
                                    <li>これから</li>
                                </ul>
                            </div>
                            <div class="level">
                                <img src="<?php the_field('p_level'); ?>">
                            </div>
                            <?php if(get_field('p_remote')): ?>
                            <div class="remote">
                                <img src="<?php bloginfo('template_url'); ?>/images/page/remote.png" alt="">
                            </div>
                            <?php endif; ?>

                        </div>

                        <div class="post_t">
                            <div class="img_w">
                                <?php the_post_thumbnail('single_tmb'); ?>
                            </div>
                            <div class="prefecture <?php the_field('p_type'); ?>">
                                <?php the_field('p_prefecture'); ?>
                            </div>
                            <?php if(get_field('p_credit_t')): ?>
                            <div class="credit">
                                <span><?php the_field('p_credit_t'); ?></span>
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="post_name">
                            <?php the_title(); ?>
                        </div>

                        <div class="summary_points">
                            <h3><span>SUMMARY POINTS</span>プログラムの特色</h3>
                            <ul>
                                <li><?php the_field('summary_points_1'); ?></li>
                                <li><?php the_field('summary_points_2'); ?></li>
                                <li><?php the_field('summary_points_3'); ?></li>
                            </ul>
                        </div>
                    </a>
                    <div class="team">
                        <?php the_field('p_team'); ?>
                    </div>
                </div>

                <?php endwhile; else: ?>
                <p class="no_post">記事はありません。</p>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <section id="schedule">
        <div class="c_wrap">
            <h2>SCHEDULE</h2>
            <div class="img_w">
                <img src="<?php bloginfo('template_url'); ?>/images/page/schedule.jpg?<?php echo date("YmdHis");?>"
                    alt="">
            </div>
        </div>
    </section>
</main>




<?php get_footer(); ?>