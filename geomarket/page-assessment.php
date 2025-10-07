<?php get_header() ?>
<main>
  <div class="l-contents">
    <section class="l-under">
      <div class="l-container">
        <h2 class="c-heading -main">無料査定のお申し込み</h2>

        <div class="l-contents__card -flow">
          <div class="p-flow">
            <h3 class="c-heading -sub">測量機器買取の流れ</h3>
            <div class="p-flow__inner">
              <div class="p-flow__innerContent">
                <figure><img src="<?php echo get_template_directory_uri();?>/assets/images/under/mail-icon.svg" alt="メールのアイコン"></figure>
                <dl>
                  <dt>
                    <span class="number">STEP 01</span>
                    <em>無料査定の申し込み</em>
                  </dt>
                  <dd>下記のお申し込みフォームに、必要事項をご記入ください。</dd>
                </dl>
              </div>
              <!-- /.p-flow__innerContent -->

              <div class="p-flow__innerContent">
                <figure><img src="<?php echo get_template_directory_uri();?>/assets/images/under/survey-icon.svg" alt="仮査定のアイコン"></figure>
                <dl>
                  <dt>
                    <span class="number">STEP 02</span>
                    <em>仮査定の開始</em>
                  </dt>
                  <dd>いただいた情報を元に仮査定をします。</dd>
                </dl>
              </div>
              <!-- /.p-flow__innerContent -->

              <div class="p-flow__innerContent">
                <figure><img src="<?php echo get_template_directory_uri();?>/assets/images/under/geo-icon01.svg" alt="測量機器のアイコン"></figure>
                <dl>
                  <dt>
                    <span class="number">STEP 03</span>
                    <em>測量機器をご送付</em>
                  </dt>
                  <dd>仮査定結果を確認していただきます。</dd>
                </dl>
              </div>
              <!-- /.p-flow__innerContent -->

              <div class="p-flow__innerContent">
                <figure><img src="<?php echo get_template_directory_uri();?>/assets/images/under/geo-icon02.svg" alt="測量機器のアイコン"></figure>
                <dl>
                  <dt>
                    <span class="number">STEP 04</span>
                    <em>本査定の開始</em>
                  </dt>
                  <dd>送付していただいた商品を本査定いたします。</dd>
                </dl>
              </div>
              <!-- /.p-flow__innerContent -->

              <div class="p-flow__innerContent">
                <figure><img src="<?php echo get_template_directory_uri();?>/assets/images/under/letter-icon.svg" alt="書類のアイコン"></figure>
                <dl>
                  <dt>
                    <span class="number">STEP 05</span>
                    <em>買取書類のご送付</em>
                  </dt>
                  <dd>買取書類を書留郵便にて送付いたします。</dd>
                </dl>
              </div>
              <!-- /.p-flow__innerContent -->

              <div class="p-flow__innerContent">
                <figure><img src="<?php echo get_template_directory_uri();?>/assets/images/under/money-icon.svg" alt="支払いのアイコン"></figure>
                <dl>
                  <dt>
                    <span class="number">STEP 06</span>
                    <em>買取代金のお支払い</em>
                  </dt>
                  <dd>銀行口座へお振込みさせていただきます。</dd>
                </dl>
              </div>
              <!-- /.p-flow__innerContent -->
            </div>
            <!-- /.p-flow__inner -->
            <p class="contanct">
                  ご相談、ご質問は、<a href="<?php echo esc_url( home_url( ) ); ?>/contact">お問い合わせフォーム</a>から気軽にお問い合わせください。
            </p>
          </div>
        </div>

        <div class="l-contents__box -grayLine">
          <div class="p-form">
            <!-- /.m_form_format -->
            <?php if( have_posts() ):
            while( have_posts() ):
            the_post(); ?>
            <?php remove_filter( 'the_content', 'wpautop' );
            the_content();
            ?>
            <?php endwhile;
          endif; ?>
            <!-- /.m_form_format -->


          </div>


        </div>
        <!-- /.l-contents__box -->
      </div>
      <!-- /  .l-container -->
    </section>
    <!-- /.l-under -->
  </div>
  <!-- /.l-contents -->
</main>

<?php get_footer(); ?>