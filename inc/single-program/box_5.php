<div class="box_5 flex none">
    <div class="left">
        <?php $p_notice_5 = get_field('p_notice_5');?>
        <?php if(empty($p_notice_5)):?>
        <?php else:?>
        <div class="f_w">
            <h5><?php echo $p_notice_5; ?></h5>
        </div>
        <?php endif;?>

        <?php $p_terms_5 = get_field('p_terms_5');?>
        <?php if(empty($p_terms_5)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［募集条件］</h5>
            <p>
                <?php echo $p_terms_5; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_target_5 = get_field('p_target_5');?>
        <?php if(empty($p_target_5)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［対象］</h5>
            <p>
                <?php echo $p_target_5; ?>
            </p>
        </div>
        <?php endif;?>


        <?php $p_date_detail_5 = get_field('p_date_detail_5');?>
        <?php if(empty($p_date_detail_5)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［日程詳細］</h5>
            <p>
                <?php echo $p_date_detail_5; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_lecturer_5 = get_field('p_lecturer_5');?>
        <?php if(empty($p_lecturer_5)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［講師］</h5>
            <p>
                <?php echo $p_lecturer_5; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_fee_5 = get_field('p_fee_5');?>
        <?php if(empty($p_fee_5)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［参加費］</h5>
            <p>
                <?php echo $p_fee_5; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_capacity_5 = get_field('p_capacity_5');?>
        <?php if(empty($p_capacity_5)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［定員］</h5>
            <p>
                <?php echo $p_capacity_5; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_application_m_5 = get_field('p_application_m_5');?>
        <?php if(empty($p_application_m_5)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［応募方法］</h5>
            <p>
                <?php echo $p_application_m_5; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_period_5 = get_field('p_period_5');?>
        <?php if(empty($p_period_5)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［募集期間］</h5>
            <p>
                <?php echo $p_period_5; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_way_5 = get_field('p_way_5');?>
        <?php if(empty($p_way_5)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［方法］</h5>
            <p>
                <?php echo $p_way_5; ?>
            </p>
        </div>
        <?php endif;?>

        
        <?php $p_selection_5 = get_field('p_selection_5');?>
        <?php if(empty($p_selection_5)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［選考方法 / 通知］</h5>
            <p>
                <?php echo $p_selection_5; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_other_5 = get_field('p_other_5');?>
        <?php if(empty($p_other_5)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［その他］</h5>
            <p>
                <?php echo $p_other_5; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_free_5 = get_field('p_free_5');?>
        <?php if(empty($p_free_5)):?>
        <?php else:?>
        <div class="f_w p_free">
            <?php echo $p_free_5; ?>
        </div>
        <?php endif;?>

        <?php $p_inquiry_5 = get_field('p_inquiry_5');?>
        <?php if(empty($p_inquiry_5)):?>
        <?php else:?>
        <div class="f_w inquiry">
            <h5>問合・申込</h5>
            <p>
                <?php echo $p_inquiry_5; ?>
            </p>
        </div>
        <?php endif;?>
        <div class="link f_w">
            <div class="detail">
                <a href="<?php echo home_url() ?>/dii2020/platform2020">プラットフォームとは &gt;</a>
            </div>
            <div class="detail">
                <a href="<?php echo home_url() ?>/program2020#schedule">年間スケジュールを見る &gt;</a>
            </div>
        </div>
    </div>

    <?php $p_l_photo_1_5 = get_field('p_l_photo_1_5');?>
    <?php if(empty($p_l_photo_1_5)):?>
    <?php else:?>
    <div class="right">
        <div class="lecturer">
            <div class="i_w">
                <img src="<?php echo $p_l_photo_1_5; ?>">
            </div>
            <?php $p_l_name_1_5 = get_field('p_l_name_1_5');?>
            <?php if(empty($p_l_name_1_5)):?>
            <?php else:?>
            <h5><?php echo $p_l_name_1_5; ?></h5>
            <?php endif;?>

            <?php $p_l_profile_1_5 = get_field('p_l_profile_1_5');?>
            <?php if(empty($p_l_profile_1_5)):?>
            <?php else:?>
            <p><?php echo $p_l_profile_1_5; ?></p>
            <?php endif;?>
        </div>

        <div class="lecturer">
            <?php $p_l_photo_2_5 = get_field('p_l_photo_2_5');?>
            <?php if(empty($p_l_photo_2_5)):?>
            <?php else:?>
            <div class="i_w">
                <img src="<?php echo $p_l_photo_2_5; ?>">
            </div>
            <?php endif;?>

            <?php $p_l_name_2_5 = get_field('p_l_name_2_5');?>
            <?php if(empty($p_l_name_2_5)):?>
            <?php else:?>
            <h5><?php echo $p_l_name_2_5; ?></h5>
            <?php endif;?>

            <?php $p_l_profile_2_5 = get_field('p_l_profile_2_5');?>
            <?php if(empty($p_l_profile_2_5)):?>
            <?php else:?>
            <p><?php echo $p_l_profile_2_5; ?></p>
            <?php endif;?>
        </div>

        <div class="lecturer">
            <?php $p_l_photo_3_5 = get_field('p_l_photo_3_5');?>
            <?php if(empty($p_l_photo_3_5)):?>
            <?php else:?>
            <div class="i_w">
                <img src="<?php echo $p_l_photo_3_5; ?>">
            </div>
            <?php endif;?>

            <?php $p_l_name_3_5 = get_field('p_l_name_3_5');?>
            <?php if(empty($p_l_name_3_5)):?>
            <?php else:?>
            <h5><?php echo $p_l_name_3_5; ?></h5>
            <?php endif;?>

            <?php $p_l_profile_3_5 = get_field('p_l_profile_3_5');?>
            <?php if(empty($p_l_profile_3_5)):?>
            <?php else:?>
            <p><?php echo $p_l_profile_3_5; ?></p>
            <?php endif;?>
        </div>

        <div class="lecturer">
            <?php $p_l_photo_4_5 = get_field('p_l_photo_4_5');?>
            <?php if(empty($p_l_photo_4_5)):?>
            <?php else:?>
            <div class="i_w">
                <img src="<?php echo $p_l_photo_4_5; ?>">
            </div>
            <?php endif;?>

            <?php $p_l_name_4_5 = get_field('p_l_name_4_5');?>
            <?php if(empty($p_l_name_4_5)):?>
            <?php else:?>
            <h5><?php echo $p_l_name_4_5; ?></h5>
            <?php endif;?>

            <?php $p_l_profile_4_5 = get_field('p_l_profile_4_5');?>
            <?php if(empty($p_l_profile_4_5)):?>
            <?php else:?>
            <p><?php echo $p_l_profile_4_5; ?></p>
            <?php endif;?>
        </div>
    </div>
    <?php endif;?>

</div>