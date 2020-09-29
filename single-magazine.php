<?php 
/*
Template Name: Magazine
*/
get_header(); ?>

<?php if( !post_password_required( $post->ID ) ) : ?>
<main>
    <section id="m_v">
        <div class="w_box"></div>
        <div class="c_wrap">
            <div class="thum">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="title_area">
                <h2>
                    <?php the_title(); ?>
                </h2>
            </div>

        </div>
    </section>

    <section id="outline">
        <div class="c_wrap">
            
        </div>

    </section>

    <section id="contents">
        <?php the_content(); ?>
    </section>
</main>

<?php else: ?>
<div class="custom_password_aria">
    <?php echo get_the_password_form(); ?>
</div>
<?php endif; ?>



<?php get_footer(); ?>