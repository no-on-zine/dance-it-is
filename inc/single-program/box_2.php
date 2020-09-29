<div class="box_2 flex none">
    <div class="left">
        <?php $p_notice_2 = get_field('p_notice_2');?>
        <?php if(empty($p_notice_2)):?>
        <?php else:?>
        <div class="f_w">
            <h5><?php echo $p_notice_2; ?></h5>
        </div>
        <?php endif;?>

        <?php $p_terms_2 = get_field('p_terms_2');?>
        <?php if(empty($p_terms_2)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［募集条件］</h5>
            <p>
                <?php echo $p_terms_2; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_target_2 = get_field('p_target_2');?>
        <?php if(empty($p_target_2)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［対象］</h5>
            <p>
                <?php echo $p_target_2; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_date_detail_2 = get_field('p_date_detail_2');?>
        <?php if(empty($p_date_detail_2)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［日程詳細］</h5>
            <p>
                <?php echo $p_date_detail_2; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_lecturer_2 = get_field('p_lecturer_2');?>
        <?php if(empty($p_lecturer_2)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［講師］</h5>
            <p>
                <?php echo $p_lecturer_2; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_fee_2 = get_field('p_fee_2');?>
        <?php if(empty($p_fee_2)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［参加費］</h5>
            <p>
                <?php echo $p_fee_2; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_capacity_2 = get_field('p_capacity_2');?>
        <?php if(empty($p_capacity_2)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［定員］</h5>
            <p>
                <?php echo $p_capacity_2; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_application_m_2 = get_field('p_application_m_2');?>
        <?php if(empty($p_application_m_2)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［応募方法］</h5>
            <p>
                <?php echo $p_application_m_2; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_period_2 = get_field('p_period_2');?>
        <?php if(empty($p_period_2)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［募集期間］</h5>
            <p>
                <?php echo $p_period_2; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_way_2 = get_field('p_way_2');?>
        <?php if(empty($p_way_2)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［方法］</h5>
            <p>
                <?php echo $p_way_2; ?>
            </p>
        </div>
        <?php endif;?>



        <?php $p_selection_2 = get_field('p_selection_2');?>
        <?php if(empty($p_selection_2)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［選考方法 / 通知］</h5>
            <p>
                <?php echo $p_selection_2; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_other_2 = get_field('p_other_2');?>
        <?php if(empty($p_other_2)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［その他］</h5>
            <p>
                <?php echo $p_other_2; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_inquiry_2 = get_field('p_inquiry_2');?>
        <?php if(empty($p_inquiry_2)):?>
        <?php else:?>
        <div class="f_w inquiry">
            <h5>問合・申込</h5>
            <p>
                <?php echo $p_inquiry_2; ?>
            </p>
        </div>
        <?php endif;?>
    </div>
    <div class="right">
        <div class="lecturer">
            <?php $p_l_photo_1_2 = get_field('p_l_photo_1_2');?>
            <?php if(empty($p_l_photo_1_2)):?>
            <?php else:?>
            <div class="i_w">
                <img src="<?php echo $p_l_photo_1_2; ?>">
            </div>
            <?php endif;?>

            <?php $p_l_name_1_2 = get_field('p_l_name_1_2');?>
            <?php if(empty($p_l_name_1_2)):?>
            <?php else:?>
            <h5><?php echo $p_l_name_1_2; ?></h5>
            <?php endif;?>

            <?php $p_l_profile_1_2 = get_field('p_l_profile_1_2');?>
            <?php if(empty($p_l_profile_1_2)):?>
            <?php else:?>
            <p><?php echo $p_l_profile_1_2; ?></p>
            <?php endif;?>
        </div>

        <div class="lecturer">
            <?php $p_l_photo_2_2 = get_field('p_l_photo_2_2');?>
            <?php if(empty($p_l_photo_2_2)):?>
            <?php else:?>
            <div class="i_w">
                <img src="<?php echo $p_l_photo_2_2; ?>">
            </div>
            <?php endif;?>

            <?php $p_l_name_2_2 = get_field('p_l_name_2_2');?>
            <?php if(empty($p_l_name_2_2)):?>
            <?php else:?>
            <h5><?php echo $p_l_name_2_2; ?></h5>
            <?php endif;?>

            <?php $p_l_profile_2_2 = get_field('p_l_profile_2_2');?>
            <?php if(empty($p_l_profile_2_2)):?>
            <?php else:?>
            <p><?php echo $p_l_profile_2_2; ?></p>
            <?php endif;?>
        </div>

        <div class="lecturer">
            <?php $p_l_photo_3_2 = get_field('p_l_photo_3_2');?>
            <?php if(empty($p_l_photo_3_2)):?>
            <?php else:?>
            <div class="i_w">
                <img src="<?php echo $p_l_photo_3_2; ?>">
            </div>
            <?php endif;?>

            <?php $p_l_name_3_2 = get_field('p_l_name_3_2');?>
            <?php if(empty($p_l_name_3_2)):?>
            <?php else:?>
            <h5><?php echo $p_l_name_3_2; ?></h5>
            <?php endif;?>

            <?php $p_l_profile_3_2 = get_field('p_l_profile_3_2');?>
            <?php if(empty($p_l_profile_3_2)):?>
            <?php else:?>
            <p><?php echo $p_l_profile_3_2; ?></p>
            <?php endif;?>
        </div>

    </div>
</div>