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
                        </div>

                        <div class="post_t">
                            <div class="img_w">
                                <img src="<?php the_field('p_thumb'); ?>">
                            </div>
                            <div class="prefecture <?php the_field('p_type'); ?>">
                                <?php the_field('p_prefecture'); ?>
                            </div>

                        </div>

                        <div class="post_name">
                            <?php the_title(); ?>
                        </div>

                        <div class="summary_points">
                            <h3><span>SUMMARY POINTS</span>各プログラムの特色</h3>
                            <p><?php the_field('summary_points'); ?></p>
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
</main>




<?php get_footer(); ?>