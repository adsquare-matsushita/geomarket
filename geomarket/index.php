<?php get_header(); ?>

<main class="p-front">
  <div class="p-hero -top">
    <div class="swiper-container swiper-hero">
      <div class="swiper-wrapper">
        <div class="swiper-slide -hero">
          <picture class="p-hero__image -hero01">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv-pc01.webp" media="(min-width: 1024px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv-sp.webp" alt="測量機器総合マーケット" />
          </picture>
          <div class="p-hero__content -hero01">
            <div class="p-hero__conetntBox">
              <div class="p-hero__contentInner">
                <h2>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv-logo.png" alt="GEOMARKET" />
                </h2>
                <p class="text u-break">
                  ジオマーケットは、測量機器のリユース・リペア・レンタルの<br class="-tab">「3Rサービス」を軸として、測量機器に関するサービスを総合的に展開し、<br class="-tab">測量・建設業界の業務を後押しいたします。
                </p>
              </div>
              <ul class="p-hero__strength">
                <li class="p-hero__strengthItem">
                  <a href="<?php echo esc_url(home_url()); ?>/reuse/">
                    <div>
                      <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/reuse-icon.svg" alt="買取・販売のアイコン" />
                      </figure>
                      <em>買取・販売</em>
                      <p>
                        丁寧な査定と<br>
                        リユース
                      </p>
                    </div>
                  </a>
                </li>
                <li class="p-hero__strengthItem">
                  <a href="<?php echo esc_url(home_url()); ?>/rental/">
                    <div>
                      <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/rental-icon.svg" alt="レンタルのアイコン" />
                      </figure>
                      <em>レンタル</em>
                      <p>
                        最短一日<br>
                        からＯＫ
                      </p>
                    </div>
                  </a>
                </li>
                <li class="p-hero__strengthItem">
                  <a href="<?php echo esc_url(home_url()); ?>/repair/">
                    <div>
                      <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/repair-icon.svg" alt="修理・点検のアイコン" />
                      </figure>
                      <em>修理・点検</em>
                      <p>
                        高い品質で<br>
                        迅速に対応
                      </p>
                    </div>
                  </a>
                </li>
              </ul>
              <ul class="p-hero__strength-sp">
                <li class="p-hero__strengthItem">
                  <a href="<?php echo esc_url(home_url()); ?>/buy/">
                    <div>
                      <em>測量機を探す</em>
                      <p>
                        高品質な<br>
                        リユース販売
                      </p>
                    </div>
                  </a>
                </li>
                <li class="p-hero__strengthItem">
                  <a href="<?php echo esc_url(home_url()); ?>/reuse/">
                    <div>
                      <em>測量機を売る</em>
                      <p>
                        丁寧な査定で<br>
                        高値買取
                      </p>
                    </div>
                  </a>
                </li>
                <li class="p-hero__strengthItem">
                  <a href="rental/">
                    <div>
                      <em>レンタルする</em>
                      <p>
                        最短一日<br>
                        からＯＫ
                      </p>
                    </div>
                  </a>
                </li>
                <li class="p-hero__strengthItem">
                  <a href="<?php echo esc_url(home_url()); ?>/repair/">
                    <div>
                      <em>修理・点検</em>
                      <p>
                        高い品質で<br>
                        迅速に対応
                      </p>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button__container -hero">
        <div class="swiper-pagination -hero pageHero"></div>
      </div>
    </div>
    <small>
      <p>&copy; GEOMARKET</p>
    </small>
  </div>
  <div class="l-contents">
    <section class="p-main">
      <div class="js_tab">
        <ul class="p-main__cat js_tab_btn">
          <li class="p-main__catItem is-tab"><span>おすすめ機器</span></li>
          <li class="p-main__catItem "><span>新着機器</span></li>
          <li class="p-main__catItem"><span>測量機器を探す</span></li>
        </ul>
        <div class="p-main__inner js_tab_content mv-tab_fade-in">
          <div class="is-tab">
            <div class="swiper-container -top swiper-top p-main__reco ">
              <ul class="swiper-wrapper">
                <?php
                $args = array(
                  'post_type' => 'buy', //投稿タイプ名
                  'posts_per_page' => -1, //表示件数
                  'key' => 'recommend', //カスタムフィールド名
                  'orderby' => 'date', // 日付で並び替え
                  'order' => 'DESC', // 降順に設定
                  'post_status' => 'publish', // 公開済みのみ表示
                  'meta_query' => array(
                    array(
                      'key' => 'recommend',
                      'value' => '1',
                      'compare' => '='
                    )
                  )
                );
                $the_query = new WP_query($args);
                ?>
                <?php if ($the_query->have_posts()) : ?>
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
                          <p class="button">VIEW DETAIL</p>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; ?>
                <?php else : ?>
                  <p>まだ投稿がありません。</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
              </ul>
            </div>
            <div class="swiper-button__container -top">
              <div class="swiper-scrollbar pageTop"></div>
              <div class="swiper-button-prev prevTop"></div>
              <div class="swiper-button-next nextTop"></div>
            </div>
            <a class="c-button -text -mainUnder" href="<?php echo esc_url(home_url()); ?>/buy#lineup">VIEW ALL</a>
          </div>
          <div>
            <div class="swiper-container -top swiper-top02 p-main__new">
              <ul class="swiper-wrapper">
                <?php
                $duration = date('Y-m-d 0:0:0', strtotime('-14 day'));
                $args = array(
                  'post_type' => 'buy',
                  'posts_per_page' => 10,
                  'orderby' => 'date',
                  'order' => 'desc',
                  'date_query' => array(
                    array(
                      'after'     => $duration,
                      'inclusive' => false,
                      'key' => 'recommend', //カスタムフィールド名
                    ),
                  ),
                );
                $the_query = new WP_query($args);
                ?>
                <?php if ($the_query->have_posts()) : ?>
                  <?php
                  $days = 14;  //日付取得の宣言
                  $today = date_i18n('U');
                  $entry_day = get_the_time('U');
                  $keika = date('U', ($today - $entry_day)) / 86400;
                  ?>
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
                          <p class="button">VIEW DETAIL</p>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; ?>
                <?php else : ?>
                  <p>まだ投稿がありません。</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
              </ul>
            </div>
            <div class="swiper-button__container -top">
              <div class="swiper-scrollbar pageTop02"></div>
              <div class="swiper-button-prev prevTop02"></div>
              <div class="swiper-button-next nextTop02"></div>
            </div>
            <a class="c-button -text -mainUnder" href="<?php echo esc_url(home_url()); ?>/buy#lineup">VIEW ALL</a>
          </div>
          <div class="l-spacer">
            <div class="l-container">
              <?php get_template_part("/template-parts/seek/seek") ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-searchSec">
      <div class="l-spacer -sizel">
        <div class="l-container">
          <h2 class="c-heading -main -line">
            <strong>整備・点検済み！</strong>
            すぐに使える中古測量機器
          </h2>
          <div class="p-searchSec__btn">
            <a class="p-searchSec__btn--main" href="">高品質な測量機器を探す <i></i></a>
            <div class="p-searchSec__btn--sub">
              <div class="p-searchSec__btn--subRew">
                <a href="">トプコン製品</a>
                <a href="">ソキア製品</a>
              </div>
              <div class="p-searchSec__btn--subRew">
                <a href="">ライカシステムズ製品</a>
                <a href="">ニコン製品</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <section class="">
      <div class="l-spacer -sizel">
        <div class="l-container">
          <h2 class="c-heading -main -line">ピックアップ情報</h2>
        </div>
        <div class="p-info__wrap">
          <div class="swiper-container -info swiper-info">
            <ul class="swiper-wrapper">
              <?php
              $news_query = new WP_Query(
                array(
                  'post_type'      => 'pickup', //投稿タイプの指定
                  'posts_per_page' => 10, //表示件数
                  'orderby' => 'date',
                  'order' => 'desc',
                )
              );
              ?>
              <?php if ($news_query->have_posts()) : ?>
                <?php while ($news_query->have_posts()) : ?>
                  <?php $news_query->the_post(); ?>
                  <li class="swiper-slide -info">
                    <a href="<?php the_field('url'); ?>" target="_blank" rel="noopener,norefereer">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail() ?>
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pickup-image.jpg" alt="商品画像を準備中です。">
                      <?php endif; ?>
                      <h3 class="p-info__title"><?php the_title(); ?></h3>
                    </a>
                  </li>
                <?php endwhile; ?>
              <?php else : ?>
                <p>まだ投稿がありません。</p>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </ul>
          </div>
          <div class="swiper-button__container -info">
            <div class="swiper-button__wrap -info">
              <div class="swiper-pagination -info pageInfo"></div>
              <div class="swiper-button-prev prevInfo"></div>
              <div class="swiper-button-next nextInfo"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- <section class="p-strength p-info">
      <div class="l-spacer -sizel">
        <div class="l-container">
          <div class="p-strength__list">
            <article class="p-strength__item">
              <a href="<?php echo esc_url(home_url()); ?>/reuse/" class="p-strength__item-inner">
                <div>
                  <svg class="icon" viewBox="0 0 56 56">
                    <g transform="translate(23439 -3712)">
                      <g transform="translate(-23894.631 3294.593)">
                        <path d="M110.8,68.892H98.218a3.986,3.986,0,0,0-3.663,2.089L89.377,79.97l10.643,6.185,8.415-14.67a8.265,8.265,0,0,1,2.369-2.593" transform="translate(377.169 350.518)" />
                        <path d="M126.73,85.19l4.1-11.8-3.1,1.873a42.006,42.006,0,0,0-2.585-4.172,5.659,5.659,0,0,0-4.39-2.013A6.067,6.067,0,0,0,116.3,70.81a29.088,29.088,0,0,0-2.655,4.1l3.814,6.836-2.738,1.44Z" transform="translate(371.597 350.474)" />
                        <path d="M90.376,103.059l2.663,1.729L88.866,93.355,76.5,95.581l3.231,1.866c-1.148,1.779-1.75,2.715-1.8,2.809a6.581,6.581,0,0,0-.79,3.088q0,1.941,2.446,6.472c1.195,2.252,2.423,4.478,3.664,6.688q.289-2.158,3.241-7.121,1.932-3.158,3.88-6.325" transform="translate(380.129 344.898)" />
                        <path d="M86.954,122.73a6.074,6.074,0,0,0,1.685,3.92,4.749,4.749,0,0,0,3.558,1.977h10.356V116.4H89.61q-2.659,4.243-2.656,6.326" transform="translate(377.729 339.603)" />
                        <path d="M137.474,92.227,126.9,98.342l6.472,11.217h1.509q8.2,0,8.2-6.542,0-1.581-2.3-5.535-1.65-2.593-3.3-5.255" transform="translate(368.552 345.157)" />
                        <path d="M126.785,115.441h-4.958l.146-3.235-7.765,9.35,8.121,9.629v-3.733l3.67.14q2.947.14,6.4-4.962,2.378-3.879,4.68-7.764a15.952,15.952,0,0,1-5.323.649q-1.65,0-4.963-.079" transform="translate(371.469 340.568)" />
                      </g>
                    </g>
                  </svg>

                  <h2 class="p-strength__title"><span>REUSE</span>測量機器の買取</h2>
                  <p class="p-strength__text">
                    測量機器総合マーケットとして<br class="lap-onlyview">業界に精通。<br>高価買取の理由がここにあります。
                  </p>
                  <i></i>
                </div>
              </a>
            </article>

            <article class="p-strength__item">
              <a href="<?php echo esc_url(home_url()); ?>/rental" class="p-strength__item-inner">
                <div>
                  <svg class="icon" viewBox="0 0 56 56">
                    <g transform="translate(23350 -3730)">
                      <g transform="translate(-24009.873 3313.296)">
                        <path d="M124.157,117.125l10.5-9.818a.364.364,0,0,1,.059-.051,2.971,2.971,0,0,0-3.249.648l-.017.017-8.133,7.6a3.911,3.911,0,0,1,.842,1.605" transform="translate(572.649 341.535)" />
                        <path d="M77.742,127.577l6.473,6.473a2.363,2.363,0,0,0,2.677.467l2.63-1.237L79.109,122.867l-1.367,1.368a2.363,2.363,0,0,0,0,3.342" transform="translate(585.822 337.107)" />
                        <g transform="translate(665.83 416.704)">
                          <path d="M125.856,107.467a2.975,2.975,0,0,0-1.516.413,3.029,3.029,0,0,0-.589.455l-.017.017-11.306,10.566a3.951,3.951,0,0,1-3.881,3.259h-.168l-12.754-.564a.627.627,0,1,1,.06-1.254l12.754.563a2.694,2.694,0,0,0,2.786-2.357v-.656a2.7,2.7,0,0,0-2.442-2.353h-.017l-18.133-1.993a10.074,10.074,0,0,0-8.259,2.9l-1.221,1.22,10.869,10.869,16.685.446a6.236,6.236,0,0,0,4.656-1.827l14.615-14.614a2.988,2.988,0,0,0-2.121-5.093" transform="translate(-81.153 -75.292)" />
                          <path d="M115.95,77.22l-2.268-13.336a1.291,1.291,0,0,0-1.273-1.076H95.786a1.29,1.29,0,0,0-1.273,1.076L92.245,77.22l-.112,16.748a.6.6,0,0,0,.577.561L97,95.573c.733,0,1.973.593,1.973,1.326v3.523l10.252,1.084V96.9c0-.733,1.239-1.326,1.973-1.326l4.289-1.044a.6.6,0,0,0,.577-.561Zm-6.725,11.339H98.974V77.694h.969l.842,7.942a.645.645,0,0,0,.642.578h5.345a.647.647,0,0,0,.642-.578l.842-7.941h.969ZM104.1,74.72a2.5,2.5,0,1,1-2.5,2.5,2.5,2.5,0,0,1,2.5-2.5Zm5.772-5.032a.645.645,0,0,0-.646.643h0v6.037h-.969l-.965-8.051a.646.646,0,0,0-.642-.569h-.941V66.567H102.5v1.182h-1.066a.645.645,0,0,0-.641.579l-.843,8.042h-.969V70.332a.646.646,0,0,0-.646-.646l-1.325.022.486-4.557a.775.775,0,0,1,.771-.693h11.679a.776.776,0,0,1,.77.693l.483,4.535Z" transform="translate(-84.222 -62.808)" />
                        </g>
                      </g>
                    </g>
                  </svg>
                  <h2 class="p-strength__title"><span>RENTAL</span>測量機器のレンタル</h2>
                  <p class="p-strength__text">最新機器も1日から!<br>3次元計測機を<br class="lap-onlyview">試してみたい方にオススメ!</p>
                  <i></i>
                </div>
              </a>
            </article>

            <article class="p-strength__item">
              <a href="<?php echo esc_url(home_url()); ?>/repair" class="p-strength__item-inner">
                <div>
                  <svg class="icon" viewBox="0 0 56 56">
                    <g transform="translate(23258 -3732)">
                      <g transform="translate(-23257 3732)">
                        <g transform="translate(0 0)">
                          <path d="M130.658,89.643h-4.229a21.084,21.084,0,0,0-2.088-4.986l3.015-3.015a1.788,1.788,0,0,0,.082-2.527c-.026-.028-.054-.056-.082-.082l-5.744-5.742a1.788,1.788,0,0,0-2.527-.082c-.029.026-.056.054-.082.082l-3.015,3.015A21.99,21.99,0,0,0,111,74.274V70.045a1.832,1.832,0,0,0-1.809-1.856h-8.107A1.832,1.832,0,0,0,99.232,70v4.276a20.1,20.1,0,0,0-4.986,2.088L91.23,73.408a1.788,1.788,0,0,0-2.527-.083c-.028.027-.056.054-.082.083l-5.742,5.74a1.789,1.789,0,0,0-.081,2.528q.039.042.081.081L85.9,84.772a25.154,25.154,0,0,0-2.088,4.987H79.63a1.906,1.906,0,0,0-1.855,1.855v8.118a1.819,1.819,0,0,0,1.841,1.8h4.243a22.162,22.162,0,0,0,2.088,4.986l-3.009,3.015a1.789,1.789,0,0,0-.081,2.528q.039.042.081.081l5.741,5.74a1.787,1.787,0,0,0,2.527.083c.028-.026.056-.054.082-.083l3.016-3.017a20.388,20.388,0,0,0,3.247,1.45v-9.855a13.278,13.278,0,1,1,15.307,0v9.915a21.377,21.377,0,0,0,3.306-1.511l2.9,2.9a1.788,1.788,0,0,0,2.527.082c.029-.026.056-.054.083-.082l5.741-5.741a1.788,1.788,0,0,0,.082-2.527c-.026-.029-.054-.056-.082-.082l-2.957-3.015a21.968,21.968,0,0,0,2.03-4.986h4.175a1.832,1.832,0,0,0,1.855-1.809.438.438,0,0,0,0-.046V91.441a1.781,1.781,0,0,0-1.763-1.8c-.031,0-.061,0-.092,0" transform="translate(-77.774 -68.19)" />
                          <path d="M117.927,100.85a7.806,7.806,0,0,0-3.363-6.436.84.84,0,0,0-1.154.282.854.854,0,0,0-.122.413v3.885a3.073,3.073,0,0,1-6.145,0V95.168a.84.84,0,0,0-1.276-.7,7.881,7.881,0,0,0-3.362,6.433,7.783,7.783,0,0,0,4.349,6.958v17.455a3.363,3.363,0,0,0,6.726,0V107.806a7.785,7.785,0,0,0,4.35-6.958" transform="translate(-82.843 -73.54)" />
                        </g>
                      </g>
                    </g>
                  </svg>

                  <h2 class="p-strength__title"><span>REPAIR</span>測量機器の修理・点検</h2>
                  <p class="p-strength__text">測量機器の修理・点検は<br>JSIMAの認定事業者の<br class="lap-onlyview">当社まで!</p>
                  <i></i>
                </div>
              </a>
            </article>
          </div>
        </div>
      </div>
    </section> -->
    <section class="p-reason">
      <div class="l-spacer -sizel">
        <div class="l-container">
          <h2 class="c-heading -main -line">
            ジオマーケットが選ばえれる理由
          </h2>
          <ul class="c-card__list -listA">
            <li class="c-card__item -itemA">
              <span class="number">01</span>
              <h3 class="c-card__title -sub">確かな品質と技術力</h3>
              <p class="c-card__description">
                測量事業を牽引する<br>
                アイサンテクノロジーグループならではの<br>
                厳格な基準で、全機器を点検・整備。</p>
            </li>
            <li class="c-card__item -itemA">
              <span class="number">02</span>
              <h3 class="c-card__title -sub">豊富な品揃えと実績</h3>
              <p class="c-card__description">
                取引実績0,000台以上。人気の現行機種から<br>
                希少なモデルまで、お客様のニーズに<br>
                応える豊富なラインナップ。</p>
            </li>
            <li class="c-card__item -itemA">
              <span class="number">03</span>
              <h3 class="c-card__title -sub">安心のトータルサポート</h3>
              <p class="c-card__description">
                ご購入前の相談から、ご購入後の<br>
                修理・点検まで、専門知識豊富なスタッフが<br>
                ワンストップで対応します。</p>
            </li>

          </ul>
        </div>
      </div>
    </section>
    <section class="p-service">
      <div class="l-spacer -sizel">
        <div class="l-container">
          <h2 class="c-heading -main -line">
            サービス
          </h2>
          <ul class="c-card__list -listA">
            <li class="c-card__item -itemA">
              <div class="u-upper">
                <svg class="icon" viewBox="0 0 56 56">
                  <g transform="translate(23439 -3712)">
                    <g transform="translate(-23894.631 3294.593)">
                      <path d="M110.8,68.892H98.218a3.986,3.986,0,0,0-3.663,2.089L89.377,79.97l10.643,6.185,8.415-14.67a8.265,8.265,0,0,1,2.369-2.593" transform="translate(377.169 350.518)"></path>
                      <path d="M126.73,85.19l4.1-11.8-3.1,1.873a42.006,42.006,0,0,0-2.585-4.172,5.659,5.659,0,0,0-4.39-2.013A6.067,6.067,0,0,0,116.3,70.81a29.088,29.088,0,0,0-2.655,4.1l3.814,6.836-2.738,1.44Z" transform="translate(371.597 350.474)"></path>
                      <path d="M90.376,103.059l2.663,1.729L88.866,93.355,76.5,95.581l3.231,1.866c-1.148,1.779-1.75,2.715-1.8,2.809a6.581,6.581,0,0,0-.79,3.088q0,1.941,2.446,6.472c1.195,2.252,2.423,4.478,3.664,6.688q.289-2.158,3.241-7.121,1.932-3.158,3.88-6.325" transform="translate(380.129 344.898)"></path>
                      <path d="M86.954,122.73a6.074,6.074,0,0,0,1.685,3.92,4.749,4.749,0,0,0,3.558,1.977h10.356V116.4H89.61q-2.659,4.243-2.656,6.326" transform="translate(377.729 339.603)"></path>
                      <path d="M137.474,92.227,126.9,98.342l6.472,11.217h1.509q8.2,0,8.2-6.542,0-1.581-2.3-5.535-1.65-2.593-3.3-5.255" transform="translate(368.552 345.157)"></path>
                      <path d="M126.785,115.441h-4.958l.146-3.235-7.765,9.35,8.121,9.629v-3.733l3.67.14q2.947.14,6.4-4.962,2.378-3.879,4.68-7.764a15.952,15.952,0,0,1-5.323.649q-1.65,0-4.963-.079" transform="translate(371.469 340.568)"></path>
                    </g>
                  </g>
                </svg>
                <div>
                  <h2>測量機器のリユース販売</h2>
                  <p>高品質な中古機器を厳選整備してお届けします</p>
                </div>
              </div>
              <div class="u-lower">
                <ul>
                  <li>
                    <a href="">-リユース販売の特徴</a>
                  </li>
                  <li>
                    <a href="">-商品のリクエスト</a>
                  </li>
                </ul>
                <a href="">
                  製品ラインナップを見る
                </a>
              </div>
            </li>
            <li class="c-card__item -itemA">
              <div class="u-upper">
                <svg class="icon" width="78" height="84" viewBox="0 0 78 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_12_9633)">
                    <ellipse cx="36.3831" cy="41.2191" rx="36.3831" ry="35.7094" fill="#4C4C4C" />
                    <path d="M70.6578 62.3771V74.9415C70.6578 75.4043 70.474 75.8481 70.1468 76.1753C69.8196 76.5025 69.3758 76.6863 68.913 76.6863H61.5638C61.1009 76.6863 60.6571 76.5024 60.3297 76.1753C60.0022 75.8481 59.818 75.4044 59.8176 74.9415V62.3771H54.6189C54.3073 62.3768 54.0013 62.2932 53.7329 62.1349C53.4646 61.9765 53.2436 61.749 53.0927 61.4764C52.9418 61.2037 52.8666 60.8958 52.8749 60.5843C52.8832 60.2728 52.9748 59.9693 53.1401 59.7051L63.6028 43.0235C63.759 42.7758 63.9751 42.5714 64.2311 42.4293C64.4871 42.2871 64.7747 42.2117 65.0676 42.21C65.3604 42.2082 65.6492 42.2801 65.9069 42.4192C66.1647 42.5583 66.3832 42.7601 66.5425 43.0059L77.2721 59.6889C77.4421 59.9527 77.5378 60.2574 77.5492 60.571C77.5605 60.8846 77.4872 61.1953 77.3367 61.4706C77.1863 61.746 76.9644 61.9754 76.6944 62.1352C76.4243 62.295 76.116 62.3791 75.8023 62.3785L70.6578 62.3771Z" fill="#4C4C4C" stroke="white" stroke-width="2.20478" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M33.4069 62.4634V52.2098H23.0906V49.6675H33.4069V45.1515H23.0906V42.6001H31.9408L20 23.4728H25.0861L33.36 37.7121C34.3031 39.4679 34.8276 40.6356 35.6098 42.3352H35.819C36.6046 40.8463 37.3368 39.3045 38.2817 37.5522L46.9207 23.4707H52L39.2214 42.5984H47.9659V45.1498H37.7021V49.6657H47.9659V52.2167H37.7021V62.4707L33.4069 62.4634Z" fill="white" stroke="white" stroke-width="2.02128" stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_12_9633">
                      <rect width="78" height="78" fill="white" transform="translate(0 5.15039)" />
                    </clipPath>
                  </defs>
                </svg>
                <div>
                  <h2>測量機器の高価買取</h2>
                  <p>不要な機器を高額査定・スピード買取</p>
                </div>
              </div>
              <div class="u-lower">
                <ul>
                  <li>
                    <a href="">-買取実績の一例</a>
                  </li>
                  <li>
                    <a href="">-買い取りの流れ</a>
                  </li>
                </ul>
                <a href="">
                  サービスの詳細を見る
                </a>
              </div>
            </li>
            <li class="c-card__item -itemA">
              <div class="u-upper">
                <svg class="icon" viewBox="0 0 56 56">
                  <g transform="translate(23439 -3712)">
                    <g transform="translate(-23894.631 3294.593)">
                      <path d="M110.8,68.892H98.218a3.986,3.986,0,0,0-3.663,2.089L89.377,79.97l10.643,6.185,8.415-14.67a8.265,8.265,0,0,1,2.369-2.593" transform="translate(377.169 350.518)"></path>
                      <path d="M126.73,85.19l4.1-11.8-3.1,1.873a42.006,42.006,0,0,0-2.585-4.172,5.659,5.659,0,0,0-4.39-2.013A6.067,6.067,0,0,0,116.3,70.81a29.088,29.088,0,0,0-2.655,4.1l3.814,6.836-2.738,1.44Z" transform="translate(371.597 350.474)"></path>
                      <path d="M90.376,103.059l2.663,1.729L88.866,93.355,76.5,95.581l3.231,1.866c-1.148,1.779-1.75,2.715-1.8,2.809a6.581,6.581,0,0,0-.79,3.088q0,1.941,2.446,6.472c1.195,2.252,2.423,4.478,3.664,6.688q.289-2.158,3.241-7.121,1.932-3.158,3.88-6.325" transform="translate(380.129 344.898)"></path>
                      <path d="M86.954,122.73a6.074,6.074,0,0,0,1.685,3.92,4.749,4.749,0,0,0,3.558,1.977h10.356V116.4H89.61q-2.659,4.243-2.656,6.326" transform="translate(377.729 339.603)"></path>
                      <path d="M137.474,92.227,126.9,98.342l6.472,11.217h1.509q8.2,0,8.2-6.542,0-1.581-2.3-5.535-1.65-2.593-3.3-5.255" transform="translate(368.552 345.157)"></path>
                      <path d="M126.785,115.441h-4.958l.146-3.235-7.765,9.35,8.121,9.629v-3.733l3.67.14q2.947.14,6.4-4.962,2.378-3.879,4.68-7.764a15.952,15.952,0,0,1-5.323.649q-1.65,0-4.963-.079" transform="translate(371.469 340.568)"></path>
                    </g>
                  </g>
                </svg>

                <div>
                  <h2>測量機器のレンタル</h2>
                  <p>高品質な中古機器を厳選整備してお届けします</p>
                </div>
              </div>
              <div class="u-lower">
                <ul>
                  <li>
                    <a href="">-レンタルの特徴</a>
                  </li>
                  <li>
                    <a href="">-レンタルの流れ</a>
                  </li>
                </ul>
                <a href="">
                  <span> レンタル機器を見る</span><i></i>
                </a>
              </div>
            </li>
            <li class="c-card__item -itemA">
              <div class="u-upper">
                <svg class="icon" viewBox="0 0 56 56">
                  <g transform="translate(23258 -3732)">
                    <g transform="translate(-23257 3732)">
                      <g transform="translate(0 0)">
                        <path d="M130.658,89.643h-4.229a21.084,21.084,0,0,0-2.088-4.986l3.015-3.015a1.788,1.788,0,0,0,.082-2.527c-.026-.028-.054-.056-.082-.082l-5.744-5.742a1.788,1.788,0,0,0-2.527-.082c-.029.026-.056.054-.082.082l-3.015,3.015A21.99,21.99,0,0,0,111,74.274V70.045a1.832,1.832,0,0,0-1.809-1.856h-8.107A1.832,1.832,0,0,0,99.232,70v4.276a20.1,20.1,0,0,0-4.986,2.088L91.23,73.408a1.788,1.788,0,0,0-2.527-.083c-.028.027-.056.054-.082.083l-5.742,5.74a1.789,1.789,0,0,0-.081,2.528q.039.042.081.081L85.9,84.772a25.154,25.154,0,0,0-2.088,4.987H79.63a1.906,1.906,0,0,0-1.855,1.855v8.118a1.819,1.819,0,0,0,1.841,1.8h4.243a22.162,22.162,0,0,0,2.088,4.986l-3.009,3.015a1.789,1.789,0,0,0-.081,2.528q.039.042.081.081l5.741,5.74a1.787,1.787,0,0,0,2.527.083c.028-.026.056-.054.082-.083l3.016-3.017a20.388,20.388,0,0,0,3.247,1.45v-9.855a13.278,13.278,0,1,1,15.307,0v9.915a21.377,21.377,0,0,0,3.306-1.511l2.9,2.9a1.788,1.788,0,0,0,2.527.082c.029-.026.056-.054.083-.082l5.741-5.741a1.788,1.788,0,0,0,.082-2.527c-.026-.029-.054-.056-.082-.082l-2.957-3.015a21.968,21.968,0,0,0,2.03-4.986h4.175a1.832,1.832,0,0,0,1.855-1.809.438.438,0,0,0,0-.046V91.441a1.781,1.781,0,0,0-1.763-1.8c-.031,0-.061,0-.092,0" transform="translate(-77.774 -68.19)"></path>
                        <path d="M117.927,100.85a7.806,7.806,0,0,0-3.363-6.436.84.84,0,0,0-1.154.282.854.854,0,0,0-.122.413v3.885a3.073,3.073,0,0,1-6.145,0V95.168a.84.84,0,0,0-1.276-.7,7.881,7.881,0,0,0-3.362,6.433,7.783,7.783,0,0,0,4.349,6.958v17.455a3.363,3.363,0,0,0,6.726,0V107.806a7.785,7.785,0,0,0,4.35-6.958" transform="translate(-82.843 -73.54)"></path>
                      </g>
                    </g>
                  </g>
                </svg>
                <div>
                  <h2>修理・点検サービス</h2>
                  <p>JSIMA認定検査員による安心修理・定期点検</p>
                </div>
              </div>
              <div class="u-lower">
                <ul>
                  <li>
                    <a href="">-3つのポイント</a>
                  </li>
                  <li>
                    <a href="">-修理・点検の流れ</a>
                  </li>
                </ul>
                <a href="">
                  <span> サービスの詳細を見る</span><i></i>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="p-news">
      <div class="l-spacer -sizel">
        <div class="l-container">
          <h2 class="c-heading -main -line">お知らせ</h2>
          <div class="p-news__inner js_tab">
            <ul class="p-news__cat -main tab js_tab_btn">
              <li class="p-news__catItem is-tab"><span>全てのニュース</span></li>
              <li class="p-news__catItem"><span>キャンペーン情報</span></li>
              <li class="p-news__catItem"><span>入荷案内</span></li>
              <li class="p-news__catItem"><span>販売情報</span></li>
            </ul>
            <div class="js_tab_content">
              <div class="is-tab">
                <?php
                // 先頭表示投稿を取得
                $sticky_posts = get_option('sticky_posts');
                if (empty($sticky_posts)) {
                  $sticky_posts = array(0);
                }

                $sticky_query = new WP_Query(
                  array(
                    'post_type'      => 'post',
                    'posts_per_page' => 5,
                    'post__in'       => $sticky_posts,
                    'category__not_in' => array(57), // useful カテゴリのIDを除外
                    'orderby'        => 'date',
                    'order'          => 'desc',
                  )
                );

                $sticky_count = $sticky_query->found_posts;

                $normal_query = new WP_Query(
                  array(
                    'post_type'      => 'post',
                    'posts_per_page' => max(0, 5 - $sticky_count),
                    'post__not_in'   => $sticky_posts,
                    'category__not_in' => array(57), // useful カテゴリのIDを除外
                    'orderby'        => 'date',
                    'order'          => 'desc',
                  )
                );
                ?>
                <?php if ($sticky_query->have_posts() || $normal_query->have_posts()) : ?>
                  <ul class="p-news__list">
                    <?php if ($sticky_query->have_posts()) : ?>
                      <?php while ($sticky_query->have_posts()) : $sticky_query->the_post(); ?>
                        <li class="p-news__listItem aaa">
                          <a href="<?php the_permalink(); ?>">
                            <span>
                              <time><?php the_time('Y/m/d'); ?></time>
                              <span class="cat"><?php $cats = get_the_category();
                                                echo $cats[0]->cat_name; ?></span>
                              <h3><?php the_title(); ?></h3>
                            </span>
                            <i></i>
                          </a>
                        </li>
                      <?php endwhile;
                      wp_reset_postdata(); ?>
                    <?php endif; ?>
                    <?php if ($normal_query->have_posts()) : ?>
                      <?php while ($normal_query->have_posts()) : $normal_query->the_post(); ?>
                        <li class="p-news__listItem">
                          <a href="<?php the_permalink(); ?>">
                            <span>
                              <time><?php the_time('Y/m/d'); ?></time>
                              <span class="cat"><?php $cats = get_the_category();
                                                echo $cats[0]->cat_name; ?></span>
                              <h3><?php the_title(); ?></h3>
                            </span>
                            <i></i>
                          </a>
                        </li>
                      <?php endwhile;
                      wp_reset_postdata(); ?>
                    <?php endif; ?>
                  </ul>
                <?php else : ?>
                  <p>まだ投稿がありません。</p>
                <?php endif; ?>
              </div>
              <div>
                <?php
                $news_query = new WP_Query(
                  array(
                    'post_type'      => 'post', //投稿タイプの指定
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'desc',
                    'category_name' => 'campaign',
                  )
                );
                ?>
                <?php if ($news_query->have_posts()) : ?>
                  <ul class="p-news__list">
                    <?php while ($news_query->have_posts()) : ?>
                      <?php $news_query->the_post(); ?>
                      <li class="p-news__listItem">
                        <a href="<?php the_permalink(); ?>">
                          <span>
                            <time><?php the_time('Y/m/d'); ?></time><span class="cat"><?php $cats = get_the_category();
                                                                                      echo $cats[0]->cat_name; ?></span>
                            <h3><?php the_title(); ?></h3>
                          </span>
                          <i></i>
                        </a>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                <?php else : ?>
                  <p>まだ投稿がありません。</p>
                <?php wp_reset_postdata();
                endif; ?>
              </div>
              <div>
                <?php
                $news_query = new WP_Query(
                  array(
                    'post_type'      => 'post', //投稿タイプの指定
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'desc',
                    'category_name' => 'stock',
                  )
                );
                ?>
                <?php if ($news_query->have_posts()) : ?>
                  <ul class="p-news__list">
                    <?php while ($news_query->have_posts()) : ?>
                      <?php $news_query->the_post(); ?>
                      <li class="p-news__listItem">
                        <a href="<?php the_permalink(); ?>">
                          <span>
                            <time><?php the_time('Y/m/d'); ?></time><span class="cat"><?php $cats = get_the_category();
                                                                                      echo $cats[0]->cat_name; ?></span>
                            <h3><?php the_title(); ?></h3>
                          </span>
                          <i></i>
                        </a>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                <?php else : ?>
                  <p>まだ投稿がありません。</p>
                <?php wp_reset_postdata();
                endif; ?>
              </div>
              <div>
                <?php
                $news_query = new WP_Query(
                  array(
                    'post_type'      => 'post', //投稿タイプの指定
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'desc',
                    'category_name' => 'sale',
                  )
                );
                ?>
                <?php if ($news_query->have_posts()) : ?>
                  <ul class="p-news__list">
                    <?php while ($news_query->have_posts()) : ?>
                      <?php $news_query->the_post(); ?>
                      <li class="p-news__listItem">
                        <a href="<?php the_permalink(); ?>">
                          <span>
                            <time><?php the_time('Y/m/d'); ?></time><span class="cat"><?php $cats = get_the_category();
                                                                                      echo $cats[0]->cat_name; ?></span>
                            <h3><?php the_title(); ?></h3>
                          </span>
                          <i></i>
                        </a>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                <?php else : ?>
                  <p>まだ投稿がありません。</p>
                <?php wp_reset_postdata();
                endif; ?>
              </div>
            </div>
            <a href="<?php echo esc_url(home_url()); ?>/information" class="p-news__button"><span>すべて見る</span></a>
          </div>
        </div>
        <div class="l-container p-useful">
          <h2 class="c-heading -main -line">お役立ち情報</h2>
          <div class="p-news__inner js_tab">
            <ul class="p-news__cat -main tab js_tab_btn">
              <li class="p-news__catItem"><span>
                  測量機器の使い方やメンテナンス方法、<br class="pc-hide">
                  役立つノウハウを発信
                </span></li>
            </ul>
            <div class="js_tab_content">
              <div class="is-tab">
                <?php
                $news_query = new WP_Query(
                  array(
                    'post_type'      => 'post', //投稿タイプの指定
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'desc',
                    'category_name' => 'useful',
                  )
                );
                ?>
                <?php if ($news_query->have_posts()) : ?>
                  <ul class="p-news__list">
                    <?php while ($news_query->have_posts()) : ?>
                      <?php $news_query->the_post(); ?>
                      <li class="p-news__listItem">
                        <a href="<?php the_permalink(); ?>">
                          <span>
                            <time><?php the_time('Y/m/d'); ?></time>
                            <h3><?php the_title(); ?></h3>
                          </span>
                          <i></i>
                        </a>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                <?php else : ?>
                  <p>まだ投稿がありません。</p>
                <?php wp_reset_postdata();
                endif; ?>
              </div>
            </div>
            <a href="<?php echo esc_url(home_url()); ?>/useful" class="p-news__button"><span>すべて見る</span></a>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>