<?php get_header(); ?>
<main>
  <div class="l-contents">
    <section class="l-under -contact">
      <div class="l-container">

        <!-- url取得 -->
        <?php $url = $_SERVER['REQUEST_URI']; ?>
        <?php if (strstr($url, 'rental')) : ?>
          <!-- レンタルの申し込み -->
          <h2 class="c-heading -main">レンタルのお申込み</h2>
          <div class="l-contents__card -flow">
            <div class="p-flow">
              <h3 class="c-heading -sub">レンタルの流れ</h3>
              <div class="p-flow__inner">

                <div class="p-flow__innerContent">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/pc-icon.svg" alt="メール"></figure>
                  <dl>
                    <dt>
                      <span class="number">STEP 01</span>
                      <em>レンタルのお申し込み</em>
                    </dt>
                    <dd>下記のお申し込みフォームに、必要事項をご記入ください。</dd>
                  </dl>
                </div>
                <!-- /.p-flow__innerContent -->

                <div class="p-flow__innerContent">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/letter-icon.svg" alt="仮査定"></figure>
                  <dl>
                    <dt>
                      <span class="number">STEP 02</span>
                      <em>お見積書の発行</em>
                    </dt>
                    <dd>お客様からいただいた情報に基づいて、お見積書を発行します。</dd>
                  </dl>
                </div>
                <!-- /.p-flow__innerContent -->

                <div class="p-flow__innerContent">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/post-icon.svg" alt="メール"></figure>
                  <dl>
                    <dt>
                      <span class="number">STEP 03</span>
                      <em>レンタル契約の成立</em>
                    </dt>
                    <dd>お見積書をご確認後、 貴社記名押印の「注文書」をお送りください。</dd>
                  </dl>
                </div>
                <!-- /.p-flow__innerContent -->

                <div class="p-flow__innerContent">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/car-icon.svg" alt="メール"></figure>
                  <dl>
                    <dt>
                      <span class="number">STEP 04</span>
                      <em>配送・納品</em>
                    </dt>
                    <dd>レンタル開始日の前日までにお届けします。</dd>
                  </dl>
                </div>
                <!-- /.p-flow__innerContent -->

                <div class="p-flow__innerContent">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/geo-icon03.svg" alt="メール"></figure>
                  <dl>
                    <dt>
                      <span class="number">STEP 05</span>
                      <em>レンタル開始</em>
                    </dt>
                    <dd>機器の動作確認及び、付属品等をご確認ください。</dd>
                  </dl>
                </div>
                <!-- /.p-flow__innerContent -->

                <div class="p-flow__innerContent">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/box-icon.svg" alt="メール"></figure>
                  <dl>
                    <dt>
                      <span class="number">STEP 06</span>
                      <em>レンタル終了</em>
                    </dt>
                    <dd>レンタル期間が終了しましたら、ご返送ください。</dd>
                  </dl>
                </div>
                <!-- /.p-flow__innerContent -->


              </div>
              <!-- /.p-flow__inner -->
              <p class="contanct">
                測量機器のレンタルをご希望される方は、<a href="<?php echo esc_url(home_url()); ?>/rental/caution/">レンタルの注意事項</a>
                をご確認後、お気軽にお問い合わせください。
              </p>
            </div>
          </div>
        <?php elseif (strstr($url, 'buy')) : ?>
          <!-- 測量機器を探すのお問い合わせ -->
          <div class="p-seek__contactContent">
            <h2 class="c-heading -main">商品のお問い合わせ</h2>

            <div class="p-single__under-item">

              <?php
              $args =  array(
                'post_type' => 'buy',
                'posts_per_page' => 1, // 表示件数
                //  'p' => $post_id,
              );
              $news_query = new WP_Query($args);
              ?>
              <figure>
                <img src="<?php the_field('main_image', $_GET['post_id']) ?>" alt="">
              </figure>


              <div class="p-single__under-itemDetail">
                <?php $title = get_the_title($_GET['post_id']); ?>

                <h3 class="c-heading"><?php echo $title ?></h3>

                <div class="p-single__under-itemDetailInner">
                  <dl>
                    <dt>商品コード</dt>
                    <dd><?php the_field('code', $_GET['post_id']); ?></dd>
                  </dl>
                  <dl>
                    <dt>機種モデル</dt>
                    <dd><?php the_field('model', $_GET['post_id']); ?></dd>
                  </dl>

                  <dl>
                    <dt>メーカー</dt>
                    <dd> <?php
                          $maker = get_field('maker', $_GET['post_id']); ?>
                      <?php if ($maker == 'topcon') : ?>
                        <?php echo "TOPCON" ?>
                      <?php elseif ($maker == 'sokkia') : ?>
                        <?php echo "SOKKIA" ?>
                      <?php elseif ($maker == 'leica') : ?>
                        <?php echo "Leica Geosystems" ?>
                      <?php elseif ($maker == 'pentax') : ?>
                        <?php echo "PENTAX" ?>
                      <?php elseif ($maker == 'nikon') : ?>
                        <?php echo "NIKON" ?>
                      <?php elseif ($maker == 'ti') : ?>
                        <?php echo "TIアサヒ" ?>
                      <?php elseif ($maker == 'other') : ?>
                        <?php echo "その他" ?>
                      <?php endif; ?></dd>
                  </dl>
                  <dl>
                    <dt>商品価格</dt>


                    <dd>
                      <?php if (get_field('cam_price', $_GET['post_id'])) :  ?>
                        <?php echo number_format(get_field("cam_price", $_GET['post_id'])); ?>円(税込)
                      <?php else : ?>
                        <?php echo number_format(get_field("nomal_price", $_GET['post_id'])); ?>円(税込)
                      <?php endif; ?>
                    </dd>
                  </dl>
                </div>
              </div>


            </div>


        <?php else : ?>
            <!-- 通常の音合わせ -->
            <h2 class="c-heading -main">お問い合わせ</h2>
            <p class="p-contact__description">
              サイトの内容や、ご希望商品のリクエスト、購入・買取、レンタル、点検・修理など<br>
              全てのお問い合わせは、下記のお問い合わせフォームをご利用ください。
            </p>
        <?php endif; ?>


          <div class="l-contents__box -grayLine">
            <div class="p-form">

              <!-- /.m_form_format -->
              <?php if (have_posts()) :
                while (have_posts()) :
                  the_post(); ?>

                  <?php remove_filter('the_content', 'wpautop');
                  the_content();
                  ?>

              <?php endwhile;
              endif; ?>
              <!-- /.m_form_format -->

              <!-- 20231102 updates -->

                <?php
                  // Query posts with post_type 'rental'
                  $args = array(
                      'post_type' => 'rental',
                      'post_status' => 'publish', // Only get published posts
                      'posts_per_page' => -1 // Retrieve all posts
                  );
                  $query = new WP_Query($args);

                  // Initialize an empty array to store post ID and title pairs
                  $rental_list = array();

                  if ($query->have_posts()) {
                      while ($query->have_posts()) {
                          $query->the_post();
                          
                          // Get post ID and either rental-name or post title, replace <br> with a space in title
                          $post_id = get_the_ID();
                          $rental_name = get_post_meta($post_id, 'rental-name', true);
                          $post_title = str_replace('<br>', ' ', get_the_title());
                          
                          // Use rental-name if available, otherwise use post title
                          $display_name = !empty($rental_name) ? $rental_name : $post_title;
                  
                          // Add to the rental list array
                          $rental_list[$post_id] = $display_name;
                      }
                  }

                  // Reset post data
                  wp_reset_postdata();

                  // Generate the JavaScript for the dynamic list
                ?>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        var optionMap = <?php echo json_encode($rental_list, JSON_UNESCAPED_UNICODE); ?>;
                        
                        var option_id = '<?= get_query_var('option_id') ?>';
                        var optionValue = optionMap[option_id] || '選択してください';

                        var optionElement = document.querySelector('option[value="' + optionValue + '"]');
                        if (optionElement) {
                            optionElement.setAttribute('selected', 'true');
                        }
                    });
                </script>

              <!-- 20231102 updates -->

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
<!-- "Leica 3Dレーザースキャナー RTC360" "杭ナビ Layout Navigator トプコン LN-150" "イメージングレーザースキャナーセット Leica BLK360 G2" "Leica トータルステーション TS07Plus 5″R1000" "Leica トータルステーション TS16P 5″R1000" "ノンプリズムトータルステーション トプコン GM-105F" "トプコン トータルステーション GT-1205" "ソキア ノンプリズムトータルステーション iM-105" "ソキア 三次元測定システム NET05AX" "スキャニングトータルステーション トリンブル SX10" "3Dレーザスキャナ トリンブル X7【Field Link】" "SOKKIANET1AX Ⅱ" "SOKKIA NET05AXⅡ" "Trimble SX10 スキャニングトータルステーション" "Trimble X7【Field Link】" "Trimble X7【Perspective】" "Trimble RPT600Ⅱ" "Nicon NIVO-F5L ノンプリズムトータルステーション" "Nicon NST-307Cr トータルステーション" "Nicon Nivo2HLトータルステーション" "SOKKIA GNSS受信機 GCX3 GGD VRSセット" -->
<?php get_footer(); ?>
