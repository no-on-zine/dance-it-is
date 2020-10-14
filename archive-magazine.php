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
            <div class="w_box title">WEBマガジン</div>
        </div>
    </section>

    <div class="magazine_w">

        <section class="title_area">
            <div class="c_wrap">
                <h2>
                    <img src="<?php bloginfo('template_url'); ?>/images/common/magazine_h2.png">
                </h2>
                <p>
                    日本でコンテンポラリーダンスの振付家を育成するとはどういうことなのか？振付家の役割や、ダンスが社会に求められることは？？
                    ダンスと接点を持つ多ジャンルの研究者やディレクター、アーティストなどの視点から、コンテンポラリーダンスを読み解くマガジン。
                </p>
            </div>
        </section>

        <section id="contents">
            <div class="c_wrap flex">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <a class="post_w" href="<?php the_permalink() ?>">
                    <div class="i_w">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="tarm">
                        <?php $terms = get_the_terms($post->ID, 'magazine_category');
                        foreach($terms as $term){ 
                        $term_name = $term->name; echo $term_name; break;
                        }; ?>
                    </div>

                    <h3>
                        <?php the_title_attribute(); ?>
                    </h3>

                    <div class="border"></div>

                    <div class="date">
                        <?php echo get_the_date('Y.n.j'); ?>
                    </div>
                </a>

                <?php endwhile; else: ?>
                <p class="no_post">記事はありません。</p>
                <?php endif; ?>
            </div>
        </section>

        <section class="cat">
            <div class="c_wrap">
                <h4>CATEGORY</h4>
                <ul>
                    <?php
                $terms = get_terms('magazine_category');
                foreach ( $terms as $term ) {
                echo '<li>'.'<a href="'.get_term_link($term).'">'.$term->name.'</a>'.'</li>';
                }
                ?>
                </ul>
            </div>
        </section>

        <section class="tag">
            <div class="c_wrap">
                <h4>TAGS</h4>
                <ul>
                    <?php
                $terms = get_terms('magazine_tag');
                foreach ( $terms as $term ) {
                echo '<li>'.'<a href="'.get_term_link($term).'">'.$term->name.'</a>'.'</li>';
                }
                ?>
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