<?php get_header(); ?>

<main>
  <div class="l-contents">
    <section class="l-under">
      <div class="l-container">
        <div class="p-single__content">
          <div class="p-single__content-image">

            <div class="swiper-container-wrap">
              <div class="swiper-container gallery-top">

                <ul class="swiper-wrapper">

                  <?php if (get_field('main_image')) : ?>
                    <li class="swiper-slide -single">
                      <img src="<?php the_field('main_image'); ?>">
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-picture.png" alt="商品画像を準備中です。">
                    </li>
                  <?php endif; ?>

                  <?php if (get_field('detail_image01')) : ?>
                    <li class="swiper-slide -single">
                      <img src="<?php the_field('detail_image01'); ?>">
                    </li>
                  <?php endif; ?>

                  <?php if (get_field('detail_image02')) : ?>
                    <li class="swiper-slide -single">
                      <img src="<?php the_field('detail_image02'); ?>">
                    </li>
                  <?php endif; ?>

                  <?php if (get_field('detail_image03')) : ?>
                    <li class="swiper-slide -single">
                      <img src="<?php the_field('detail_image03'); ?>">
                    </li>
                  <?php endif; ?>

                  <?php if (get_field('detail_image04')) : ?>
                    <li class="swiper-slide -single">
                      <img src="<?php the_field('detail_image04'); ?>">
                    </li>
                  <?php endif; ?>

                  <?php if (get_field('detail_image05')) : ?>
                    <li class="swiper-slide -single">
                      <img src="<?php the_field('detail_image05'); ?>">
                    </li>
                  <?php endif; ?>

                  <?php if (get_field('detail_image06')) : ?>
                    <li class="swiper-slide -single">
                      <img src="<?php the_field('detail_image06'); ?>">
                    </li>
                  <?php endif; ?>

                  <?php if (get_field('detail_image07')) : ?>
                    <li class="swiper-slide -single">
                      <img src="<?php the_field('detail_image07'); ?>">
                    </li>
                  <?php endif; ?>

                  <?php if (get_field('detail_image08')) : ?>
                    <li class="swiper-slide -single">
                      <img src="<?php the_field('detail_image08'); ?>">
                    </li>
                  <?php endif; ?>
                </ul>
              </div>
            </div>


            <div class="swiper-container gallery-thumbs">
              <ul class="swiper-wrapper">

                <?php if (get_field('main_image')) : ?>
                  <li class="swiper-slide -thumbs">
                    <img src="<?php the_field('main_image'); ?>">
                  <?php else : ?>
                  </li>
                <?php endif; ?>

                <?php if (get_field('detail_image01')) : ?>
                  <li class="swiper-slide -thumbs">
                    <img src="<?php the_field('detail_image01'); ?>">
                  </li>
                <?php endif; ?>

                <?php if (get_field('detail_image02')) : ?>
                  <li class="swiper-slide -thumbs">
                    <img src="<?php the_field('detail_image02'); ?>">
                  </li>
                <?php endif; ?>

                <?php if (get_field('detail_image03')) : ?>
                  <li class="swiper-slide -thumbs">
                    <img src="<?php the_field('detail_image03'); ?>">
                  </li>
                <?php endif; ?>

                <?php if (get_field('detail_image04')) : ?>
                  <li class="swiper-slide -thumbs">
                    <img src="<?php the_field('detail_image04'); ?>">
                  </li>
                <?php endif; ?>

                <?php if (get_field('detail_image05')) : ?>
                  <li class="swiper-slide -thumbs">
                    <img src="<?php the_field('detail_image05'); ?>">
                  </li>
                <?php endif; ?>

                <?php if (get_field('detail_image06')) : ?>
                  <li class="swiper-slide -thumbs">
                    <img src="<?php the_field('detail_image06'); ?>">
                  </li>
                <?php endif; ?>

                <?php if (get_field('detail_image07')) : ?>
                  <li class="swiper-slide -thumbs">
                    <img src="<?php the_field('detail_image07'); ?>">
                  </li>
                <?php endif; ?>

                <?php if (get_field('detail_image08')) : ?>
                  <li class="swiper-slide -thumbs">
                    <img src="<?php the_field('detail_image08'); ?>">
                  </li>
                <?php endif; ?>
              </ul>
            </div>

            <div class="swiper-button__container -single">
              <div class="swiper-pagination -single pageSingle"></div>
            </div>

          </div>


          <?php $image_url = wp_get_attachment_url(post_custom('image'));
          echo $image_url
          ?>


          <!-- /.p-single__content-image -->

          <div class="p-single__content-detail">

            <?php
            $newgoods = get_field('new_goods'); //カテゴリーの取得
            $goods = get_field('select_goods'); //カテゴリーの取得
            $days = 14;  //日付取得の宣言
            $today = date_i18n('U');
            $entry_day = get_the_time('U');
            $keika = date('U', ($today - $entry_day)) / 86400;
            ?>

            <?php if ($days > $keika) : ?>
              <span class="effect <?php {
                                    echo "-new";
                                  } ?>">
                <?php {
                  echo "NEW";
                }  ?>
              </span>
            <?php endif; ?>


            <?php if ($goods) : ?>
              <span class="effect <?php if ($goods == "oppo") {
                                    echo "-oppo";
                                  } elseif ($goods == "sould") {
                                    echo "-sould";
                                  } elseif ($goods == "no") {
                                    echo "";
                                  } ?>">
                <?php if ($goods == "oppo") {
                  echo "商談中";
                } elseif ($goods == "sould") {
                  echo "SOLD OUT";
                }  ?>
              </span>
            <?php endif; ?>

            <p class="maker">
              <?php
              $maker = get_field('maker'); ?>
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
              <?php elseif ($maker == 'trimble') : ?>
                <?php echo "ニコントリンブル" ?>
              <?php elseif ($maker == 'ti-asahi') : ?>
                <?php echo "TIアサヒ" ?>
              <?php elseif ($maker == 'other') : ?>
                <?php echo "その他" ?>
              <?php endif; ?>
            </p>
            <?php $title = get_the_title(); ?>
            <h3 class="p-single__title"><?php echo $title  ?></h3>


            <?php if ($terms = get_the_terms($post->ID, 'keyword')) :  ?>
              <ul class="p-single__cat">
                <?php foreach ($terms as $term) : ?>
                  <li class="p-single__catItem">#
                    <a href="<?php echo esc_url(get_term_link($term, $term->taxonomy)); ?>"><?php echo esc_html($term->name); ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>


            <div class="price-wrap">
              <?php if (get_field('nomal_price')) : ?>


                <span class="price">
                  <span class="cat">
                    <span class="cat-text">販売価格(税込)</span>
                    <em><?php echo number_format(get_field('nomal_price')); ?></em>
                  </span>
                  <span class="yen">円</span>
                </span>
              <?php endif; ?>

              <?php if (get_field('cam_price')) : ?>
                <span class="price -cam">
                  <span class="cat">
                    <span class="cat-text">キャンペーン価格(税込)</span>
                    <em><?php echo number_format(get_field('cam_price')); ?></em>
                  </span>
                  <span class="yen">円</span>
                </span>
              <?php endif; ?>
            </div>
            <!-- /.price-wrap -->
            <p class="free">
              <!-- 全商品送料無料！ -->
              <?php the_field('reco_text'); ?>
            </p>


            <div class="button-wrap -buy">
              <div class="inner">
                <?php if ($goods == "sould") : ?>
                  <a href="<?php echo esc_url(home_url('/buy/purchase/?post_id=' . get_the_ID())); ?>" class="c-button -buy -buyOrange -sould">売約済み</a>
                <?php elseif ($goods == "oppo") : ?>
                  <a href="<?php echo esc_url(home_url('/buy/purchase/?post_id=' . get_the_ID())); ?>" class="c-button -buy -buyOrange -sould">商談中</a>
                <?php else : ?>
                  <a href="<?php echo esc_url(home_url('/buy/purchase/?post_id=' . get_the_ID())); ?>" class="c-button -orange -buy -buyOrange">購入する</a>
                <?php endif; ?>
                <a href="<?php echo esc_url(home_url('/buy/contact/?post_id=' . get_the_ID())); ?>" class="c-button -gray -contact -buyGray">この製品へのお問い合わせ</a>
              </div>
            </div>
            <div class="link-wrap">
              <a href="" class="print js-print">印刷用ページを表示する</a>

              <div class="sns-wrap">
                <p>シェアする</p>
                <ul class="sns-list">
                  <li class="sns-list__item">
                    <a href="http://www.facebook.com/share.php?u=https://geomarket.jp/buy/<?php $id = get_the_ID();
                                                                                          echo $id ?>/" target="_blank" rel="noopner,noreferrer">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/facebook-icon.svg" alt="facebookアイコン">
                    </a>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v12.0" nonce="lR0FwTPD"></script>
                  </li>
                  <li class="sns-list__item">
                    <a href="https://twitter.com/intent/tweet?text=測量機器総合マーケットGEOMARKET&url=https://geomarket.jp/buy/<?php $id = get_the_ID();
                                                                                                                      echo $id ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/twitter-icon.svg" alt="twitter"></a>
                  </li>
                  <li class="sns-list__item">
                    <a href="https://timeline.line.me/social-plugin/share?url=https%3A%2F%2Fgeomarket.jp%2F" target="_blank" rel="noopner,noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/line-icon.svg" alt=""></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /.p-single__content-detail -->
        </div>


      </div>
      <div class="p-single__itemDesc">
        <div class="l-container">
          <ul class="p-single__itemDesc-list">
            <li class="p-single__itemDesc-item"><a href="#description">商品説明</a></li>
            <li class="p-single__itemDesc-item"><a href="#detail">仕様詳細</a></li>
          </ul>

          <div id="description" class="l-contents__box -grayLine p-single__itemDesc-boxA">
            <h3 class="c-heading -sub">商品説明</h3>
            <div class="p-single__itemDesc-inner">
              <div class="description">
                <?php the_content(); ?>
              </div>


              <dl class="rank">
                <dt>【商品ランク】</dt>
                <dd>
                  <?php
                  $rank = get_field('rank'); //カテゴリーの取得
                  ?>
                  <ul>
                    <li class="<?php if ($rank == "s") {
                                  echo "is-select";
                                } ?>">新品または未使用品、美品</li>
                    <li class="<?php if ($rank == "a") {
                                  echo "is-select";
                                } ?>">細かなキズ・汚れなどがありますが、動作・機能には問題の無い、状態の良い商品</li>
                    <li class="<?php if ($rank == "b") {
                                  echo "is-select";
                                } ?>">キズ・汚れなどがありますが、動作・機能には問題の無い商品</li>
                    <li class="<?php if ($rank == "c") {
                                  echo "is-select";
                                } ?>">キズ・汚れが多く使用感のある商品</li>
                    <li class="<?php if ($rank == "d") {
                                  echo "is-select";
                                } ?>">ジャンク品</li>
                  </ul>
                </dd>
              </dl>
            </div>
            <!-- /.p-single__itemDesc-inner -->
          </div>

          <div id="detail" class="l-contents__box -grayLine p-single__itemDesc-boxB">
            <h3 class="c-heading -sub">仕様詳細</h3>
            <div class="p-single__itemDesc-inner -detail">
              <dl>
                <dt>商品コード</dt>
                <?php if (get_field('code')) : ?>
                  <dd>
                    <?php the_field('code');  ?>
                  <?php else : ?>
                    -
                  <?php endif; ?>
                  </dd>
              </dl>

              <dl>
                <dt>モデル</dt>
                <dd><?php the_field('model'); ?></dd>
              </dl>

              <dl>
                <dt>メーカー</dt>
                <dd> <?php
                      $maker = get_field('maker'); ?>
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
                  <?php elseif ($maker == 'trimble') : ?>
                    <?php echo "ニコントリンブル" ?>
                  <?php elseif ($maker == 'ti-asahi') : ?>
                    <?php echo "TIアサヒ" ?>
                  <?php elseif ($maker == 'other') : ?>
                    <?php echo "その他" ?>
                  <?php endif; ?></dd>
              </dl>

              <dl>
                <dt>商品価格</dt>
                <?php
                // vars
                $category = get_field('select_price'); //カテゴリーの取得
                ?>
                <?php
                if ($category && in_array('cam_select', $category)) : ?>

                  <dd><?php echo number_format(get_field('cam_price')); ?>円（税込）</dd>
                <?php else : ?>
                  <dd><?php echo number_format(get_field('nomal_price')); ?>円（税込）</dd>
                <?php endif; ?>
              </dl>

              <dl>
                <dt>経過年数</dt>
                <dd>
                  <?php the_field('elapsed_years'); ?>
                </dd>
              </dl>

              <dl>
                <dt>
                  新品時標準価格
                </dt>
                <dd>
                  <?php if (get_field('open_price')) : ?>
                    オープン価格
                  <?php elseif (get_field('standardPrice_new')) : ?>
                    <?php echo number_format(get_field('standardPrice_new')); ?>円（税別）
                  <?php else : ?>
                    -
                  <?php endif; ?>
                </dd>
              </dl>

              <dl>
                <dt>測角精度</dt>
                <?php
                $angle = get_field('angle'); //カテゴリーの取得
                ?>
                <dd>
                  <?php if ($angle == 'none') : echo '-' ?>
                  <?php elseif ($angle == 'twenty') : echo '20″' ?>
                  <?php elseif ($angle == 'ten') : echo '10″' ?>
                  <?php elseif ($angle == 'seven') : echo '7″' ?>
                  <?php elseif ($angle == 'six') : echo '6″' ?>
                  <?php elseif ($angle == 'five') : echo '5″' ?>
                  <?php elseif ($angle == 'four') : echo '4″' ?>
                  <?php elseif ($angle == 'three') : echo '3″' ?>
                  <?php elseif ($angle == 'two') : echo '2″' ?>
                  <?php elseif ($angle == 'one') : echo '1″' ?>
                  <?php elseif ($angle == 'zerofive') : echo '0.5″' ?>
                  <?php endif; ?>
                </dd>
              </dl>

              <dl>
                <dt>測距精度</dt>
                <?php if (get_field('measurement_accuracy')) : ?>
                  <dd>
                    <?php the_field('measurement_accuracy') ?>
                  <?php else : ?>
                    -
                  <?php endif; ?>
                  </dd>
              </dl>

              <dl>
                <dt>測定可能距離</dt>
                <?php if (get_field('measurable_distance')) : ?>
                  <dd>
                    <?php the_field('measurable_distance') ?>
                  <?php else : ?>
                    -
                  <?php endif; ?>
                  </dd>
              </dl>

              <dl>
                <dt>ノンプリズム</dt>
                <dd>
                  <?php if (get_field('non_prism')) : ?>
                    ◯
                  <?php else : ?>
                    -
                  <?php endif; ?>

                </dd>
              </dl>

              <dl>
                <dt>整準台</dt>
                <dd>
                  <?php if (get_field('leveling_table_text')) : ?>

                    <?php the_field('leveling_table_text'); ?>
                  <?php else : ?>
                    -
                  <?php endif; ?>

                </dd>
              </dl>

              <dl>
                <dt>防塵・防水性能</dt>
                <?php if (get_field('performance')) : ?>
                  <dd>
                    <?php the_field('performance'); ?>
                  <?php else : ?>
                    -
                  <?php endif; ?>
                  </dd>
              </dl>

              <dl>
                <dt>インターフェース</dt>
                <?php if (get_field('interface_text')) : ?>
                  <dd>
                    <?php the_field('interface_text') ?>
                  <?php else : ?>
                    -
                  <?php endif; ?>
                  </dd>
              </dl>

              <dl>
                <dt>JSIMA適用区分</dt>
                <dd>
                  <?php
                  // フィールドの設定と値をロード
                  $field = get_field_object('jsima');
                  $jsimas = $field['value'];

                  // ラベルを表示
                  if ($jsimas) : ?>
                    <ul>
                      <?php foreach ($jsimas as $jsima) : ?>
                        <li><?php echo $field['choices'][$jsima]; ?></li>
                      <?php endforeach; ?>
                    </ul>

                  <?php endif; ?>
                </dd>
              </dl>

              <dl>
                <dt>国土地理院認定</dt>
                <dd>
                  <?php
                  $geography = get_field('geography'); //カテゴリーの取得
                  ?>
                  <?php if ($geography == 'type01') : echo '3級トータルステーション' ?>
                  <?php elseif ($geography == 'type02') : echo '2級Bトータルステーション' ?>
                  <?php elseif ($geography == 'type03') : echo '2級Aトータルステーション' ?>
                  <?php elseif ($geography == 'type04') : echo '1級トータルステーション' ?>
                  <?php elseif ($geography == 'type05') : echo 'セオドライト3級' ?>
                  <?php elseif ($geography == 'type06') : echo 'セオドライト2級' ?>
                  <?php elseif ($geography == 'type07') : echo 'セオドライト1級' ?>
                  <?php elseif ($geography == 'type08') : echo 'セオドライト特級' ?>
                  <?php elseif ($geography == 'type09') : echo 'レベル3級' ?>
                  <?php elseif ($geography == 'type10') : echo 'レベル2級' ?>
                  <?php elseif ($geography == 'type11') : echo 'レベル1級' ?>
                  <?php elseif ($geography == 'type12') : echo 'GNSS測量機1級' ?>
                  <?php elseif ($geography == 'type13') : echo 'GNSS測量機2級' ?>
                  <?php elseif ($geography == 'type14') : echo '水準標尺2級' ?>
                  <?php elseif ($geography == 'type15') : echo '水準標尺1級' ?>
                  <?php endif; ?>

                </dd>
              </dl>

              <dl>
                <dt>部品の供給</dt>
                <dd>
                  <?php
                  $parts = get_field('parts'); //カテゴリーの取得
                  ?>

                  <?php if ($parts == 'type01') : echo '○(あり)' ?>
                  <?php elseif ($parts == 'type02') : echo '△ (一部あり)' ?>
                  <?php elseif ($parts == 'type03') : echo '-(なし)' ?>
                  <?php endif; ?>
                </dd>
              </dl>

              <dl>
                <dt>カタログ</dt>
                <dd>


                  <?php if (get_field('catalog_check')) : ?>
                    -
                  <?php else : ?>
                  <?php endif; ?>

                  <?php if (get_field('catalog_title')) : ?>
                    <?php
                    $catalog_file = get_field('catalog_file');
                    if ($catalog_file) ?>
                    <a href="<?php echo $catalog_file['url']; ?>" target="_blank" rel="noopner,noreferrer"><?php the_field('catalog_title'); ?>.pdf</a><br>
                  <?php endif; ?>

                  <?php if (get_field('catalog_title02')) : ?>
                    <?php
                    $catalog_file02 = get_field('catalog_file02');
                    if ($catalog_file02) ?>
                    <a class="catalog" href="<?php echo $catalog_file02['url']; ?>" target="_blank" rel="noopner,noreferrer"><?php the_field('catalog_title02'); ?>.pdf</a><br>
                  <?php endif; ?>


                  <?php if (get_field('catalog_title03')) : ?>
                    <?php
                    $catalog_file03 = get_field('catalog_file03');
                    if ($catalog_file03) ?>
                    <a class="catalog" href="<?php echo $catalog_file03['url']; ?>" target="_blank" rel="noopner,noreferrer"><?php the_field('catalog_title03'); ?>.pdf</a><br>
                  <?php endif; ?>


                </dd>

              </dl>
            </div>

            <!-- /.p-single__itemDesc-inner -->
          </div>
        </div>
        <!-- /.l-container -->
      </div>
      <div class=" l-container">
        <div class="p-single__butonContent">
          <div class="p-single__buttonWrap">
            <?php if ($goods == "sould") : ?>
              <a href="<?php echo esc_url(home_url('/buy/purchase/?post_id=' . get_the_ID())); ?>" class="c-button -single -sould">売約済み</a>
            <?php elseif ($goods == "oppo") : ?>
              <a href="<?php echo esc_url(home_url('/buy/purchase/?post_id=' . get_the_ID())); ?>" class="c-button -single -sould">商談中</a>
            <?php else : ?>
              <a href="<?php echo esc_url(home_url('/buy/purchase/?post_id=' . get_the_ID())); ?>" class="c-button -orange -single">購入する</a>
            <?php endif; ?>

            <a href="<?php echo esc_url(home_url('/buy/contact/?post_id=' . get_the_ID())); ?>" class="c-button -gray -single">この製品へのお問い合わせ</a>
          </div>
          <a href="<?php echo esc_url(home_url()); ?>/buy/" class="button">一覧に戻る</a>
        </div>
        <!-- /.p-single__butonWrap -->
      </div>
      <?php //タームが付与されていたら同じターム標品を出力
        // $terms を取得するコード
        $terms = get_the_terms($post->ID, 'keyword');
        // タームが取得できた場合
        if ($terms && !is_wp_error($terms)) {
      ?>
        <section class="p-single__relation l-spacer -top">
          <div class="p-single__relation-inner">
            <div class="l-container">
              <h2 class="c-heading -main -line">関連機器</h2>
              <div class="swiper-container -single__reration swiper-single__reration p-main__reco ">
                <?php
                  $term_ids = array(); // タームIDを格納する配列を初期化
                  // タームIDを取得して配列に格納
                  foreach ($terms as $term) {
                    $term_ids[] = $term->term_id;
                  }
                  $args = array(
                    'post_type' => 'buy',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'desc',
                    'meta_query' => array(
                      array(
                        'key' => 'recommend',
                        'value' => '1',
                        'compare' => '=',
                      ),
                    ),
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'keyword',
                        'field' => 'id',
                        'terms' => $term_ids,
                        'operator' => 'IN',
                      ),
                    ),
                  );
                  $the_query = new WP_query($args);
                  if ($the_query->have_posts()) :
                ?>
                <ul class="swiper-wrapper">
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="swiper-slide -top">
                      <a class="c-card" href="<?php the_permalink(); ?>">
                        <?php
                        $goods = get_field('select_goods'); //カテゴリーの取得
                        ?>
                        <div class="c-card__head">
                          <?php if (get_field('main_image')) : ?>
                            <img src="<?php the_field('main_image'); ?>">
                          <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-picture.png" alt="商品画像を準備中です。">
                          <?php endif; ?>
                          <?php if ($goods) : ?>
                            <span class="effect <?php if ($goods == "sould") {
                                                  echo "-sould";
                                                } elseif ($goods == "no") {
                                                  echo "";
                                                } ?>">
                              <?php if ($goods == "sould") {
                                echo "SOLD OUT";
                              }  ?>
                            </span>
                          <?php endif; ?>
                        </div>
                        <div class="c-card__body">
                          <div class="c-card__body-inner">
                            <?php get_template_part("/template-parts/rental/custom/maker") ?>

                            <h3 class="c-card__title -top"><?php the_title(); ?></h3>
                            <span class="price-wrap">
                              <?php if (get_field('cam_price')) : ?>
                                <span class="price -cam -cam-top">
                                  <span class="cat">
                                    <span class="cat-text">キャンペーン価格(税込)</span>
                                    <em>
                                      <?php echo number_format(get_field('cam_price')); ?>
                                    </em>
                                    <span class="yen">円</span>
                                  </span>
                                </span>
                              <?php else : ?>
                                <span class="price">
                                  <span class="cat">
                                    <span class="cat-text">通常価格(税込)</span>
                                    <em>
                                      <?php echo number_format(get_field('nomal_price')); ?>
                                    </em>
                                  </span>
                                  <span class="yen">円</span>
                                </span>
                              <?php endif; ?>
                            </span>
                          </div>
                          <!-- /.c-card__inner -->
                          <p class="button">VIEW DETAIL</p>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; ?>
                </ul>
                <?php else : ?>
                    <p>まだ投稿がありません。</p>
                <?php wp_reset_postdata();
                  endif;
                  ?>
              </div>
              <div class="swiper-button__container -top">
                <!-- <div class="swiper-pagination -top pageTop"></div> -->
                <div class="swiper-scrollbar singleRelation"></div>
                <div class="swiper-button-prev prevSingleRelation"></div>
                <div class="swiper-button-next nextSingleRelation"></div>
              </div>
            </div>
            <!-- /.l-container -->
          </div>
        </section>
      <?php }?>

    </section>
  </div>
</main>

<?php get_footer(); ?>
