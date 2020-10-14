<?php 
get_header(); ?>

<?php if( !post_password_required( $post->ID ) ) : ?>
<main>
    <section id="m_v">
        <div class="c_wrap">
            <div class="thum">
                <img src="<?php bloginfo('template_url'); ?>/images/page/magazine_mv_01.jpg?<?php echo date("YmdHis");?>"
                    alt="Magazine" title="Magazine">
            </div>
            <div class="w_box title">ニュース</div>
        </div>
    </section>

    <div class="magazine_w">

        <section class="title_area">
            <div class="c_wrap">
                <h2 class="archives">
                    NEWS
                </h2>
            </div>
        </section>



        <section id="contents">
            <div class="c_wrap">
                <ul>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li>
                        <div class="date">
                            <?php echo get_the_date('Y.n.j'); ?>
                        </div>
                        <a class="post_w archives" href="<?php the_permalink() ?>">
                            <?php the_title_attribute(); ?>
                        </a>
                    </li>
                    <?php endwhile; else: ?>
                    <p class="no_post">記事はありません。</p>
                    <?php endif; ?>
                </ul>
            </div>
        </section>


    </div>
</main>

<?php else: ?>
<div class="custom_password_aria">
    <?php echo get_the_password_form(); ?>
</div>
<?php endif; ?>



<?php get_footer(); ?>