<?php 
/*
Template Name: Program 2020
Template Post Type: program2020
*/
get_header(); ?>

<?php if( !post_password_required( $post->ID ) ) : ?>
<main>
    <section id="m_v">
        <div class="c_wrap">
            <div class="thum">
                <img src="<?php the_field('p_thumb'); ?>">
                <div class="summary_points">
                <h3><span>SUMMARY POINTS</span><span>プログラムの特色</span></h3>
                <div class="s_p_d">
                    <?php $summary_points_1 = get_field('summary_points_1');?>
                    <?php $summary_points_2 = get_field('summary_points_2');?>
                    <?php $summary_points_3 = get_field('summary_points_3');?>
                    <ul>
                        <li><?php echo $summary_points_1; ?></li>
                        <li><?php echo $summary_points_2; ?></li>
                        <li><?php echo $summary_points_3; ?></li>
                    </ul>
                </div>
            </div> 
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
                </div>
                <?php endif;?>

                <?php $p_name_2 = get_field('p_name_2');?>
                <?php if(empty($p_name_2)):?>
                <?php else:?>
                <div class="p_name_2 flex_items box_2">
                    <?php echo $p_name_2; ?>
                </div>
                <?php endif;?>

                <?php $p_name_3 = get_field('p_name_3');?>
                <?php if(empty($p_name_3)):?>
                <?php else:?>
                <div class="p_name_3 flex_items box_3">
                    <?php echo $p_name_3; ?>
                </div>
                <?php endif;?>

                <?php $p_name_4 = get_field('p_name_4');?>
                <?php if(empty($p_name_4)):?>
                <?php else:?>
                <div class="p_name_4 flex_items box_4">
                    <?php echo $p_name_4; ?>
                </div>
                <?php endif;?>

                <?php $p_name_5 = get_field('p_name_5');?>
                <?php if(empty($p_name_5)):?>
                <?php else:?>
                <div class="p_name_5 flex_items box_5">
                    <?php echo $p_name_5; ?>
                </div>
                <?php endif;?>

                <?php $p_name_6 = get_field('p_name_6');?>
                <?php if(empty($p_name_6)):?>
                <?php else:?>
                <div class="p_name_6 flex_items box_6">
                    <?php echo $p_name_6; ?>
                </div>
                <?php endif;?>

                <?php $p_name_7 = get_field('p_name_7');?>
                <?php if(empty($p_name_7)):?>
                <?php else:?>
                <div class="p_name_7 flex_items box_7">
                    <?php echo $p_name_7; ?>
                </div>
                <?php endif;?>

                <?php $p_name_8 = get_field('p_name_8');?>
                <?php if(empty($p_name_8)):?>
                <?php else:?>
                <div class="p_name_8 flex_items box_8">
                    <?php echo $p_name_8; ?>
                </div>
                <?php endif;?>

                <?php $p_name_9 = get_field('p_name_9');?>
                <?php if(empty($p_name_9)):?>
                <?php else:?>
                <div class="p_name_9 flex_items box_9">
                    <?php echo $p_name_9; ?>
                </div>
                <?php endif;?>

                <?php $p_name_10 = get_field('p_name_10');?>
                <?php if(empty($p_name_10)):?>
                <?php else:?>
                <div class="p_name_10 flex_items box_10">
                    <?php echo $p_name_10; ?>
                </div>
                <?php endif;?>

                <?php $p_name_11 = get_field('p_name_11');?>
                <?php if(empty($p_name_11)):?>
                <?php else:?>
                <div class="p_name_11 flex_items box_11">
                    <?php echo $p_name_11; ?>
                </div>
                <?php endif;?>

                <?php $p_name_12 = get_field('p_name_12');?>
                <?php if(empty($p_name_12)):?>
                <?php else:?>
                <div class="p_name_12 flex_items box_12">
                    <?php echo $p_name_12; ?>
                </div>
                <?php endif;?>

            </div>

            <div class="contents">
                <?php the_content(); ?>

                <?php $p_name = get_field('p_name_1');?>
                <?php if(empty($p_name)):?>
                <?php else:?>
                    <?php include("inc/single-program/box_1.php"); ?>
                <?php endif;?>

                <?php $p_name = get_field('p_name_2');?>
                <?php if(empty($p_name)):?>
                <?php else:?>
                    <?php include("inc/single-program/box_2.php"); ?>
                <?php endif;?>

                <?php $p_name = get_field('p_name_3');?>
                <?php if(empty($p_name)):?>
                <?php else:?>
                    <?php include("inc/single-program/box_3.php"); ?>
                <?php endif;?>

                <?php $p_name = get_field('p_name_4');?>
                <?php if(empty($p_name)):?>
                <?php else:?>
                    <?php include("inc/single-program/box_4.php"); ?>
                <?php endif;?>

                <?php $p_name = get_field('p_name_5');?>
                <?php if(empty($p_name)):?>
                <?php else:?>
                    <?php include("inc/single-program/box_5.php"); ?>
                <?php endif;?>

                <?php $p_name = get_field('p_name_6');?>
                <?php if(empty($p_name)):?>
                <?php else:?>
                    <?php include("inc/single-program/box_6.php"); ?>
                <?php endif;?>

                <?php $p_name = get_field('p_name_7');?>
                <?php if(empty($p_name)):?>
                <?php else:?>
                    <?php include("inc/single-program/box_7.php"); ?>
                <?php endif;?>

                <?php $p_name = get_field('p_name_8');?>
                <?php if(empty($p_name)):?>
                <?php else:?>
                    <?php include("inc/single-program/box_8.php"); ?>
                <?php endif;?>

                <?php $p_name = get_field('p_name_9');?>
                <?php if(empty($p_name)):?>
                <?php else:?>
                    <?php include("inc/single-program/box_9.php"); ?>
                <?php endif;?>

                <?php $p_name = get_field('p_name_10');?>
                <?php if(empty($p_name)):?>
                <?php else:?>
                    <?php include("inc/single-program/box_10.php"); ?>
                <?php endif;?>

                <?php $p_name = get_field('p_name_11');?>
                <?php if(empty($p_name)):?>
                <?php else:?>
                    <?php include("inc/single-program/box_11.php"); ?>
                <?php endif;?>

                <?php $p_name = get_field('p_name_12');?>
                <?php if(empty($p_name)):?>
                <?php else:?>
                    <?php include("inc/single-program/box_12.php"); ?>
                <?php endif;?>

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