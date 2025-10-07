<div class="l-contents">
  <div class="l-contents__footerInner">

    <div class="l-footer__contact">
      <section class="p-contact <?php if (is_singular('buy')) {
                                  echo "single-buy";
                                } ?>">
        <div class="l-container">
          <div class="p-contact__wrap">
            <p class="p-contact__text">
              まずはお気軽にご相談、お問い合わせください。<br class="pc-hide">
              ご希望商品のリクエストや点検・修理など、承ります。
            </p>
            <a href="<?php echo esc_url(home_url()); ?>/contact" class="c-button button-contact">CONTACT</a>
          </div>
        </div>

        <!-- /.l-container -->

      </section>

      <section class="p-contact-note">
        <div class="l-container">
          <p class="p-contact__text--tokusyouhou">
            GEOMARKETは古物営業法に基づく古物商の許可を得て運営しております。
            【古物営業法の規定に基づく表示】有限会社秋測　長野県公安委員会　第481102400030号
          </p>
          <a href="<?php echo esc_url(home_url()); ?>/tokusyouhou/" class="c-tokusyouhou__link">
            古物営業法の規定に基づく表示はこちら＞
          </a>
        </div>
      </section>
    </div>

    <footer class="l-footer p-footer">
      <div class="l-container">
        <div class="p-footer__wrap">
          <div class="p-footer__right">
            <div>
              <h2 class="p-footer__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-logo.svg" alt="測量機器総合マーケット ジオマーケット">
              </h2>
              <p class="p-footer__powered">Powered by AISAN TECHNOLOGY GROUP</p>
              <small>
                <p>&copy; GEOMARKET</p>
              </small>
              <div class="sns-icons -pc">
                <p class="twitter"><a href="https://twitter.com/geomarket1" target="_blank" rel="noopener"></a></p>
                <p class="face"><a href="https://www.facebook.com/geomarket3R" target="_blank" rel="noopener"></a></p>
                <p class="insta"><a href="https://www.instagram.com/geomarket_3r/" target="_blank" rel="noopener"></a></p>
              </div>
            </div>

            <div class="p-footer__info -pc">
              <ul>
                <li><a href="<?php echo esc_url(home_url()); ?>/company/">企業情報</a></li>
                <li><a href="<?php echo esc_url(home_url()); ?>/terms/">ご利用規約</a></li>
                <li><a href="<?php echo esc_url(home_url()); ?>/tokusyouhou/">特定商取引法及び古物営業法に基づく表記</a></li>
                <li><a href="<?php echo esc_url(home_url()); ?>/privacypolicy/">個人情報取り扱いに関する記載</a></li>
              </ul>
            </div>
          </div>
          <div class="p-footer__left">

            <dl class="p-footer__menu js-footer-accordion">
              <dt class="p-footer__menuTitle -arrow"><a href="<?php echo esc_url(home_url()); ?>/buy/">測量機器を探す</a><i></i></dt>
              <dd class="p-footer__menuContent">
                <ul>
                  <li>
                    <a href="<?php echo esc_url(home_url()); ?>/buy/">測量機器一覧</a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url(home_url()); ?>/buy/?orderby=meta_value_num&order=DESC">-価格が高い順</a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url(home_url()); ?>/buy/?orderby=meta_value_num&order=ASC&meta_key=nomal_price">-価格が安い順</a>
                  </li>
                </ul>
              </dd>
            </dl>

            <dl class="p-footer__menu js-footer-accordion">
              <dt class="p-footer__menuTitle -arrow"><a href="<?php echo esc_url(home_url()); ?>/reuse/">測量機器の買取</a><i></i></dt>
              <dd class="p-footer__menuContent">
                <ul>
                  <li>
                    <a href="<?php echo esc_url(home_url()); ?>/reuse#reason">選ばれる3つの理由</a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url(home_url()); ?>/reuse#strength">買取強化機器</a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url(home_url()); ?>/reuse#flow">測量機器買取の流れ</a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url(home_url()); ?>/reuse/assessment/">測量機器の無料査定</a>
                  </li>
                </ul>
              </dd>
            </dl>

            <dl class="p-footer__menu js-footer-accordion">
              <dt class="p-footer__menuTitle -arrow"><a href="<?php echo esc_url(home_url()); ?>/rental/">レンタル</a><i></i></dt>
              <dd class="p-footer__menuContent">
                <ul>
                  <li><a href="<?php echo esc_url(home_url()); ?>/rental#lineup">レンタル機器ラインナップ</a></li>
                  <li><a href="<?php echo esc_url(home_url()); ?>/rental#future">レンタルの特徴</a></li>
                  <li><a href="<?php echo esc_url(home_url()); ?>/rental#flow">レンタルの流れ</a></li>
                  <li><a href="<?php echo esc_url(home_url()); ?>/rental#faq">よくあるご質問</a></li>
                  <li><a href="<?php echo esc_url(home_url()); ?>/rental/caution/">レンタルご利用上の注意点</a></li>
                  <!-- <li><a href="">レンタルの注意点</a></li> -->
                  <!-- <li><a href="">レンタル商品の保険について</a></li> -->
                </ul>
              </dd>
            </dl>


            <dl class="p-footer__menu js-footer-accordion">
              <dt class="p-footer__menuTitle -arrow"><a href="<?php echo esc_url(home_url()); ?>/repair/">修理・点検</a><i></i></dt>
              <dd class="p-footer__menuContent">
                <ul>
                  <li><a href="<?php echo esc_url(home_url()); ?>/repair#point">修理・点検の3つのポイント</a></li>
                  <li><a href="<?php echo esc_url(home_url()); ?>/repair#about">修理・点検について</a></li>
                  <li><a href="<?php echo esc_url(home_url()); ?>/repair#flow">修理・点検の流れ</a></li>
                  <li><a href="<?php echo esc_url(home_url()); ?>/repair#faq">よくあるご質問</a></li>
                </ul>
              </dd>
            </dl>


            <dl class="p-footer__menu js-footer-accordion">
              <dt class="p-footer__menuTitle -arrow"><a href="<?php echo esc_url(home_url()); ?>/faq/">よくあるご質問</a><i></i></dt>
              <dd class="p-footer__menuContent">
                <ul>
                  <li><a href="<?php echo esc_url(home_url()); ?>/faq/">購入について</a></li>
                  <li><a href="<?php echo esc_url(home_url()); ?>/faq/faqreuse">買取について</a></li>
                  <li><a href="<?php echo esc_url(home_url()); ?>/faq/faqrental">レンタルについて</a></li>
                  <li><a href="<?php echo esc_url(home_url()); ?>/faq/faqrepair">修理・点検について</a></li>
                  <!-- <li><a href="<?php echo esc_url(home_url()); ?>/faq#">その他</a></li> -->
                </ul>
              </dd>
            </dl>

            <dl class="p-footer__menu js-footer-accordion">
              <dt class="p-footer__menuTitle -arrow"><a href="<?php echo esc_url(home_url()); ?>/useful/">お役立ち情報</a><i></i></dt>
              <dt class="p-footer__menuTitle -arrow"><a href="<?php echo esc_url(home_url()); ?>/information/">お知らせ</a><i></i></dt>
              <dd class="p-footer__menuContent">
                <ul>
                  <li><a href="<?php echo esc_url(home_url()); ?>/information/">すべてのお知らせ</a></li>
                  <li><a href="<?php echo esc_url(home_url()); ?>/information/campaign/">キャンペーン情報</a></li>
                  <li><a href="<?php echo esc_url(home_url()); ?>/information/stock/">入荷案内</a></li>
                  <li><a href="<?php echo esc_url(home_url()); ?>/information/sale/">販売情報</a></li>
                </ul>
              </dd>
            </dl>


            <!-- <div class="p-footer__menu">
              <p class="p-footer__menuTitle"><a href="<?php echo esc_url(home_url()); ?>/faq">よくあるご質問</a></p>
            </div> -->


            <!-- <div class="p-footer__menu">
              <p class="p-footer__menuTitle"><a href="<?php echo esc_url(home_url()); ?>/information">お知らせ</a></p>
            </div> -->

          </div>
        </div>
        <div class="p-footer__info -sp">
          <ul>
            <li><a href="<?php echo esc_url(home_url()); ?>/company/">企業情報</a></li>
            <li><a href="<?php echo esc_url(home_url()); ?>/terms/">ご利用規約</a></li>
            <li><a href="<?php echo esc_url(home_url()); ?>/tokusyouhou/">特定商取引法及び古物営業法に基づく表記</a></li>
            <li><a href="<?php echo esc_url(home_url()); ?>/privacypolicy/">個人情報取り扱いに関する記載</a></li>
            <li>
              <ul class="sns-icons">
                <li class="twitter"><a href="https://twitter.com/geomarket1" target="_blank" rel="noopener"></a></li>
                <li class="face"><a href="https://www.facebook.com/geomarket3R" target="_blank" rel="noopener"></a></li>
                <li class="insta"><a href="https://www.instagram.com/geomarket_3r/" target="_blank" rel="noopener"></a></li>
              </ul>
            </li>
          </ul>

        </div>

      </div>
      <p class="page-top" id="footer-page-top"><a href="">TOP</a></p>
    </footer>
  </div>
</div>
<?php wp_footer(); ?>
<!-- Sibulla tracking code start -->
<script type="text/javascript">
  (function() {
    var b = document.getElementsByTagName('script')[0],
      sib = document.createElement('script');
    sib.type = 'text/javascript';
    sib.async = true;
    sib.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'wv004.sibulla.com/dekatag/access?id=mbs8dT6R';
    b.parentNode.insertBefore(sib, b);
  }());
</script>
<!-- /Sibulla tracking code end -->
</body>

</html>