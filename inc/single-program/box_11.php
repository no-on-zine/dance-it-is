<div class="box_11 flex none">
    <div class="left">
        <?php $p_notice_11 = get_field('p_notice_11');?>
        <?php if(empty($p_notice_11)):?>
        <?php else:?>
        <div class="f_w">
            <h5><?php echo $p_notice_11; ?></h5>
        </div>
        <?php endif;?>

        <?php $p_terms_11 = get_field('p_terms_11');?>
        <?php if(empty($p_terms_11)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［募集条件］</h5>
            <p>
                <?php echo $p_terms_11; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_target_11 = get_field('p_target_11');?>
        <?php if(empty($p_target_11)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［対象］</h5>
            <p>
                <?php echo $p_target_11; ?>
            </p>
        </div>
        <?php endif;?>


        <?php $p_date_detail_11 = get_field('p_date_detail_11');?>
        <?php if(empty($p_date_detail_11)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［日程詳細］</h5>
            <p>
                <?php echo $p_date_detail_11; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_lecturer_11 = get_field('p_lecturer_11');?>
        <?php if(empty($p_lecturer_11)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［講師］</h5>
            <p>
                <?php echo $p_lecturer_11; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_fee_11 = get_field('p_fee_11');?>
        <?php if(empty($p_fee_11)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［参加費］</h5>
            <p>
                <?php echo $p_fee_11; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_capacity_11 = get_field('p_capacity_11');?>
        <?php if(empty($p_capacity_11)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［定員］</h5>
            <p>
                <?php echo $p_capacity_11; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_application_m_11 = get_field('p_application_m_11');?>
        <?php if(empty($p_application_m_11)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［応募方法］</h5>
            <p>
                <?php echo $p_application_m_11; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_period_11 = get_field('p_period_11');?>
        <?php if(empty($p_period_11)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［募集期間］</h5>
            <p>
                <?php echo $p_period_11; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_way_11 = get_field('p_way_11');?>
        <?php if(empty($p_way_11)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［方法］</h5>
            <p>
                <?php echo $p_way_11; ?>
            </p>
        </div>
        <?php endif;?>

        
        <?php $p_selection_11 = get_field('p_selection_11');?>
        <?php if(empty($p_selection_11)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［選考方法 / 通知］</h5>
            <p>
                <?php echo $p_selection_11; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_other_11 = get_field('p_other_11');?>
        <?php if(empty($p_other_11)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［その他］</h5>
            <p>
                <?php echo $p_other_11; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_free_11 = get_field('p_free_11');?>
        <?php if(empty($p_free_11)):?>
        <?php else:?>
        <div class="f_w p_free">
            <?php echo $p_free_11; ?>
        </div>
        <?php endif;?>

        <?php $p_inquiry_11 = get_field('p_inquiry_11');?>
        <?php if(empty($p_inquiry_11)):?>
        <?php else:?>
        <div class="f_w inquiry">
            <h5>問合・申込</h5>
            <p>
                <?php echo $p_inquiry_11; ?>
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
    
    <?php $p_l_photo_1_11 = get_field('p_l_photo_1_11');?>
    <?php if(empty($p_l_photo_1_11)):?>
    <?php else:?>
    <div class="right">
        <div class="lecturer">
            <div class="i_w">
                <img src="<?php echo $p_l_photo_1_11; ?>">
            </div>
            <?php $p_l_name_1_11 = get_field('p_l_name_1_11');?>
            <?php if(empty($p_l_name_1_11)):?>
            <?php else:?>
            <h5><?php echo $p_l_name_1_11; ?></h5>
            <?php endif;?>

            <?php $p_l_profile_1_11 = get_field('p_l_profile_1_11');?>
            <?php if(empty($p_l_profile_1_11)):?>
            <?php else:?>
            <p><?php echo $p_l_profile_1_11; ?></p>
            <?php endif;?>
        </div>

        <div class="lecturer">
            <?php $p_l_photo_2_11 = get_field('p_l_photo_2_11');?>
            <?php if(empty($p_l_photo_2_11)):?>
            <?php else:?>
            <div class="i_w">
                <img src="<?php echo $p_l_photo_2_11; ?>">
            </div>
            <?php endif;?>

            <?php $p_l_name_2_11 = get_field('p_l_name_2_11');?>
            <?php if(empty($p_l_name_2_11)):?>
            <?php else:?>
            <h5><?php echo $p_l_name_2_11; ?></h5>
            <?php endif;?>

            <?php $p_l_profile_2_11 = get_field('p_l_profile_2_11');?>
            <?php if(empty($p_l_profile_2_11)):?>
            <?php else:?>
            <p><?php echo $p_l_profile_2_11; ?></p>
            <?php endif;?>
        </div>

        <div class="lecturer">
            <?php $p_l_photo_3_11 = get_field('p_l_photo_3_11');?>
            <?php if(empty($p_l_photo_3_11)):?>
            <?php else:?>
            <div class="i_w">
                <img src="<?php echo $p_l_photo_3_11; ?>">
            </div>
            <?php endif;?>

            <?php $p_l_name_3_11 = get_field('p_l_name_3_11');?>
            <?php if(empty($p_l_name_3_11)):?>
            <?php else:?>
            <h5><?php echo $p_l_name_3_11; ?></h5>
            <?php endif;?>

            <?php $p_l_profile_3_11 = get_field('p_l_profile_3_11');?>
            <?php if(empty($p_l_profile_3_11)):?>
            <?php else:?>
            <p><?php echo $p_l_profile_3_11; ?></p>
            <?php endif;?>
        </div>
    </div>
    <?php endif;?>

</div>