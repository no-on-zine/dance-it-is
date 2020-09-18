<?php //Template Name: 2020トップページ
get_header(); ?>

<main>
    <section id="m_v">
        <div class="w_box"></div>
        <div class="c_wrap">
            <p class="text">コンテンポラリーダンス・プラットフォームを活用した振付家育成事業</p>
            <div class="slider">
                <?php echo do_shortcode('[metaslider id="29"]'); ?>
                <div class="m_v_text">
                    <img src="<?php bloginfo('template_url'); ?>/images/top/m_v_text.png" alt="HOW TO CULTIVATE CHOREOGRAPHER? フリツケカをイクセイする?">
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>