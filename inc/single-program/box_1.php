<div class="box_1 flex none">
    <div class="left">
        <?php $p_notice_1 = get_field('p_notice_1');?>
        <?php if(empty($p_notice_1)):?>
        <?php else:?>
        <div class="f_w">
            <h5><?php echo $p_notice_1; ?></h5>
        </div>
        <?php endif;?>

        <?php $p_terms_1 = get_field('p_terms_1');?>
        <?php if(empty($p_terms_1)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［募集条件］</h5>
            <p>
                <?php echo $p_terms_1; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_target_1 = get_field('p_target_1');?>
        <?php if(empty($p_target_1)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［対象］</h5>
            <p>
                <?php echo $p_target_1; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_date_detail_1 = get_field('p_date_detail_1');?>
        <?php if(empty($p_date_detail_1)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［日程詳細］</h5>
            <p>
                <?php echo $p_date_detail_1; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_lecturer_1 = get_field('p_lecturer_1');?>
        <?php if(empty($p_lecturer_1)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［講師］</h5>
            <p>
                <?php echo $p_lecturer_1; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_fee_1 = get_field('p_fee_1');?>
        <?php if(empty($p_fee_1)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［参加費］</h5>
            <p>
                <?php echo $p_fee_1; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_capacity_1 = get_field('p_capacity_1');?>
        <?php if(empty($p_capacity_1)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［定員］</h5>
            <p>
                <?php echo $p_capacity_1; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_application_m_1 = get_field('p_application_m_1');?>
        <?php if(empty($p_application_m_1)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［応募方法］</h5>
            <p>
                <?php echo $p_application_m_1; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_period_1 = get_field('p_period_1');?>
        <?php if(empty($p_period_1)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［募集期間］</h5>
            <p>
                <?php echo $p_period_1; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_way_1 = get_field('p_way_1');?>
        <?php if(empty($p_way_1)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［方法］</h5>
            <p>
                <?php echo $p_way_1; ?>
            </p>
        </div>
        <?php endif;?>



        <?php $p_selection_1 = get_field('p_selection_1');?>
        <?php if(empty($p_selection_1)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［選考方法 / 通知］</h5>
            <p>
                <?php echo $p_selection_1; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_other_1 = get_field('p_other_1');?>
        <?php if(empty($p_other_1)):?>
        <?php else:?>
        <div class="f_w">
            <h5>［その他］</h5>
            <p>
                <?php echo $p_other_1; ?>
            </p>
        </div>
        <?php endif;?>

        <?php $p_inquiry_1 = get_field('p_inquiry_1');?>
        <?php if(empty($p_inquiry_1)):?>
        <?php else:?>
        <div class="f_w inquiry">
            <h5>問合・申込</h5>
            <p>
                <?php echo $p_inquiry_1; ?>
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
    <div class="right">
        <div class="lecturer">
            <?php $p_l_photo_1_1 = get_field('p_l_photo_1_1');?>
            <?php if(empty($p_l_photo_1_1)):?>
            <?php else:?>
            <div class="i_w">
                <img src="<?php echo $p_l_photo_1_1; ?>">
            </div>
            <?php endif;?>

            <?php $p_l_name_1_1 = get_field('p_l_name_1_1');?>
            <?php if(empty($p_l_name_1_1)):?>
            <?php else:?>
            <h5><?php echo $p_l_name_1_1; ?></h5>
            <?php endif;?>

            <?php $p_l_profile_1_1 = get_field('p_l_profile_1_1');?>
            <?php if(empty($p_l_profile_1_1)):?>
            <?php else:?>
            <p><?php echo $p_l_profile_1_1; ?></p>
            <?php endif;?>
        </div>

        <div class="lecturer">
            <?php $p_l_photo_2_1 = get_field('p_l_photo_2_1');?>
            <?php if(empty($p_l_photo_2_1)):?>
            <?php else:?>
            <div class="i_w">
                <img src="<?php echo $p_l_photo_2_1; ?>">
            </div>
            <?php endif;?>

            <?php $p_l_name_2_1 = get_field('p_l_name_2_1');?>
            <?php if(empty($p_l_name_2_1)):?>
            <?php else:?>
            <h5><?php echo $p_l_name_2_1; ?></h5>
            <?php endif;?>

            <?php $p_l_profile_2_1 = get_field('p_l_profile_2_1');?>
            <?php if(empty($p_l_profile_2_1)):?>
            <?php else:?>
            <p><?php echo $p_l_profile_2_1; ?></p>
            <?php endif;?>
        </div>

        <div class="lecturer">
            <?php $p_l_photo_3_1 = get_field('p_l_photo_3_1');?>
            <?php if(empty($p_l_photo_3_1)):?>
            <?php else:?>
            <div class="i_w">
                <img src="<?php echo $p_l_photo_3_1; ?>">
            </div>
            <?php endif;?>

            <?php $p_l_name_3_1 = get_field('p_l_name_3_1');?>
            <?php if(empty($p_l_name_3_1)):?>
            <?php else:?>
            <h5><?php echo $p_l_name_3_1; ?></h5>
            <?php endif;?>

            <?php $p_l_profile_3_1 = get_field('p_l_profile_3_1');?>
            <?php if(empty($p_l_profile_3_1)):?>
            <?php else:?>
            <p><?php echo $p_l_profile_3_1; ?></p>
            <?php endif;?>
        </div>

    </div>
</div>