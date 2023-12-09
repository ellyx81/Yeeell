<?php
/*Template Name: Contact Page*/
get_header();
?>
<section class="banner">
    <img class="banner__image" src="<?php echo get_template_directory_uri(); ?>/img/contact-page/contact-banner.png" alt />
    <h1 class="banner__text wow animate__animated animate__fadeInDown">お問い合わせ</h1>
</section>
<main>
    <section class="contact">
        <p class="contact__top-instruction">弊社へのお問い合わせは以下のフォームをご利用ください。</p>
        <?php echo do_shortcode('[mwform_formkey key="17"]'); ?>
        <!-- <div class="contact__form" action name="contact-form">
            <p class="contact__top-instruction">弊社へのお問い合わせは以下のフォームをご利用ください。</p>
            <div class="contact__terms">
                <h2 class="contact__terms-title">個人情報のお取り扱いについて</h2>
                <p class="contact__terms-instruction">
                    以下の個人情報の取り扱いに関する事項についてご確認いただき、
                    <br />同意いただける方は「同意する」を選択して進んで下さい。
                </p>
                <div class="contact__terms-scroll">
                    <p class="contact__terms-paragraph">
                        これはダミー文字です(以下、「当社」といいます)は、建築に関するコンサルティング業務・ソフトウェアの開発及び販売業務を遂行する上で、お客様の個人情報がプライバシーを構成する重要な情報であることを深く認識し、業務において個人情報を取り扱う場合には、個人情報に関する法令及び個人情報保護のために定めた社内規定を定め、また、組織体制を整備し、個人情報の適切な保護に努めることにより、お客様を尊重し、当社に対する期待と信頼に応えていきます。
                        <br />
                        <br />個人情報保護に関する法令・規範の遵守
                        <br />
                        <br />作かンきへ龍無ムエハラ変71領うトねぱ玄界ロ心表概オヤモム図画ナフ百掲ヒルヱミ禁和ふ境夫フオレ任権イヒア本善へ配響月91底肉場はち。雇よッ応彦ヤシ打車シスウ著尚便ヘリ聞図けそト老示れラ容米要歳えぽレ送放フょ木子ソ病刺掘顧由ぽびくづ。偉8葉タト購6動ホニソ下著りま見手るけ上供びやさへ引国し選妻ノニ続度ネフマ雪需ドめくク砂学通侍ぽ。
                        <br />
                        <br />銀71紙ヤカユエ分事ラヲウエ通要け健読らょ登後重ハキ人会トそ探養ゃ金木きン女地ワノ真渡られむ教1獲残ワチタ聞対モ話菜そさ街線ばょ様派北リル。間ひぼトや医意投ユルリア場客会ね少薦つトべ明9団レテルセ場著スヲイニ氏業謙接キミ参多きーこく掲北タフ向2落サケ室3村ぽなむル維安アムリレ均待頼ッれるす。
                        <br />
                    </p>
                </div>
                <div class="contact__terms-check">
                    <input class="contact__terms-check-box" type="checkbox" name="terms" />
                    <label class="contact__terms-check-label">同意する</label>
                </div>
            </div>
            <div class="contact__input">
                <div class="contact__input-label">
                    <label class="contact__input-label-text">お名前</label>
                    <div class="contact__input-label-required"></div>
                </div>
                <div class="contact__input-box-wrap">
                    <input class="contact__input-box" type="text" name="lname" placeholder="姓" required />
                    <input class="contact__input-box" type="text" name="fname" placeholder="名" required />
                </div>
            </div>
            <div class="contact__input">
                <div class="contact__input-label">
                    <label class="contact__input-label-text">お名前（フリガナ）</label>
                    <div class="contact__input-label-required"></div>
                </div>
                <div class="contact__input-box-wrap">
                    <input class="contact__input-box" type="text" name="lname" placeholder="セイ" required />
                    <input class="contact__input-box" type="text" name="fname" placeholder="メイ" required />
                </div>
            </div>
            <div class="contact__input">
                <div class="contact__input-label">
                    <label class="contact__input-label-text">所在地</label>
                    <div class="contact__input-label-required"></div>
                </div>
                <select class="contact__input-box contact__input-box--select" id="location" name="location" required>
                    <option class="contact__input-option" disabled selected value></option>
                    <option class="contact__input-option" value="option 1">オプション1</option>
                    <option class="contact__input-option" value="option 2">オプション2</option>
                    <option class="contact__input-option" value="option 3">オプション3</option>
                </select>
            </div>
            <div class="contact__input">
                <div class="contact__input-label">
                    <label class="contact__input-label-text">会社名・団体名</label>
                    <div class="contact__input-label-required contact__input-label-required--not-required"></div>
                </div>
                <input class="contact__input-box" type="text" name="org" />
            </div>
            <div class="contact__input">
                <div class="contact__input-label">
                    <label class="contact__input-label-text">部署</label>
                    <div class="contact__input-label-required contact__input-label-required--not-required"></div>
                </div>
                <input class="contact__input-box" type="text" name="dept" />
            </div>
            <div class="contact__input">
                <div class="contact__input-label">
                    <label class="contact__input-label-text">役職</label>
                    <div class="contact__input-label-required contact__input-label-required--not-required"></div>
                </div>
                <input class="contact__input-box" type="text" name="director" />
            </div>
            <div class="contact__input">
                <div class="contact__input-label">
                    <label class="contact__input-label-text">メールアドレス</label>
                    <div class="contact__input-label-required"></div>
                </div>
                <input class="contact__input-box" type="email" name="email" required />
            </div>
            <div class="contact__input">
                <div class="contact__input-label">
                    <label class="contact__input-label-text">電話番号</label>
                    <div class="contact__input-label-required"></div>
                </div>
                <input class="contact__input-box contact__input-box--tel" type="tel" name="tel" required />
            </div>
            <div class="contact__input contact__input--inquiry">
                <div class="contact__input-label">
                    <label class="contact__input-label-text">お問い合わせ内容</label>
                    <div class="contact__input-label-required"></div>
                </div>
                <textarea class="contact__input-box contact__input-box--textarea" name="inquiry" required></textarea>
            </div>
            <button class="contact__btn" type="button" name="proceed">確認画面に進む</button>
        </div> -->
    </section>
</main><?php get_footer(); ?>
