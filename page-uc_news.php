<?php //Template Name: News仮ページ
get_header(); ?>

<?php if( !post_password_required( $post->ID ) ) : ?>
<main>
    <section id="m_v">
        <div class="c_wrap">
            <div class="thum">
                <img src="<?php bloginfo('template_url'); ?>/images/page/pr_m_v.jpg" alt="">
            </div>
            <div class="w_box title"></div>
        </div>
    </section>
    <section id="about_project">
        <div class="c_wrap">
            <div class="c_text slide_fade10">
                <p class="f16">
                <h2>予告</h2>
                ダンスでいこう！！京都公演プラットフォームにて、若手振付家を対象としたアワードを創設します。<br>
                事業タイトル・概要・公募要項は10月10日頃に発表します。<br><br>

                スケジュール<br>
                公募要項発表：10月10日（土）（予定・詳細が決まり次第発表します）<br>
                応募締め切り：11月29日（日）　<br>
                出演者決定通知：12月20日ごろ<br>
                出演組数：6組<br>
                公演日：2021年 3 月 11日（木）・12 日（金）　※8-10日に仕込、リハーサル<br>
                11日、12日、各3組の上演。各上演後に観客を交え作品を巡るディスカッションを行う。<br>
                実施場所：京都芸術センター　講堂
                </p>
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