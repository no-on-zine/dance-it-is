<?php 
/*
Template Name: Magazine
*/
get_header(); ?>

<?php if( !post_password_required( $post->ID ) ) : ?>
<main>
    <section id="m_v">
        <div class="c_wrap">
            <div class="thum">
                <img src="<?php bloginfo('template_url'); ?>/images/page/magazine_mv_02.jpg?<?php echo date("YmdHis");?>"
                    alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
            </div>
            <div class="w_box title">WEBマガジン</div>
        </div>
    </section>

    <div class="magazine_w">
        <section class="title_area">
            <div class="c_wrap">
                <div class="tarm">
                    <?php $terms = get_the_terms($post->ID, 'magazine_category');
                    foreach($terms as $term){ 
                    $term_name = $term->name; echo $term_name; break;
                    }; ?>
                </div>
                <h2>
                    <?php the_title(); ?>
                </h2>
                <div class="border"></div>

                <div class="h_author">
                    <?php $h_author = get_field('h_author');?>
                    <?php if(empty($h_author)):?>
                    <?php else:?>
                    <?php echo $h_author; ?>
                    <?php endif;?>
                </div>
                <div class="date">
                    <?php echo get_the_date('Y.n.j'); ?>
                </div>
            </div>
        </section>

        <section id="contents">
            <div class="c_wrap">
                <div class="wp_contents">
                    <?php the_content(); ?>
                </div>
                <div class="f_a_p">
                    <div class="f_author_photo">
                        <?php $f_author_photo = get_field('f_author_photo');?>
                        <?php if(empty($f_author_photo)):?>
                        <?php else:?>
                        <div class="i_w">
                            <img src="<?php echo $f_author_photo; ?>">
                        </div>
                        <?php endif;?>
                    </div>
                    <div class="f_author">
                        <?php $f_author = get_field('f_author');?>
                        <?php if(empty($f_author)):?>
                        <?php else:?>
                        <h4>
                            <?php echo $f_author; ?>
                            <?php $f_author_e = get_field('f_author_e');?>
                            <?php if(empty($f_author_e)):?>
                            <?php else:?>
                            <span>
                                <?php echo $f_author_e; ?>

                            </span>
                            <?php endif;?>
                        </h4>
                        <?php endif;?>
                        <div class="f_author_p">
                            <?php $f_author_p = get_field('f_author_p');?>
                            <?php if(empty($f_author_p)):?>
                            <?php else:?>
                            <p><?php echo $f_author_p; ?></p>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
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

        <section class="share">
            <div class="c_wrap">
                <h4>SHARE</h4>
                <ul>
                    <li>
                        <a href="http://twitter.com/share?text=<?php echo urlencode(the_title_attribute('echo=0')); ?>&url=<?php the_permalink(); ?>&hashtags=ダンスでいこう"
                            rel="nofollow" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/images/common/tw.png" alt="Twitter"
                                title="Twitter">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"
                            target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/images/common/fb.png" alt="Facebook"
                                title="Facebook">
                        </a>
                    </li>
                    <li>
                        <a href="https://social-plugins.line.me/lineit/share?url=<?php echo urlencode(get_permalink()); ?>"
                            target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/images/common/line.png" alt="Lineで送る"
                                title="Lineで送る">
                        </a>
                    </li>
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