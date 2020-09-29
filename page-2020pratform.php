<?php //Template Name: 2020 PLATFORM
get_header(); ?>

<?php if( !post_password_required( $post->ID ) ) : ?>
<main>
    <section id="m_v">
        <div class="w_box"></div>
        <div class="c_wrap">
            <div class="thum">
                <?php the_post_thumbnail(); ?>
            </div>
        </div>
    </section>
    <section id="about_project">
        <div class="c_wrap">
            <div class="c_text slide_fade10">
                <h2>PLATFORM</h2>
                <p>
                    2020年度は、全国10のプラットフォームによる振付家育成プログラムが、8月―3月まで実施されます。<br>
                    また、前後にキックオフ・ミーティング（7月）、報告会＠京都芸術センター（2020年3月）を行います。<br>
                    様々な形で未来について話し合う場、継続するための場を設けています。
                </p>
            </div>
            <div class="dc slide_fade10">
                <h3>プラットフォームとは … 日本でコンテンポラリーダンスの振付家育成プログラムを企画・運営する団体・拠点</h3>
                <div class="flex">
                    <div class="left red">地域プラットフォーム</div>
                    <p>
                        プラットフォームの核となる創造拠点の特性を活かし、国際性のある振付家の育成と並行し、地域の社会的課題を視野に入れた活動を行う若手の振付家の育成を行う。
                    </p>
                </div>
                <div class="flex">
                    <div class="left blue">クリエイティブパートナー</div>
                    <p>
                        各地のダンスアーティスト・カンパニーを“クリエイティブパートナー”とし、クリエイションと連動した振付家の養成育成を行う。
                    </p>
                </div>
                <div class="flex">
                    <div class="left green">クリエイティブスタディ<span>（創造環境パートナー）</span></div>
                    <p>
                        ダンスに関わる専門的な団体と連携して、レクチャーやマネジメント技法の習得を通して、コンテンポラリーダンスの創造環境全体の向上に寄与する人材の育成を行う。
                    </p>
                </div>
                <div class="flex">
                    <div class="left yellow">パフォーマンス</div>
                    <p>
                        若手振付家のための公演事業を行う。
                    </p>
                </div>
            </div>
            <div class="map slide_fade10">
                <div class="img_w">
                    <img src="<?php bloginfo('template_url'); ?>/images/page/pf_map.png" alt="">
                </div>
                <div class="link">
                    <div class="detail">
                        <a href="#">年間スケジュールを見る ></a>
                    </div>
                    <div class="detail">
                        <a href="<?php echo home_url() ?>/program2020">プログラム一覧を見る ></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="platform">
        <div class="c_wrap">
            <div class="p_list">
                <div class="p_list_items slide_fade10">
                    <h3><span>Region Platform</span>地域プラットフォーム</h3>
                    <div class="i_w">
                        <div class="item">
                            <div class="flex">
                                <div class="left">
                                    <h4><span class="red">北海道</span>札幌プラットフォーム</h4>
                                    <p class="t_name">北海道コンテンポラリーダンス普及委員会</p>
                                </div>
                                <div class="right">
                                    <div class="img_w logo">
                                        <img src="<?php bloginfo('template_url'); ?>/images/page/pf_01.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="left">
                                    <p>
                                        2011年1月にコンテンポラリーダンスと舞踏などの先鋭的舞踊の普及を目的に設立。これまでにダンスフェスティバル、公演やイベント、ワークショップや講座などの事業を通して北海道内のダンスシーンを活性化してきた。国内外のダンサー／団体による北海道公演の制作補助も行っており、北海道とその他の地域を繋げる役割も担っている。
                                    </p>
                                    <div class="link">
                                        <div class="detail">
                                            <a href="https://conte-sapporo.com/" target="_blank"><span>団体サイト
                                                    ></span>https://conte-sapporo.com/</a>
                                        </div>
                                        <div class="detail">
                                            <a href="<?php echo home_url() ?>/program2020/hcd2020/"><span>プログラム詳細を見る
                                                    ></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="img_w">
                                        <img src="<?php bloginfo('template_url'); ?>/images/page/pf_02.jpg" alt="">
                                        <span class="caption">Photo：yixtape411</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="flex">
                                <div class="left">
                                    <h4><span class="red">名古屋</span>名古屋プラットフォーム</h4>
                                    <p class="t_name">ダンスハウス黄金4442</p>
                                </div>
                                <div class="right">
                                    <div class="img_w logo">
                                        <img src="<?php bloginfo('template_url'); ?>/images/page/pf_03.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="left">
                                    <p>
                                        ダンスハウス黄金4422は2017年6月に名古屋で設立された。現役ダンサーである浅井信好が地上5階建てのビルをセルフリノベーションによって改装を行い、１階にホール、２階にレジデンス施設、３階にスタジオ、４階にアーティストアトリエ、５階にギャラリーを併設。アジアにおけるコンテンポラリーダンスのプラットフォームの役目を担うために、振付家育成事業、ワークショップ事業、公演事業、アーティスト・イン・レジデンス事業、中高生育成事業などを実施している。アジア各国のフェスティバルや劇場、カンパニーとのネットワークを形成し、2018年8月には日本、韓国、マカオ共同振付家育成プログラム「ダンサーズ・ネスト」を３ヶ国にて実施し、2019年10月にも開催予定。これまでに、ダミアン・ジャレ、小尻健太、島地保武、トーマス・ブラッドリーなど国内外で活躍するダンサーや振付家を招聘してのワークショップ事業も精力的に実施している。
                                    </p>
                                    <div class="link">
                                        <div class="detail">
                                            <a href="https://www.facebook.com/Kogane4422/" target="_blank"><span>団体サイト
                                                    ></span>https://www.facebook.com/Kogane4422/</a>
                                        </div>
                                        <div class="detail">
                                            <a href="<?php echo home_url() ?>/program2020/dh4422_2020/"><span>プログラム詳細を見る
                                                    ></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="img_w">
                                        <img src="<?php bloginfo('template_url'); ?>/images/page/pf_04.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="flex">
                                <div class="left">
                                    <h4><span class="red">城　崎</span>城崎プラットフォーム</h4>
                                    <p class="t_name">Dacne Camp Project</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="left">
                                    <p>
                                        2017年より振付家・ダンサーのための育成プログラムを集中した合宿形式で、城崎国際アートセンターで開始。
                                        2017年度：青木尚哉＜グループワーク＆リサーチ＞　余越保子＜ダンス＆プロセス＞の2コースを実施。
                                        2018年度：ダンサーのための＜実践的ダンス・ワークショップ＞として、Aコース：寺田みさこ＜動きの解像度を上げる～バッハ「フーガの技法」を踊る＞、余越保子＜コンテンポラリーダンサーが日本舞踊の古典作品を踊ってみる＞、Bコース：康本雅子＜音楽にIN
                                        OUT＞、みずのりつこ＜舞踏の身体訓練～金粉パフォーマンス＞を実施した。 2019年度：クリエイション＆ダイアローグ・ワークショップ by
                                        ディーン・モス＆余越保子。全国公募より3-5名のチーム編成のアーティストを4組選出し、各チームが持ち込んだ作品をダイアローグ・ワークショップを通してクリエイションを行う。
                                    </p>
                                    <div class="link">
                                        <div class="detail">
                                            <a href="https://www.standingchildren.com/dancecamp"
                                                target="_blank"><span>団体サイト
                                                    ></span>https://www.standingchildren.com/dancecamp</a>
                                        </div>
                                        <div class="detail">
                                            <a href="<?php echo home_url() ?>/program2020/dc2020/"><span>プログラム詳細を見る
                                                    ></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="img_w">
                                        <img src="<?php bloginfo('template_url'); ?>/images/page/pf_05.jpg" alt="">
                                        <span class="caption">Photo：城崎国際アートセンター</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="flex">
                                <div class="left">
                                    <h4><span class="red">神　戸</span>神戸プラットフォーム</h4>
                                    <p class="t_name">NPO法人ダンスボックス</p>
                                </div>
                                <div class="right">
                                    <div class="img_w logo">
                                        <img src="<?php bloginfo('template_url'); ?>/images/page/pf_06.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="left">
                                    <p>
                                        1996年発足。拠点劇場〈ArtTheater dB
                                        神戸〉を中心に、ダンス作品のプロデュースやアーティスト・イン・レジデンスのほか、新進芸術家の育成として「国内ダンス留学@神戸」(2012-2017
                                        年度)等を実施。劇場もロビーも、日常的に国内外のアーティストや地域の人の出入りが多い。ダンスアーティストの創造環境を考えると共に、舞台芸術の新しい地域への開き方も探っている。
                                    </p>
                                    <div class="link">
                                        <div class="detail">
                                            <a href="https://db-dancebox.org/" target="_blank"><span>団体サイト
                                                    ></span>https://db-dancebox.org/</a>
                                        </div>
                                        <div class="detail">
                                            <a href="<?php echo home_url() ?>/program2020/db2020/"><span>プログラム詳細を見る
                                                    ></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="img_w">
                                        <img src="<?php bloginfo('template_url'); ?>/images/page/pf_07.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="flex">
                                <div class="left">
                                    <h4><span class="red">広　島</span>広島プラットフォーム</h4>
                                    <p class="t_name">FREE HEARTS</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="left">
                                    <p>
                                        1992年より地元ダンサーのレベルアップと交流を目的に、国内外のダンサーを定期的に講師に招き、ダンスワークショップを開催。現在は演劇やミュージカル、舞踏ヒップホップなど、ジャンルを問わず、幅広く身体表現活動に携わり、行政主催のダンスイベント制作部門の協力、ダンス公演の提案なども、地元広島にて行っている。
                                    </p>
                                    <div class="link">
                                        <div class="detail">
                                            <a href="<?php echo home_url() ?>/program2020/fh2020/"><span>プログラム詳細を見る
                                                    ></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="img_w">
                                        <img src="<?php bloginfo('template_url'); ?>/images/page/pf_08.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p_list_items slide_fade10">
                    <h3><span>Creative Partner</span>クリエイティブパートナー</h3>
                    <div class="i_w">
                        <div class="item">
                            <div class="flex">
                                <div class="left">
                                    <h4><span class="blue">札幌・京都</span>札幌 / 京都 クリエイティブパートナー</h4>
                                    <p class="t_name">C 3 / Contact Choreograph Crossing<br>
                                        事務局：一般社団法人ダンスアンドエンヴァイロメント
                                    </p>
                                </div>
                                <div class="right">
                                    <div class="img_w logo">
                                        <img src="<?php bloginfo('template_url'); ?>/images/page/pf_09.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="left">
                                    <p>
                                        京都を拠点とするコンタクト・インプロヴァイザー(以下CI
                                        )・アーティストと札幌を拠点とするCIアーティストが2018年より地域間交流を開始。今回の地域間交流を促す人材育成事業の実施のためにContact、Choreograph、CroosingをキーワードにC
                                        3 (シースリー)を結成した。
                                    </p>
                                    <div class="link">
                                        <div class="detail">
                                            <a href="<?php echo home_url() ?>/program2020/c32020/"><span>プログラム詳細を見る
                                                    ></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="img_w">
                                        <img src="<?php bloginfo('template_url'); ?>/images/page/pf_10.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="flex">
                                <div class="left">
                                    <h4><span class="blue">福　岡</span>福岡クリエイティブパートナー</h4>
                                    <p class="t_name">ボディー・アーツ・ラボラトリー、NPO法人コデックス</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="left">
                                    <p>
                                        ボディ・アーツ・ラボラトリー：社会におけるアーティストのためのオーガニゼーションとして2008年に設立。プログラム・ディレクター：山崎広太。http://bodyartslabo.com/
                                        NPO法人コデックス：福岡を拠点に社会とアート、特にパフォーミングアーツとの新たな関係を創造し、誰でもが創造することの楽しさ、素晴らしさを享受し、生きる力を得ることの出来る、自由で豊かな地域社会の実現に貢献することを目的として活動する特定非営利活動法人です。2008年から毎年「フリンジ（辺境）から世界へ」の理念のもとに福岡ダンスフリンジフェスティバルを開催。
                                    </p>
                                    <div class="link">
                                        <div class="detail">
                                            <a href="http://bodyartslabo.com" target="_blank"><span>団体サイト
                                                    ></span>http://bodyartslabo.com</a>
                                        </div>
                                        <div class="detail">
                                            <a href="<?php echo home_url() ?>/program2020/codex2020/"><span>プログラム詳細を見る
                                                    ></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="img_w">
                                        <img src="<?php bloginfo('template_url'); ?>/images/page/pf_11.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p_list_items slide_fade10">
                    <h3><span>Creative Study</span>クリエイティブスタディ</h3>
                    <div class="i_w">
                        <div class="item">
                            <div class="flex">
                                <div class="left">
                                    <h4><span class="green">ダンスヒストリー</span>創造環境パートナー/ダンスヒストリー</h4>
                                    <p class="t_name">ダンスヒストリー・スタディーズ</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="left">
                                    <p>
                                        芳賀直子／舞踊史研究家。舞踊、中でもバレエ史を中心に研究を行っている。専門はバレエ・リュス、バレエ・スエドワ。明治大学大学院文学部演劇学専攻博士課程前期修了。（文学修士取得）1998年のセゾン美術館における『バレエ・リュス』展での仕事を皮切りに、舞踊史研究家として執筆、講演、展覧会監修等を行うようになる。雑誌、新聞、プログラム、機内誌等各種媒体への執筆活動と共に、そのエレガントでアグレッシブな独特の語り口による講演の人気も高い。
                                    </p>
                                    <div class="link">
                                        <div class="detail">
                                            <a href="https://naokohaga.com/" target="_blank"><span>団体サイト
                                                    ></span>https://naokohaga.com/</a>
                                        </div>
                                        <div class="detail">
                                            <a href="<?php echo home_url() ?>/program2020/dhs2020/"><span>プログラム詳細を見る
                                                    ></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="img_w">
                                        <img src="<?php bloginfo('template_url'); ?>/images/page/pf_12.jpg" alt="">
                                        <span class="caption">Photo：Toshie-Kusamoto</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="flex">
                                <div class="left">
                                    <h4><span class="green">ダンスメディア</span>創造環境パートナー/ダンスメディア</h4>
                                    <p class="t_name">一般社団法人ダンス・ニッポン・アソシエイツ</p>
                                </div>
                                <div class="right">
                                    <div class="img_w logo">
                                        <img src="<?php bloginfo('template_url'); ?>/images/page/pf_13.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="left">
                                    <p>
                                        2002年から東京・青山にてダンスビエンナーレ／ダンストリエンナーレ／Dance New
                                        Airを継続開催してきた実行委員会が、2015年に設立した組織。2年に一度開催する国際ダンスフェスティバル「Dance New
                                        Air」のプロジェクトを中心にダンス・アートにまつわる様々な事業を展開。劇場空間だけではなく、屋外のスペースや映画館、ブックセンターなど様々な場所を舞台に、またダンス以外のジャンルとも積極的に手を携え、ダンスを透して新たな可能性を提案している。
                                    </p>
                                    <div class="link">
                                        <div class="detail">
                                            <a href="http://dancenewair.tokyo/" target="_blank"><span>団体サイト
                                                    ></span>http://dancenewair.tokyo/</a>
                                        </div>
                                        <div class="detail">
                                            <a href="<?php echo home_url() ?>/program2020/na2020/"><span>プログラム詳細を見る
                                                    ></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="img_w">
                                        <img src="<?php bloginfo('template_url'); ?>/images/page/pf_14.jpg" alt="">
                                        <span class="caption">Photo：Yulia-Skogoreva</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="p_list_items slide_fade10">
                    <h3><span>performance</span>パフォーマンス</h3>
                    <div class="i_w">
                        <div class="item">
                            <div class="flex">
                                <div class="left">
                                    <h4><span class="yellow">京　都</span>公演プラットフォーム</h4>
                                    <p class="t_name">ダンスでいこう2020運営チーム</p>
                                    <div class="link">
                                        <div class="detail">
                                            <a href="<?php echo home_url() ?>/program2020/sapporo-choreo20/"><span>プログラム詳細を見る
                                                    ></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="img_w">
                                        <img src="<?php bloginfo('template_url'); ?>/images/page/pf_15.jpg" alt="">
                                        <span class="caption">Photo：Toshie-Kusamoto</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
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