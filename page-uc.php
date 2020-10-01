<?php //Template Name: 準備中
get_header(); ?>

<?php if( !post_password_required( $post->ID ) ) : ?>
<main>
    <section id="m_v">
        <div class="w_box"></div>
        <div class="c_wrap">
            <div class="thum">
                <img src="<?php bloginfo('template_url'); ?>/images/page/pr_m_v.jpg" alt="">
            </div>
            <div class="w_box title"></div>
        </div>
    </section>
    <section id="about_project">
        <div class="c_wrap">
            <div class="c_text slide_fade10">
                <p class="f16">
                    このページはただいま準備中です。
                </p>
            </div>
        </div>
    </section>

</main>
<?php else: ?>
<div class="custom_password_aria">
    <?php echo get_the_password_form(); ?>
</div>
<?php endif; ?>

<?php get_footer(); ?>