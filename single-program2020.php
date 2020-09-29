<?php 
/*
Template Name: Program 2020
Template Post Type: program2020
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
                <div class="<?php the_field('p_status'); ?>">
                    <ul>
                        <li>公募中</li>
                        <li>公募終了</li>
                        <li>これから</li>
                    </ul>
                </div>
                <h2>
                    <?php the_title(); ?>
                </h2>
            </div>
            <div class="summary_points">
                <h3>｜SUMMARY POINTS｜<span>各プログラムの特色</span></h3>
                <div class="s_p_d">
                    <?php $summary_points = get_field('summary_points');?>
                    <?php if(empty($summary_points)):?>

                    <?php else:?>
                    <?php echo $summary_points; ?>
                    <?php endif;?>
                </div>
            </div>
            <div class="p_team">
                <?php $p_team = get_field('p_team');?>
                <?php if(empty($p_team)):?>

                <?php else:?>
                <?php echo $p_team; ?>
                <?php endif;?>
            </div>

            <?php $p_credit = get_field('p_credit');?>
            <?php if(empty($p_credit)):?>

            <?php else:?>
            <div class="p_credit">
                <?php echo $p_credit; ?>
            </div>
            <?php endif;?>

        </div>
    </section>
    <section id="outline">
        <div class="c_wrap">

            <div class="outline_l">
                <?php $p_description = get_field('p_description');?>
                <?php if(empty($p_description)):?>

                <?php else:?>
                <?php echo $p_description; ?>
                <?php endif;?>
            </div>

            <div class="date_place">
                <div class="date flex">
                    <h4 class="fade">日程</h4>
                    <div class="p_date">

                        <?php $p_date_1 = get_field('p_date_1');?>
                        <?php if(empty($p_date_1)):?>

                        <?php else:?>
                        <p class="box_1">
                            <?php echo $p_date_1; ?>
                        </p>
                        <?php endif;?>


                        <?php $p_date_2 = get_field('p_date_2');?>
                        <?php if(empty($p_date_2)):?>

                        <?php else:?>
                        <p class="box_2">
                            <?php echo $p_date_2; ?>
                        </p>
                        <?php endif;?>


                        <?php $p_date_3 = get_field('p_date_3');?>
                        <?php if(empty($p_date_3)):?>

                        <?php else:?>
                        <p class="box_3">
                            <?php echo $p_date_3; ?>
                        </p>
                        <?php endif;?>

                    </div>
                </div>

                <div class="place flex">
                    <h4 class="fade">会場</h4>
                    <div class="p_place">

                        <div class="box_1">
                            <?php $p_place_1 = get_field('p_place_1');?>
                            <?php if(empty($p_place_1)):?>

                            <?php else:?>
                            <p class="place">
                                <?php echo $p_place_1; ?>
                            </p>
                            <?php endif;?>

                            <?php $p_address_1 = get_field('p_address_1');?>
                            <?php if(empty($p_address_1)):?>

                            <?php else:?>
                            <p class="address">
                                <?php echo $p_address_1; ?>
                            </p>
                            <?php endif;?>

                            <?php $p_map_1 = get_field('p_map_1');?>
                            <?php if(empty($p_map_1)):?>

                            <?php else:?>
                            <div class="map">
                                <a href="<?php echo $p_map_1; ?>" target="_blank">MAP ></a>
                            </div>
                            <?php endif;?>
                        </div>

                        <div class="box_2">
                            <?php $p_place_2 = get_field('p_place_2');?>
                            <?php if(empty($p_place_2)):?>

                            <?php else:?>
                            <p class="place">
                                <?php echo $p_place_2; ?>
                            </p>
                            <?php endif;?>

                            <?php $p_address_2 = get_field('p_address_2');?>
                            <?php if(empty($p_address_2)):?>

                            <?php else:?>
                            <p class="address">
                                <?php echo $p_address_2; ?>
                            </p>
                            <?php endif;?>

                            <?php $p_map_2 = get_field('p_map_2');?>
                            <?php if(empty($p_map_2)):?>

                            <?php else:?>
                            <div class="map">
                                <a href="<?php echo $p_map_2; ?>" target="_blank">MAP ></a>
                            </div>
                            <?php endif;?>
                        </div>

                        <div class="box_3">
                            <?php $p_place_3 = get_field('p_place_3');?>
                            <?php if(empty($p_place_3)):?>

                            <?php else:?>
                            <p class="place">
                                <?php echo $p_place_3; ?>
                            </p>
                            <?php endif;?>

                            <?php $p_address_3 = get_field('p_address_3');?>
                            <?php if(empty($p_address_3)):?>

                            <?php else:?>
                            <p class="address">
                                <?php echo $p_address_3; ?>
                            </p>
                            <?php endif;?>

                            <?php $p_map_3 = get_field('p_map_3');?>
                            <?php if(empty($p_map_3)):?>

                            <?php else:?>
                            <div class="map">
                                <a href="<?php echo $p_map_3; ?>" target="_blank">MAP ></a>
                            </div>
                            <?php endif;?>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>
    <section id="overview">
        <div class="c_wrap">
            <div class="o_box flex">
                <?php $p_name_1 = get_field('p_name_1');?>
                <?php if(empty($p_name_1)):?>

                <?php else:?>
                <div class="p_name_1 flex_items box_1">
                    <?php echo $p_name_1; ?>
                    <p>/募集概要</p>
                </div>
                <?php endif;?>

                <?php $p_name_2 = get_field('p_name_2');?>
                <?php if(empty($p_name_2)):?>

                <?php else:?>
                <div class="p_name_2 flex_items box_2">
                    <?php echo $p_name_2; ?>
                    <p>/募集概要</p>
                </div>
                <?php endif;?>

                <?php $p_name_3 = get_field('p_name_3');?>
                <?php if(empty($p_name_3)):?>

                <?php else:?>
                <div class="p_name_3 flex_items box_3">
                    <?php echo $p_name_3; ?>
                    <p>/募集概要</p>
                </div>
                <?php endif;?>

                <?php $p_name_4 = get_field('p_name_4');?>
                <?php if(empty($p_name_4)):?>

                <?php else:?>
                <div class="p_name_4 flex_items box_4">
                    <?php echo $p_name_4; ?>
                    <p>/募集概要</p>
                </div>
                <?php endif;?>

                <?php $p_name_5 = get_field('p_name_5');?>
                <?php if(empty($p_name_5)):?>

                <?php else:?>
                <div class="p_name_5 flex_items box_5">
                    <?php echo $p_name_5; ?>
                    <p>/募集概要</p>
                </div>
                <?php endif;?>
            </div>

            <div class="contents">
                <?php the_content(); ?>
                <?php include("inc/single-program/box_1.php"); ?>
                <?php include("inc/single-program/box_2.php"); ?>
                <?php include("inc/single-program/box_3.php"); ?>
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