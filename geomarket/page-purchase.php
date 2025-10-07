<?php
/**
 * Template Name: 商品のご購入
 */
get_header();
?>
<main>
  <div class="l-contents">
    <section class="l-under -contact">
      <div class="l-container">

        <!-- 測量機器を探すのお問い合わせ -->
        <div class="p-seek__contactContent">
          <h2 class="c-heading -main">商品のご購入</h2>

          <div class="l-contents__card -flow">
            <div class="p-flow">
              <h3 class="c-heading -sub">測量機器のご購入までの流れ</h3>
              <div class="p-flow__inner">

                <div class="p-flow__innerContent -buy">
                  <figure><img src="<?php echo get_template_directory_uri();?>/assets/images/under/geo-icon01.svg" alt="メール"></figure>
                  <dl>
                    <dt>
                      <span class="number">STEP 01</span>
                      <em>ご希望の機器を選択する</em>
                    </dt>
                    <dd>販売価格、商品の状態を良くご確認いただき、ご希望の機器を選択してください。</dd>
                  </dl>
                </div>
                <!-- /.p-flow__innerContent -->

                <div class="p-flow__innerContent -buy">
                  <figure><img src="<?php echo get_template_directory_uri();?>/assets/images/under/letter-icon.svg" alt="仮査定"></figure>
                  <dl>
                    <dt>
                      <span class="number">STEP 02</span>
                      <em>お客様情報の入力</em>
                    </dt>
                    <dd>下記のフォームにてお客様情報をご入力いただき、購入手続きを進めてください。</dd>
                  </dl>
                </div>
                <!-- /.p-flow__innerContent -->

                <div class="p-flow__innerContent -buy">
                  <figure><img src="<?php echo get_template_directory_uri();?>/assets/images/under/money-icon.svg" alt="メール"></figure>
                  <dl>
                    <dt>
                      <span class="number">STEP 03</span>
                      <em>ご購入代金のお支払い<br class="pc-hide">（銀行振込／PayPal）</em>
                    </dt>
                    <dd>ご入力いただいたメールアドレス宛にお振込みのご案内をお送りします。ご希望のお支払い方法にてご購入代金をお振込みください。<br>
                      <span class="border">※ご注文確定日より１週間以内に入金が無い場合はキャンセル扱い</span>とさせていただきます。
                    </dd>
                  </dl>
                </div>
                <!-- /.p-flow__innerContent -->

                <div class="p-flow__innerContent -buy">
                  <figure><img src="<?php echo get_template_directory_uri();?>/assets/images/under/car-icon.svg" alt="メール"></figure>
                  <dl>
                    <dt>
                      <span class="number">STEP 04</span>
                      <em>商品の発送（1週間ほど）</em>
                    </dt>
                    <dd>商品の発送前に、ご購入いただいた測量機器の出荷前点検を実施するため、商品のご到着まで最大で１週間の時間を頂戴しております。<br>お急ぎの方は<a href="<?php echo esc_url( home_url( ) ); ?>/contact">お問い合わせフォーム</a>よりご連絡ください。</dd>
                  </dl>
                </div>
                <!-- /.p-flow__innerContent -->

              </div>
              <!-- /.p-flow__inner -->

              <p class="contanct">
                ※返品及びキャンセルについては<a href="<?php echo esc_url( home_url( ) ); ?>/faq#cancel">こちら</a>
                </p>
            </div>
          </div>

          <h3 class="c-heading -sub">選択中の機器</h3>
          <div class="p-single__under-item">
            <?php
              $args =  array (
                'post_type' => 'buy',
                'posts_per_page' => 1,
              );
              $news_query = new WP_Query($args);
            ?>

            <figure>
              <img src="<?php the_field('main_image', $_GET['post_id']) ?>" alt="">
            </figure>

            <div class="p-single__under-itemDetail">
              <?php $title = get_the_title($_GET['post_id']); ?>

              <h3 class="c-heading -singleBuy"><?php echo $title ?></h3>

              <div class="p-single__under-itemDetailInner">
                <dl>
                  <dt>商品コード</dt>
                  <dd><?php the_field('code',$_GET['post_id']); ?></dd>
                </dl>
                <dl>
                  <dt>機種モデル</dt>
                  <dd><?php the_field('model',$_GET['post_id']); ?></dd>
                </dl>

                <dl>
                  <dt>メーカー</dt>
                  <dd>
                    <?php
                      $maker = get_field('maker', $_GET['post_id']);
                      if( $maker == 'topcon' ):
                        echo 'TOPCON';
                      elseif( $maker == 'sokkia' ):
                        echo 'SOKKIA';
                      elseif( $maker == 'leica' ):
                        echo 'Leica Geosystems';
                      elseif( $maker == 'pentax' ):
                        echo 'PENTAX';
                      elseif( $maker == 'nikon' ):
                        echo 'NIKON';
                      elseif ($maker == 'trimble') : 
                        echo "ニコントリンブル" ;
                      elseif ($maker == 'ti-asahi') : 
                        echo "TIアサヒ" ;
                      elseif( $maker == 'other' ):
                        echo 'その他';
                      endif;
                    ?>
                  </dd>
                </dl>
                <dl>
                  <dt>商品価格</dt>

                  <dd>
                    <?php if(get_field('cam_price',$_GET['post_id'])):  ?>
                    <?php echo number_format(get_field("cam_price",$_GET['post_id'] )); ?>円(税込)
                    <?php else: ?>
                    <?php echo number_format(get_field("nomal_price",$_GET['post_id'] )); ?>円(税込)
                    <?php endif; ?>
                  </dd>

                </dl>
              </div>
            </div>
          </div>

          <div class="l-contents__box -grayLine">
            <div class="p-form">

              <?php $goods = get_field('select_goods', $_GET['post_id']); ?>
              <?php if ($goods == 'sould' || $goods == 'oppo'): ?>
                <p class="p-form_cant">
                  この商品はご購入いただけません。
                </p>

              <?php else: ?>
                <!-- /.m_form_format -->
                <?php
                  if( have_posts() ):
                    while( have_posts() ):
                      the_post();
                      remove_filter( 'the_content', 'wpautop' );
                      the_content();
                    endwhile;
                  endif;
                ?>
                <!-- /.m_form_format -->
              <?php endif; ?>

            </div>
          </div>
          <!-- /.l-contents__box -->

        </div>
        <!-- .p-seek__contactContent -->

      </div>
      <!-- /  .l-container -->
    </section>
    <!-- /.l-under -->
  </div>
  <!-- /.l-contents -->
</main>

<?php get_footer(); ?>