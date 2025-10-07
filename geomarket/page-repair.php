<?php get_header() ?>

<main>
  <div class="l-contents">
    <section class="l-under -sub ">
      <div class="p-hero -beige -sub">
        <div class="l-container">
          <div class="p-hero-sub__inner">
            <div class="p-hero-sub__block">
              <h2 class="c-heading -subL -rental">修理・点検</h2>
              <p class="p-hero-sub__text u-break">
                測量機器の点検・修理はJSIMA認定業者のGEOMARKETRセンターにご依頼ください!<br class="-tab">
                ジオマーケットでは、JSIMA認定業者として、国内で流通している測量機器の校正・修理等のメンテナンスサービスを承ります。<br class="-tab">
                特にライカ製品においては、国内8社であるオーソライズドパートナー店の認証を受けており、品質担保はもちろん、迅速な対応をいたしております。<br class="-tab">
                他社で断られた古い測量機器でも、弊社専門スタッフで点検・修理が可能な場合もありますので、お気軽にご相談ください。
              </p>
              <div class="p-hero-sub__buttonWrap">
                <a href="<?php echo esc_url(home_url()); ?>/contact/" class="c-button -orange -sub -arrow-white">測量機器の修理・点検はこちら</a>
              </div>
            </div>
            <div class="p-hero-sub__block">
              <figure class="p-hero-sub__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/mv-sub02.png" alt="測量機器を扱う人のイラスト">
              </figure>
              <div class="p-hero-sub__buttonWrap">
                <a href="<?php echo esc_url(home_url()); ?>/contact/" class="c-button -orange -sub -arrow-white">測量機器の修理・点検はこちら</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php get_template_part('template-parts/pankuzu'); ?>
      <section class="l-spacer -gray" id="point">
        <div class="l-container">
          <h2 class="c-heading -main -line">修理・点検の3つのポイント</h2>
          <ul class="c-card__list">
            <li class="c-card__item -itemA">
              <span class="number">01</span>
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/bachi-icon.svg" alt="バッチのアイコン">
              </figure>
              <h3 class="c-card__title -sub"><em>JSIMA認定検査員</em>による<br>点検・修理</h3>
              <p class="c-card__description">日本測量機器工業会が認定する検査員が、正確且つ迅速に点検・修理いたします。</p>
            </li>
            <li class="c-card__item -itemA">
              <span class="number">02</span>
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/down-icon.svg" alt="コスト削減のアイコン">
              </figure>
              <h3 class="c-card__title -sub">ウェブを通じて<br><em>コスト削減</em>を実現</h3>
              <p class="c-card__description">店舗を持たずに、ウェブを通じてサービス展開をするため、割安価格を実現しています。</p>
            </li>
            <li class="c-card__item -itemA">
              <span class="number">03</span>
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/time-icon.svg" alt="時計のアイコン">
              </figure>
              <h3 class="c-card__title -sub"><em>最速</em>での<br>点検・修理を実現</h3>
              <p class="c-card__description">中間業者を通さないので最速での点検調整・修理が可能です。</p>
            </li>
          </ul>
        </div>
      </section>
      <section class="l-spacer" id="about">
        <div class="l-container">
          <div class="js_tab">
            <ul class="p-main__cat js_tab_btn">
              <li class="p-main__catItem is-tab"><span>修理について</span></li>
              <li class="p-main__catItem"><span>点検について</span></li>
            </ul>
            <div class="js_tab_content">
              <div class="p-sub__repairTab-contents is-tab">
                <h3>こんな時はご相談を!</h3>
                <ul class="c-card__list">
                  <li class="c-card__item -itemA">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/battery-icon.svg" alt="バッテリーのアイコン">
                    </figure>
                    <h4 class="c-card__title -repair">バッテリーが持たなくなってきた。</h3>
                      <p class="c-card__description">バッテリーは消耗品です。中身交換（セル交換）も承っておりますので、機材の点検とともにご依頼ください。</p>
                  </li>
                  <li class="c-card__item -itemA">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/geo-icon05.svg" alt="測量機器のアイコン">
                    </figure>
                    <h4 class="c-card__title -repair">動作不良がある。</h3>
                      <p class="c-card__description">使用頻度が多かったり、過酷な環境でのご使用、経年劣化等により動作不良が生じる事がありますので、お気軽にご相談下さい。</p>
                  </li>
                  <li class="c-card__item -itemA">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/geo-icon06.svg" alt="測量機器のアイコン">
                    </figure>
                    <h4 class="c-card__title -repair">転倒・衝撃させてしまった。</h3>
                      <p class="c-card__description">現行機種はもちろん、少し古い機種でも状態に合わせて可能な限り修理いたします。もし、修理不可な場合は買取も実施しておりますので、先ずはお気軽にご相談ください。</p>
                      <a href="<?php echo esc_url(home_url()); ?>/reuse/#more" style="color: #e86d21;">買取についてはこちら</a>
                  </li>
                </ul>
              </div>
              <div class="p-sub__repairTab-contents">
                <h3>こんな時はご相談を!</h3>
                <ul class="c-card__list">
                  <li class="c-card__item -itemA">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/gia-icon.svg" alt="メンテナンスのアイコン">
                    </figure>
                    <h4 class="c-card__title -repair">一年以上点検を実施していない。</h3>
                      <p class="c-card__description">1年経過しますと気温で考えると年較差40度以上となります。機械もズレが生じることがあり、メンテナンスが必要となります。</p>
                  </li>
                  <li class="c-card__item -itemA">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/buill-icon.svg" alt="工場のアイコン">
                    </figure>
                    <h4 class="c-card__title -repair">点検はどこへ依頼すればよいか？</h3>
                      <p class="c-card__description">是非、設備の整った弊社にお任せください。機械の配送も翌日、または翌々日の受け渡しができます。(一部地域を除く)</p>
                  </li>
                  <li class="c-card__item -itemA">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/target-icon.svg" alt="精度のアイコン">
                    </figure>
                    <h4 class="c-card__title -repair">精度が出ているか不安。</h3>
                      <p class="c-card__description">精度チェックはお客様ご自身でもできますがあくまでも簡易的なものです。国家標準に基づいた校正基準機のある専門業者にお任せください。</p>
                  </li>
                </ul>
                <div class="note">
                  <em>点検の重要性について</em>
                  <p>測量機器メーカーが保証する精度を担保するため、定期的な点検・校正することをおすすめいたします。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="p-sub__bannerWrap">
            <div class="p-sub__banner">
              <div class="text-wrap">
                <h3>修理・点検に関するご依頼はこちら</h3>
                <p>測量機器の修理・点検は、GEOMARKETにお任せください。<br class="sp-hide">
                  こちらからご依頼ください。</p>
              </div>
              <div class="button-wrap">
                <a href="<?php echo esc_url(home_url()); ?>/contact" class="c-button -orange -arrow-white -main">お問い合わせはこちら</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="l-spacer -gray  target-area2" id="flow">
        <div class="l-container">
          <h2 class="c-heading -main -line">修理・点検の流れ</h2>
          <div class="p-flowSub">
            <ol class="p-flowSub__list">
              <li class="p-flowSub__item">
                <span class="number">STEP<em>01</em></span>
                <dl>
                  <dt>メールにてお問い合わせ</dt>
                  <dd>まずは、気軽にお問い合わせください。<br>
                    <a href="<?php echo esc_url(home_url()); ?>/contact">「お問い合わせフォーム」</a>より修理・点検のご依頼をお願いします。
                  </dd>
                </dl>
              </li>
              <li class="p-flowSub__item">
                <span class="number">STEP<em>02</em></span>
                <dl>
                  <dt>測量機器をご送付下さい</dt>
                  <dd>修理・点検内容を確認していただき、
                    商品を下記、またはメールに記載のテクノセンターに送付してください。<br>
                    <a href="" class="md-btn" data-target="300">
                      送付いただく際の注意事項、送付先はこちら
                    </a>
                    <div id="300" class="modal">
                      <div class="md-overlay md-close"></div>
                      <div class="md-contents">
                        <a class="md-xmark md-close">
                          <span></span>
                          <span></span>
                        </a>
                        <div class="md-inner">
                          <div class="p-sub modal-page">
                            <h3 class="c-heading">送付いただく際の注意事項、送付先</h3>
                            <p>修理品が運搬中に破損しないようにするため、梱包には十分に注意してください。<br>
                              不具合箇所に関する内容のメモを同梱ください。
                            </p>
                            <dl class="box01">
                              <dt>■送付先</dt>
                              <dd>
                                <p>有限会社 秋測　テクノセンター</p>
                                〒010-1613 秋田県秋田市新屋朝日町1-12<br>
                                TEL : <em>050-3645-2272</em> / FAX : <em>050-3606-5771</em>
                              </dd>
                            </dl>
                            <div class="box02">
                              <dl>
                                <dt>※送付時のご注意事項</dt>
                                <dd>
                                  <em>送料について</em>
                                  こちらに測量機器を送付頂く場合、送料はお客様負担となります。予めご了承ください。
                                  修理・点検に関するよくある質問をまとめましたので、「<a href="<?php echo esc_url(home_url()); ?>/faq/faqrepair">よくあるご質問</a>」ページも併せてご確認ください。
                                </dd>
                              </dl>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </dd>
                </dl>
              </li>
              <li class="p-flowSub__item">
                <span class="number">STEP<em>03</em></span>
                <dl>
                  <dt>お見積書の発行</dt>
                  <dd>お客様からいただいたお申し込み内容に基づいて、修理・点検料金のお見積書を発行いたします。
                  </dd>
                </dl>
              </li>
              <li class="p-flowSub__item">
                <span class="number">STEP<em>04</em></span>
                <dl>
                  <dt>修理・点検代金のお支払い</dt>
                  <dd>手続きメール到着後10日以内に、指定の銀行口座へお振込みください。
                  </dd>
                </dl>
              </li>
              <li class="p-flowSub__item">
                <span class="number">STEP<em>05</em></span>
                <dl>
                  <dt>測量機器のご返却</dt>
                  <dd>修理・点検が完了した機器は、修理手続きとあわせてメールにてご連絡いたします。<br>
                    内容をご確認ください。
                  </dd>
                </dl>
              </li>
            </ol>
          </div>
        </div>
      </section>
      <section class="l-spacer -sub" id="faq">
        <div class="l-container">
          <h2 class="c-heading -main -line">よくあるご質問</h2>
          <p class="p-sub__description">
            測量機器の修理・点検について、お客さまからよくお問い合わせいただく質問をまとめました。<br>
            ご利用方法などの疑問に回答いたします。<br>
            こちらに記載のないご質問については、<a href="<?php echo esc_url(home_url()); ?>/contact/">お問い合わせフォーム</a>よりお気軽にお問い合わせください。
          </p>
          <div class="p-faq -sub target-area">
            <dl class="js-accordion">
              <dt><span>メーカーや他社で修理できなかった機械も修理できるのでしょうか？</span></dt>
              <dd><span>可能な限り対応いたします。故障内容により、お受けできないこともございます。<br>また、部品交換や修理が必要のない点検調整等は基本的には可能ですので、一度ご相談ください。
                </span></dd>
            </dl>
            <dl class="js-accordion">
              <dt><span>機械を送付する箱がありません。</span></dt>
              <dd><span>機械送付用の通い箱(送料有料)のご用意もあります。ご利用の際にはお問合せください。</span></dd>
            </dl>
            <dl class="js-accordion">
              <dt><span>校正証明書の発行は可能ですか？</span></dt>
              <dd><span>日本測量機器工業会(JSIMA) の書式で発行が可能です。料金につきましてはお問合せください。</span></dd>
            </dl>
            <dl class="js-accordion">
              <dt><span>点検調整の日数はどのくらいですか？</span></dt>
              <dd><span>着手後、中2日で発送致します。修理が発生した場合は別途ご連絡いたします。</span></dd>
            </dl>
            <dl class="js-accordion">
              <dt><span>代替機の貸し出しは可能ですか？</span></dt>
              <dd><span>有料にて貸出可能です。必要な際には、<a href="<?php echo esc_url(home_url()); ?>/contact/">こちら</a>よりお問合せください。</span></dd>
            </dl>
          </div>
        </div>
      </section>
    </section>
    <?php get_template_part('template-parts/tour-button'); ?>
  </div>
</main>

<?php get_footer(); ?>