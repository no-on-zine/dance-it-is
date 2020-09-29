<div class="box_3 flex none">
    <div class="left">
        <?php $p_notice_3 = get_field('p_notice_3');?>
        <?php if(empty($p_notice_3)):?>
        <?php else:?>
        <div class="f_w">
            <h5><?php echo $p_notice_3; ?></h5>
        </div>
        <?php endif;?>

        <?php $p_terms_3 = get_field('p_terms_3');?>
        <?php if(empty($p_terms_3)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［募集条件］</h5>
            <p>
                <?php echo $p_terms_3; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_target_3 = get_field('p_target_3');?>
        <?php if(empty($p_target_3)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［対象］</h5>
            <p>
                <?php echo $p_target_3; ?>
            </p>
        </div>
        <?php endif;?>


        <?php $p_date_detail_3 = get_field('p_date_detail_3');?>
        <?php if(empty($p_date_detail_3)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［日程詳細］</h5>
            <p>
                <?php echo $p_date_detail_3; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_lecturer_3 = get_field('p_lecturer_3');?>
        <?php if(empty($p_lecturer_3)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［講師］</h5>
            <p>
                <?php echo $p_lecturer_3; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_fee_3 = get_field('p_fee_3');?>
        <?php if(empty($p_fee_3)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［参加費］</h5>
            <p>
                <?php echo $p_fee_3; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_capacity_3 = get_field('p_capacity_3');?>
        <?php if(empty($p_capacity_3)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［定員］</h5>
            <p>
                <?php echo $p_capacity_3; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_application_m_3 = get_field('p_application_m_3');?>
        <?php if(empty($p_application_m_3)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［応募方法］</h5>
            <p>
                <?php echo $p_application_m_3; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_period_3 = get_field('p_period_3');?>
        <?php if(empty($p_period_3)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［募集期間］</h5>
            <p>
                <?php echo $p_period_3; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_way_3 = get_field('p_way_3');?>
        <?php if(empty($p_way_3)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［方法］</h5>
            <p>
                <?php echo $p_way_3; ?>
            </p>
        </div>
        <?php endif;?>

        
        <?php $p_selection_3 = get_field('p_selection_3');?>
        <?php if(empty($p_selection_3)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［選考方法 / 通知］</h5>
            <p>
                <?php echo $p_selection_3; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_other_3 = get_field('p_other_3');?>
        <?php if(empty($p_other_3)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［その他］</h5>
            <p>
                <?php echo $p_other_3; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_inquiry_3 = get_field('p_inquiry_3');?>
        <?php if(empty($p_inquiry_3)):?>
        <?php else:?>
        <div class="f_w inquiry">
            <h5>問合・申込</h5>
            <p>
                <?php echo $p_inquiry_3; ?>
            </p>
        </div>
        <?php endif;?>
    </div>
    <div class="right">
        <div class="lecturer">
            <?php $p_l_photo_1_3 = get_field('p_l_photo_1_3');?>
            <?php if(empty($p_l_photo_1_3)):?>
            <?php else:?>
            <div class="i_w">
                <img src="<?php echo $p_l_photo_1_3; ?>">
            </div>
            <?php endif;?>

            <?php $p_l_name_1_3 = get_field('p_l_name_1_3');?>
            <?php if(empty($p_l_name_1_3)):?>
            <?php else:?>
            <h5><?php echo $p_l_name_1_3; ?></h5>
            <?php endif;?>

            <?php $p_l_profile_1_3 = get_field('p_l_profile_1_3');?>
            <?php if(empty($p_l_profile_1_3)):?>
            <?php else:?>
            <p><?php echo $p_l_profile_1_3; ?></p>
            <?php endif;?>
        </div>

        <div class="lecturer">
            <?php $p_l_photo_2_3 = get_field('p_l_photo_2_3');?>
            <?php if(empty($p_l_photo_2_3)):?>
            <?php else:?>
            <div class="i_w">
                <img src="<?php echo $p_l_photo_2_3; ?>">
            </div>
            <?php endif;?>

            <?php $p_l_name_2_3 = get_field('p_l_name_2_3');?>
            <?php if(empty($p_l_name_2_3)):?>
            <?php else:?>
            <h5><?php echo $p_l_name_2_3; ?></h5>
            <?php endif;?>

            <?php $p_l_profile_2_3 = get_field('p_l_profile_2_3');?>
            <?php if(empty($p_l_profile_2_3)):?>
            <?php else:?>
            <p><?php echo $p_l_profile_2_3; ?></p>
            <?php endif;?>
        </div>

        <div class="lecturer">
            <?php $p_l_photo_3_3 = get_field('p_l_photo_3_3');?>
            <?php if(empty($p_l_photo_3_3)):?>
            <?php else:?>
            <div class="i_w">
                <img src="<?php echo $p_l_photo_3_3; ?>">
            </div>
            <?php endif;?>

            <?php $p_l_name_3_3 = get_field('p_l_name_3_3');?>
            <?php if(empty($p_l_name_3_3)):?>
            <?php else:?>
            <h5><?php echo $p_l_name_3_3; ?></h5>
            <?php endif;?>

            <?php $p_l_profile_3_3 = get_field('p_l_profile_3_3');?>
            <?php if(empty($p_l_profile_3_3)):?>
            <?php else:?>
            <p><?php echo $p_l_profile_3_3; ?></p>
            <?php endif;?>
        </div>

    </div>
</div>