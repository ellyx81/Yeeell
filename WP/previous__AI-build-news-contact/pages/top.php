<?php
/*Template Name: Top Page*/
get_header();
?>
<main class="main">
    <section class="main__section hero">
        <div class="hero__image"></div>
        <div class="hero__card">
            <p class="hero__top-text">Pick up!</p>
            <div class="hero__details-container">
                <span class="hero__subtitle">人気インフルエンサー</span>
                <h2 class="hero__title">ちゅるちゃんねる</h2>
                <div class="hero__title-decoration"></div>
                <p class="hero__description">人中短縮や中顔面が短く見えるハイライトの入れ方など独自のメイク法を編み出し高クオリティなメイク法を発信している『ちゅるちゃんねる』</p>
            </div>
            <div class="hero__subs-container">
                <div class="hero__subs-decoration"></div>
                <div class="hero__subs-wrapper">
                    <p class="hero__subs-text">チャンネル登録者数</p>
                    <h2 class="hero__subs-number">
                        197,000
                        <span class="hero__subs-unit">人</span>
                    </h2>
                </div>
                <div class="hero__subs-decoration hero__subs-decoration--right"></div>
            </div>
        </div>
        <div class="hero__widget">
            <div class="hero__widget-dialogue wow animate__animated animate__heartBeat">
                <p class="hero__widget-dialogue-text">約 60 秒で完了 ！</p>
            </div>
            <a class="hero__widget-seal" href="#">
                <img class="hero__widget-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/plane-icon.svg" alt />
                <p class="hero__widget-text">お問い合わせ</p>
            </a>
        </div>
    </section>
    <section class="main__section video skew js-section">
        <div class="video__container skew__remove-skew">
            <img class="title" src="<?php echo get_template_directory_uri(); ?>/img/index-page/video/video-title.svg" alt />
            <div class="video__items">
                <div class="video__wrapper">
                    <div class="video__box">
                        <div class="video-player js-video-item">
                            <img class="video-player__thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/index-page/video/movie-1.jpg" alt />
                            <div class="video-player__icon"></div>
                            <span class="video-player__url js-url">https://www.youtube.com/embed/xfQlUmeGmdk</span>
                        </div>
                        <p class="video__views-text wow animate__animated animate__zoomIn animate__faster">
                            １か月間で
                            <span class="video__views-amount">74,563</span> 回再生！
                        </p>
                    </div>
                </div>
                <div class="video__wrapper">
                    <div class="video__box">
                        <div class="video-player js-video-item">
                            <img class="video-player__thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/index-page/video/movie-2.jpg" alt />
                            <div class="video-player__icon"></div>
                            <span class="video-player__url js-url">https://www.youtube.com/embed/xQ6NuBub75E</span>
                        </div>
                        <p class="video__views-text wow animate__animated animate__zoomIn animate__faster">
                            １か月間で
                            <span class="video__views-amount">42,825</span> 回再生！
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main__section features skew">
        <div class="features__container skew__remove-skew">
            <div class="features__top-section">
                <h2 class="features__title">
                    こんな
                    <span class="features__title-highlight">お悩み</span>をお持ちの企業様にオススメ
                </h2>
                <div class="features__dialogue-container">
                    <div class="features__dialogue-bubble wow animate__animated animate__fadeInDown">
                        <p class="features__dialogue-bubble-text">
                            新商品やサービスを
                            <br />いち早く広めたい ！
                        </p>
                    </div>
                    <div class="features__dialogue-bubble features__dialogue-bubble--second wow animate__animated animate__fadeInDown">
                        <p class="features__dialogue-bubble-text">
                            適切なインフルエンサーの
                            <br />探し方がわからない ！
                        </p>
                    </div>
                    <div class="features__dialogue-bubble features__dialogue-bubble--third wow animate__animated animate__fadeInDown">
                        <p class="features__dialogue-bubble-text">
                            女性に
                            <br />特化した
                            <br />PR がしたい !
                        </p>
                    </div>
                    <div class="features__dialogue-bubble features__dialogue-bubble--fourth wow animate__animated animate__fadeInDown">
                        <p class="features__dialogue-bubble-text">
                            ユーザーの
                            <br />反応を
                            <br />確かめたい ！
                        </p>
                    </div>
                </div>
            </div>
            <div class="features__bottom-section">
                <h2 class="features__title">
                    こんな
                    <span class="features__title-highlight features__title-highlight--blue">アイテム</span>を紹介することが得意です ！
                </h2>
                <div class="features__offer-container">
                    <div class="features__offer-item wow animate__animated animate__bounceIn animate__slow">
                        <div class="features__offer-circle">
                            <img class="features__offer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/makeup-icon.svg" alt />
                            <span class="features__offer-text">コスメ</span>
                        </div>
                    </div>
                    <div class="features__offer-item wow animate__animated animate__bounceIn animate__slow">
                        <div class="features__offer-circle">
                            <img class="features__offer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/skin-products-icon.svg" alt />
                            <span class="features__offer-text">スキンケア</span>
                        </div>
                    </div>
                    <div class="features__offer-item wow animate__animated animate__bounceIn animate__slow">
                        <div class="features__offer-circle">
                            <img class="features__offer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/dress-icon.svg" alt />
                            <span class="features__offer-text">洋服</span>
                        </div>
                    </div>
                    <div class="features__offer-item wow animate__animated animate__bounceIn animate__slow">
                        <div class="features__offer-circle">
                            <img class="features__offer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/hair-blower-icon.svg" alt />
                            <span class="features__offer-text">生活雑貨</span>
                        </div>
                    </div>
                    <div class="features__offer-item wow animate__animated animate__bounceIn animate__slow">
                        <div class="features__offer-circle">
                            <img class="features__offer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/drinks-icon.svg" alt />
                            <span class="features__offer-text">食品</span>
                        </div>
                    </div>
                    <div class="features__offer-item wow animate__animated animate__bounceIn animate__slow">
                        <div class="features__offer-circle">
                            <img class="features__offer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/comb-icon.svg" alt />
                            <span class="features__offer-text">ヘアケア</span>
                        </div>
                    </div>
                    <div class="features__offer-item wow animate__animated animate__bounceIn animate__slow">
                        <div class="features__offer-circle">
                            <img class="features__offer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/plane-ticket-icon.svg" alt />
                            <span class="features__offer-text">旅行</span>
                        </div>
                    </div>
                    <div class="features__offer-item wow animate__animated animate__bounceIn animate__slow">
                        <div class="features__offer-circle">
                            <img class="features__offer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/television-icon.svg" alt />
                            <span class="features__offer-text">アニメ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main__section call-to-action skew">
        <div class="call-to-action__container skew__remove-skew">
            <h2 class="call-to-action__headline">Contact us</h2>
            <p class="call-to-action__text">
                広告出稿がはじめてのお客様にも
                <br />わかりやすくご説明いたします
            </p>
            <div class="call-to-action__bottom-container">
                <div class="call-to-action__dialogue">
                    <span class="call-to-action__dialogue-text">見積無料</span>
                </div>
                <button class="call-to-action__btn">
                    <img class="call-to-action__btn-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/plane-icon-pink.svg" alt />
                    <span class="call-to-action__btn-text">相談してみる</span>
                </button>
            </div>
        </div>
    </section>
    <section class="main__section pr-points skew">
        <div class="pr-points__container skew__remove-skew">
            <div class="pr-points__title">
                <div class="pr-points__title-decoration"></div>
                <h2 class="pr-points__title-text">
                    ちゅるちゃんねるの
                    <img class="pr-points__title-highlight" src="<?php echo get_template_directory_uri(); ?>/img/index-page/pr-points/title-highlight.svg" alt />ポイント
                </h2>
                <div class="pr-points__title-decoration pr-points__title-decoration--right"></div>
            </div>
            <div class="pr-points__section-container">
                <div class="pr-points__section">
                    <div class="pr-points__image-wrapper wow animate__animated animate__fadeInLeft">
                        <img class="pr-points__image" src="<?php echo get_template_directory_uri(); ?>/img/index-page/pr-points/image1.png" alt />
                    </div>
                    <div class="pr-points__text-container wow animate__animated animate__fadeInRight">
                        <div class="pr-points__heading-container">
                            <div class="pr-points__bullet"></div>
                            <h2 class="pr-points__heading">独自のメイク法</h2>
                        </div>
                        <p class="pr-points__paragraph">
                            人中短縮や中顔面が短く見えるハイライトの入れ方など独自のメイク法を編み出し高クオリティなメイク法を発信。
                            <br />ちょっとした工夫で整形無しでも変われる ”自然” なメイク方法を教えてくれると好評をいただいております ！
                        </p>
                    </div>
                </div>
                <div class="pr-points__section pr-points__section--reverse">
                    <div class="pr-points__image-wrapper wow animate__animated animate__fadeInLeft">
                        <img class="pr-points__image" src="<?php echo get_template_directory_uri(); ?>/img/index-page/pr-points/image2.png" alt />
                    </div>
                    <div class="pr-points__text-container wow animate__animated animate__fadeInRight">
                        <div class="pr-points__heading-container">
                            <div class="pr-points__bullet pr-points__bullet--second"></div>
                            <h2 class="pr-points__heading">視聴者に寄り添った企画</h2>
                        </div>
                        <p class="pr-points__paragraph">
                            視聴者への寄り添い度は抜群 ！ ！
                            <br />元々二重まぶたですが、 奥二重に悩んでいる視聴者も多いということで、 アイテープを使用して奥二重にしたメイクを実施。
                            <br />どこまでも視聴者に寄り添うスタイルが 「ここまでやってくれる人はいない」 と大変好評です。
                        </p>
                    </div>
                </div>
                <div class="pr-points__section">
                    <div class="pr-points__image-wrapper wow animate__animated animate__fadeInLeft">
                        <img class="pr-points__image" src="<?php echo get_template_directory_uri(); ?>/img/index-page/pr-points/image3.png" alt />
                    </div>
                    <div class="pr-points__text-container wow animate__animated animate__fadeInRight">
                        <div class="pr-points__heading-container">
                            <div class="pr-points__bullet pr-points__bullet--third"></div>
                            <h2 class="pr-points__heading">30代からの支持も</h2>
                        </div>
                        <p class="pr-points__paragraph">
                            30代に見えない30歳。
                            <br />以前は20代からの支持を多く集めていましたが、 30代に入ったことで30代以降からの検索流入が増えています。
                            <br />30代あざとい系女子の冬メイクは1ヶ月で約30万回再生を獲得しております。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main__section case skew js-section">
        <div class="case__main-container skew__remove-skew">
            <img class="title case__title" src="<?php echo get_template_directory_uri(); ?>/img/index-page/case/case-title.svg" alt />
            <div class="case__outer-border">
                <div class="case__box splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide case__container">
                                <h2 class="case__heading">【豊胸】 整形巨乳の宿命</h2>
                                <div class="case__upper-container">
                                    <div class="case__left-section">
                                        <h3 class="case__video-details">
                                            <span class="case__video-category">案件商品</span>
                                            <span class="case__video-title">ナイトブラ</span>
                                        </h3>
                                        <div class="case__video">
                                            <div class="video-player js-video-item">
                                                <img class="video-player__thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/index-page/case/movie-6.jpg" alt />
                                                <div class="video-player__icon"></div>
                                                <span class="video-player__url js-url">https://www.youtube.com/embed/b2LrY4CCBmU</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="case__paragraph">
                                        持ち前のトーク力で視聴者の悩みに寄り添った訴求を行いました。
                                        <br />大幅に売上へ直結したとクライアント様より大変高評価をいただきました ！
                                    </p>
                                </div>
                                <h3 class="case__views-text wow animate__animated animate__zoomIn animate__faster">
                                    投稿から 1 か月で
                                    <span class="case__views-newline">
                                        <span class="case__views-amount">40,058</span>回再生 !
                                    </span>
                                </h3>
                            </li>
                            <li class="splide__slide case__container">
                                <h2 class="case__heading">【超自然】 ナチュラルすぎる整形メイクでデカ目タレ目鬼盛れ</h2>
                                <div class="case__upper-container">
                                    <div class="case__left-section">
                                        <h3 class="case__video-details">
                                            <span class="case__video-category">案件商品</span>
                                            <span class="case__video-title">アイライナー</span>
                                        </h3>
                                        <div class="case__video">
                                            <div class="video-player js-video-item">
                                                <img class="video-player__thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/index-page/case/movie-8.jpg" alt />
                                                <div class="video-player__icon"></div>
                                                <span class="video-player__url js-url">https://www.youtube.com/embed/xfQlUmeGmdk</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="case__paragraph">
                                        アイライナー案件で様々なカラーを駆使しながらも、 自然にデカ目に見えるメイク動画で訴求しました。
                                        <br />メイクテクを伝授する企画でしたが、 商材の特徴をうまく活かしたメイクにすることで自然に特徴をアピール。
                                    </p>
                                </div>
                                <h3 class="case__views-text wow animate__animated animate__zoomIn animate__faster">
                                    投稿から 1 か月で
                                    <span class="case__views-newline">
                                        <span class="case__views-amount">47,554</span>回再生 !
                                    </span>
                                </h3>
                            </li>
                            <li class="splide__slide case__container">
                                <h2 class="case__heading case__heading--small">
                                    あざとい / 中国強め / 小悪魔 / 神コスメとメイクでどんな顔にでもなれる ！
                                    <br />こんなの魔法としか言いようがない
                                </h2>
                                <div class="case__upper-container">
                                    <div class="case__left-section">
                                        <h3 class="case__video-details">
                                            <span class="case__video-category">案件商品</span>
                                            <span class="case__video-title">アイシャドウ・リップ</span>
                                        </h3>
                                        <div class="case__video">
                                            <div class="video-player js-video-item">
                                                <img class="video-player__thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/index-page/case/movie-2.jpg" alt />
                                                <div class="video-player__icon"></div>
                                                <span class="video-player__url js-url">https://www.youtube.com/embed/xQ6NuBub75E</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="case__paragraph case__paragraph--small">
                                        1つの動画で3つのメイクを実施。
                                        <br />商品種類の豊富さをアピールするため、 色や塗り方次第でどんな顔にもなれるということを訴求しました。
                                        <br />可愛いめのメイクや強めのメイクなど雰囲気の違うメイクを施すことによって様々好みの視聴者が楽しめるような企画を考案しました。
                                    </p>
                                </div>
                                <h3 class="case__views-text wow animate__animated animate__zoomIn animate__faster">
                                    投稿から 1 か月で
                                    <span class="case__views-newline">
                                        <span class="case__views-amount">42,825</span>回再生 !
                                    </span>
                                </h3>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main__section about skew">
        <div class="about__container skew__remove-skew">
            <img class="about__logo" src="<?php echo get_template_directory_uri(); ?>/img/logos/yeeell-logo.svg" alt />
            <h2 class="about__title">YEEELL とは？</h2>
            <p class="about__paragraph">
                女性をターゲットとしたインフルエンサーマーケティングが得意な会社です。
                <br />女性クリエイターが多数在籍しており、 女性にターゲットを絞ったアプローチができます。
                <br />
                <br />事前に課題をお伺いし適切な広告メニューをご提案
                <br />お客様の目的に合わせて広告を運用いたします。
                <br />その他ブランディングや売上拡大のための
                <br />総合的なサポートも可能です。
                <br />
                <br />まずはお気軽にご相談ください ！
            </p>
        </div>
    </section>
    <section class="main__section call-to-action skew">
        <div class="call-to-action__container skew__remove-skew">
            <h2 class="call-to-action__headline">Contact us</h2>
            <p class="call-to-action__text">
                インフルエンサーマーケティングが
                <br />初めての企業様でも安心です ！
            </p>
            <div class="call-to-action__bottom-container">
                <div class="call-to-action__dialogue call-to-action__dialogue--larger">
                    <span class="call-to-action__dialogue-text call-to-action__dialogue-text--smaller">
                        お気軽に
                        <br />ご相談ください
                    </span>
                </div>
                <button class="call-to-action__btn">
                    <img class="call-to-action__btn-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/plane-icon-pink.svg" alt />
                    <span class="call-to-action__btn-text">話を聞いてみる</span>
                </button>
            </div>
        </div>
    </section>
    <section class="main__section recommendation skew js-section">
        <div class="recommendation__container skew__remove-skew">
            <div class="recommendation__title">
                <div class="recommendation__title-decoration"></div>
                <img class="title" src="<?php echo get_template_directory_uri(); ?>/img/index-page/recommendation/recommendation-title.svg" alt />
                <div class="recommendation__title-decoration recommendation__title-decoration--right"></div>
            </div>
            <div class="recommendation__box">
                <p class="recommendation__top-text">Recommended</p>
                <div class="video-player recommendation__video js-video-item">
                    <img class="video-player__thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/index-page/recommendation/movie-7.jpg" alt />
                    <div class="video-player__icon"></div>
                    <span class="video-player__url js-url">https://www.youtube.com/embed/2JS02YnZ5Bc</span>
                </div>
                <div class="recommendation__right-section">
                    <div class="recommendation__top-container">
                        <div class="recommendation__user-icon"></div>
                        <h3 class="recommendation__user-name">クリエイター担当者</h3>
                    </div>
                    <p class="recommendation__paragraph">
                        人中短縮や中顔面短縮メイクなどの整形級メイクはちゅるにおまかせください ！
                        <br />スキンケアオタクでもあるため、 ターゲット層へ最適なご提案をさせていただきます。 高身長を活かしたファッション動画などマルチに対応できますので、 様々なジャンルでお気軽にご相談ください。
                    </p>
                    <div class="recommendation__bottom-container">
                        <div class="recommendation__like-icon"></div>
                        <div class="recommendation__comment-icon"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main__section steps skew">
        <div class="steps__container skew__remove-skew">
            <img class="title steps__title" src="<?php echo get_template_directory_uri(); ?>/img/index-page/steps/steps-title.svg" alt />
            <div class="steps__items">
                <div class="steps__box wow animate__animated animate__fadeInDown">
                    <h3 class="steps__text">ヒアリング</h3>
                    <img class="steps__icon" src="<?php echo get_template_directory_uri(); ?>/img/index-page/steps/step-1.svg" alt />
                </div>
                <div class="steps__box wow animate__animated animate__fadeInDown">
                    <h3 class="steps__text">企画・キャスティング</h3>
                    <img class="steps__icon" src="<?php echo get_template_directory_uri(); ?>/img/index-page/steps/step-2.svg" alt />
                </div>
                <div class="steps__box wow animate__animated animate__fadeInDown">
                    <h3 class="steps__text">制作</h3>
                    <img class="steps__icon" src="<?php echo get_template_directory_uri(); ?>/img/index-page/steps/step-3.svg" alt />
                </div>
                <div class="steps__box wow animate__animated animate__fadeInDown">
                    <h3 class="steps__text">投稿・レポート</h3>
                    <img class="steps__icon" src="<?php echo get_template_directory_uri(); ?>/img/index-page/steps/step-4.svg" alt />
                </div>
            </div>
        </div>
    </section>
    <section class="main__section faq skew">
        <div class="faq__main-container skew__remove-skew">
            <img class="title faq__title" src="<?php echo get_template_directory_uri(); ?>/img/index-page/faq/faq-title.svg" alt />
            <ul class="faq__container js-faqs">
                <li class="faq__box js-faq">
                    <div class="faq__question">
                        <span class="faq__question-number">Q1</span>
                        <h3 class="faq__question-title">料金はどのくらいかかりますか？</h3>
                        <div class="faq__question-btn">
                            <div class="faq__question-horizontal-line"></div>
                            <div class="faq__question-vertical-line"></div>
                        </div>
                    </div>
                    <div class="faq__answer js-answer">
                        <span class="faq__answer-label">A</span>
                        <p class="faq__answer-text">
                            クリエイターに応じて金額が異なります。
                            <br />弊社では10万円～販売しているクリエイターがおりますので、 予算にあわせたご提案が可能です。
                        </p>
                    </div>
                </li>
                <li class="faq__box js-faq">
                    <div class="faq__question">
                        <span class="faq__question-number">Q2</span>
                        <h3 class="faq__question-title">インフルエンサーの年齢層は？</h3>
                        <div class="faq__question-btn">
                            <div class="faq__question-horizontal-line"></div>
                            <div class="faq__question-vertical-line"></div>
                        </div>
                    </div>
                    <div class="faq__answer js-answer">
                        <span class="faq__answer-label">A</span>
                        <p class="faq__answer-text">20代のインフルエンサーが中心となりますが、 40代のインフルエンサーも所属しており、 幅広いターゲットへ訴求が可能です。</p>
                    </div>
                </li>
                <li class="faq__box js-faq">
                    <div class="faq__question">
                        <span class="faq__question-number">Q3</span>
                        <h3 class="faq__question-title">発注から実施までどれくらいかかりますか？</h3>
                        <div class="faq__question-btn">
                            <div class="faq__question-horizontal-line"></div>
                            <div class="faq__question-vertical-line"></div>
                        </div>
                    </div>
                    <div class="faq__answer js-answer">
                        <span class="faq__answer-label">A</span>
                        <p class="faq__answer-text">
                            1ヵ月を想定しております。
                            <br />お客様のご状況に応じて調整することも可能でございます。
                        </p>
                    </div>
                </li>
                <li class="faq__box js-faq">
                    <div class="faq__question">
                        <span class="faq__question-number">Q4</span>
                        <h3 class="faq__question-title">動画公開前に確認することは可能でしょうか？</h3>
                        <div class="faq__question-btn">
                            <div class="faq__question-horizontal-line"></div>
                            <div class="faq__question-vertical-line"></div>
                        </div>
                    </div>
                    <div class="faq__answer js-answer">
                        <span class="faq__answer-label">A</span>
                        <p class="faq__answer-text">1回のみとなりますが、 動画を公開する前に事前にご確認を頂くことが可能です。</p>
                    </div>
                </li>
                <li class="faq__box js-faq">
                    <div class="faq__question">
                        <span class="faq__question-number">Q5</span>
                        <h3 class="faq__question-title">直接インフルエンサーと取引するのと何が違うのでしょうか？</h3>
                        <div class="faq__question-btn">
                            <div class="faq__question-horizontal-line"></div>
                            <div class="faq__question-vertical-line"></div>
                        </div>
                    </div>
                    <div class="faq__answer js-answer">
                        <span class="faq__answer-label">A</span>
                        <p class="faq__answer-text">動画制作についてのディレクションなどは弊社にて対応するため、 お客様のご負担や工数を最小限におさえることができます。</p>
                    </div>
                </li>
                <li class="faq__box js-faq">
                    <div class="faq__question">
                        <span class="faq__question-number">Q6</span>
                        <h3 class="faq__question-title">とりあえず話だけ聞いてみたいのですが？</h3>
                        <div class="faq__question-btn">
                            <div class="faq__question-horizontal-line"></div>
                            <div class="faq__question-vertical-line"></div>
                        </div>
                    </div>
                    <div class="faq__answer js-answer">
                        <span class="faq__answer-label">A</span>
                        <p class="faq__answer-text">ご相談頂くだけでも結構です。弊社からのご提案や実績などの話をお聞きになって、 ご検討頂けますと幸いです。</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main><?php get_footer(); ?>
