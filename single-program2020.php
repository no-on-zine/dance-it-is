<?php 
/*
Template Name: Program 2020
Template Post Type: program2020
*/
get_header(); ?>

<main>
    <section id="m_v">
        <div class="w_box"></div>
        <div class="c_wrap">
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
                    <div class="p_date_1">
                        <p class="box_1">
                            <?php $p_date_1 = get_field('p_date_1');?>
                            <?php if(empty($p_date_1)):?>

                            <?php else:?>
                            <?php echo $p_date_1; ?>
                            <?php endif;?>
                        </p>
                        <p class="box_2">
                            <?php $p_date_2 = get_field('p_date_2');?>
                            <?php if(empty($p_date_2)):?>

                            <?php else:?>
                            <?php echo $p_date_2; ?>
                            <?php endif;?>
                        </p>
                    </div>
                </div>
                <div class="place flex">
                    <h4 class="fade">会場</h4>
                    <div class="p_place_1">
                        <div class="box_1">
                            <?php $p_place_1 = get_field('p_place_1');?>
                            <?php if(empty($p_place_1)):?>

                            <?php else:?>
                            <?php echo $p_place_1; ?>
                            <?php endif;?>
                            <p class="p_address_1">
                                <?php $p_address_1 = get_field('p_address_1');?>
                                <?php if(empty($p_address_1)):?>

                                <?php else:?>
                                <?php echo $p_address_1; ?>
                                <?php endif;?>
                            </p>
                            <div class="p_map_1">
                                <?php $p_map_1 = get_field('p_map_1');?>
                                <?php if(empty($p_map_1)):?>

                                <?php else:?>
                                <a href="<?php echo $p_map_1; ?>" target="_blank">MAP ></a>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="box_2">
                            <?php $p_place_2 = get_field('p_place_2');?>
                            <?php if(empty($p_place_2)):?>

                            <?php else:?>
                            <?php echo $p_place_2; ?>
                            <?php endif;?>
                            <p class="p_address_1">
                                <?php $p_address_2 = get_field('p_address_2');?>
                                <?php if(empty($p_address_2)):?>

                                <?php else:?>
                                <?php echo $p_address_2; ?>
                                <?php endif;?>
                            </p>
                            <div class="p_map_1">
                                <?php $p_map_2 = get_field('p_map_2');?>
                                <?php if(empty($p_map_2)):?>

                                <?php else:?>
                                <a href="<?php echo $p_map_2; ?>" target="_blank">MAP ></a>
                                <?php endif;?>
                            </div>
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
            </div>

            <div class="contents">
                <div class="box_1">
                    <?php $p_terms_1 = get_field('p_terms_1');?>
                    <?php if(empty($p_terms_1)):?>
                    <?php else:?>
                    <h5>［募集条件］</h5>
                    <p>
                        <?php echo $p_terms_1; ?>
                    </p>
                    <?php endif;?>

                    <?php $p_date_detail_1 = get_field('p_date_detail_1');?>
                    <?php if(empty($p_date_detail_1)):?>
                    <?php else:?>
                    <h5>［日程詳細］</h5>
                    <p>
                        <?php echo $p_date_detail_1; ?>
                    </p>
                    <?php endif;?>

                    <?php $p_schedule_1 = get_field('p_schedule_1');?>
                    <?php if(empty($p_schedule_1)):?>
                    <?php else:?>
                    <h5>［プロジェクト全体スケジュール］</h5>
                    <p>
                        <?php echo $p_schedule_1; ?>
                    </p>
                    <?php endif;?>

                    <?php $p_lecturer_1 = get_field('p_lecturer_1');?>
                    <?php if(empty($p_lecturer_1)):?>
                    <?php else:?>
                    <h5>［講師］</h5>
                    <p>
                        <?php echo $p_lecturer_1; ?>
                    </p>
                    <?php endif;?>

                    <?php $p_shooting_1 = get_field('p_shooting_1');?>
                    <?php if(empty($p_shooting_1)):?>
                    <?php else:?>
                    <h5>［撮影］</h5>
                    <p>
                        <?php echo $p_shooting_1; ?>
                    </p>
                    <?php endif;?>

                    <?php $p_fee_1 = get_field('p_fee_1');?>
                    <?php if(empty($p_fee_1)):?>
                    <?php else:?>
                    <h5>［参加費］</h5>
                    <p>
                        <?php echo $p_fee_1; ?>
                    </p>
                    <?php endif;?>

                    <?php $p_capacity_1 = get_field('p_capacity_1');?>
                    <?php if(empty($p_capacity_1)):?>
                    <?php else:?>
                    <h5>［定員］</h5>
                    <p>
                        <?php echo $p_capacity_1; ?>
                    </p>
                    <?php endif;?>

                </div>
            </div>

        </div>

    </section>
</main>





<?php get_footer(); ?>