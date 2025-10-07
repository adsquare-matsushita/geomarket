<?php get_header() ?>

<main>
  <div class="l-contents">
    <section class="l-under -sub">
      <div class="p-hero -beige -sub">
        <div class="l-container">
          <div class="p-hero-sub__inner">
            <div class="p-hero-sub__block">
              <h2 class="c-heading -subL -seek">
                測量機器を探す
              </h2>

              <h3>測量機器リユース販売</h3>
              <!-- <p class="c-heading__h3Detail">ーJSIMA認定検査員による点検済安心機器・オンライン専門店だからこその安心価格ー</p> -->
              <p class="p-hero-sub__text ">
                GEOMARKETでは、最新の3Dスキャナから信頼性の高いモータードライブトータルステーション、さらには定評のあるワンマンセットまで、品質に妥協することなく、幅広い機器を取り揃えています。貴社のニーズに合わせて最適な商品をお選びいただき、業務効率化とコスト削減を実現してみませんか？
              </p>
              <div class="p-hero-sub__buttonWrap">
                <a href="#lineup" class="c-button -orange -sub -arrow-white">ラインナップを見る</a>
              </div>
            </div>
            
            <div class="p-hero-sub__block">
              <figure class="p-hero-sub__image">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/under/mv-sub04.png" alt="測量機器を扱う人のイラスト">
              </figure>
              <div class="p-hero-sub__buttonWrap">
                <a href="#lineup" class="c-button -orange -sub -arrow-white">ラインナップを見る</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php //セクションナビゲーター 上 ?>
      <div class="p-rental__cat">
        <ul class="p-rental__cat-list">
          <li><a href="#lineup"><span>測量機器一覧</span></a></li>
          <li><a href="#future"><span>リユース販売の特徴</span></a></li>
          <li><a href="#request"><span>商品のリクエスト</span></a></li>
          <li><a href="#faq"><span>よくあるご質問</span></a></li>
        </ul>
      </div>
      <?php //パンくず ?>
      <?php get_template_part('template-parts/pankuzu'); ?>
      <section class="l-spacer -bottom -seek">
        <div class="l-container">
          <?php //検索機能セクション ?>
          <?php get_template_part("/template-parts/seek/seek") ?>
          <?php //一覧表示 ?>
          <div class="p-seek__under"  id="lineup">
            <h2 class="c-heading -main -subLine">測量機器一覧</h2>
            <?php //url取得＋投稿の有無分岐
              $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
            ?>
              <?php //ソートボタン ?>
              <ul class="p-seek__rowList">
                <li class="p-seek__rowItem <?php if (strpos($url, 'order') == false) { {
                                                echo "is-active";
                                              }
                                            } ?>"><a href="<?php echo esc_url(home_url()); ?>/buy#lineup">新着順</a></li>
                <li class="p-seek__rowItem <?php if (strpos($url, 'DESC') !== false) { {
                                                echo "is-active";
                                              }
                                            } ?>"><a href="<?php echo esc_url(add_query_arg(array('orderby' => 'meta_value_num', 'order' => 'DESC'))); ?>#lineup">価格が高い順</a></li>
                <li class="p-seek__rowItem <?php if (strpos($url, 'ASC') !== false) { {
                                                echo "is-active";
                                              }
                                            } ?>"><a href="<?php echo esc_url(add_query_arg(array('orderby' => 'meta_value_num', 'meta_key' => 'nomal_price', 'order' => 'ASC'))); ?>#lineup">価格が安い順</a></li>
              </ul>
              <?php //ソートボタン ?>
              <div class="p-seek__infoWrap">
                <?php //並び表示切替アイコン ?>
                <div class="p-seek__rowWrap">

                  <ul class="p-seek__rowIcons">
                    <li class="p-seek__rowIcon iconA">
                      <svg class="icon-card" width="32" height="32" viewBox="0 0 32 32">
                        <g transform="translate(0.191)">
                          <g transform="translate(0)">
                            <g transform="translate(-0.191)" fill="#e86d21" stroke="#e86d21" stroke-width="1">
                              <rect width="9" height="9" stroke="none" />
                              <rect x="0.5" y="0.5" width="8" height="8" fill="none" />
                            </g>

                            <g transform="translate(11.809)" fill="#e86d21" stroke="#e86d21" stroke-width="1">
                              <rect width="8" height="9" stroke="none" />
                              <rect x="0.5" y="0.5" width="7" height="8" fill="none" />
                            </g>
                            <g transform="translate(22.809)" fill="#e86d21" stroke="#e86d21" stroke-width="1">
                              <rect width="9" height="9" stroke="none" />
                              <rect x="0.5" y="0.5" width="8" height="8" fill="none" />
                            </g>
                          </g>
                          <g transform="translate(0 11.459)">
                            <g transform="translate(-0.191 -0.459)" fill="#e86d21" stroke="#e86d21" stroke-width="1">
                              <rect width="9" height="9" stroke="none" />
                              <rect x="0.5" y="0.5" width="8" height="8" fill="none" />
                            </g>
                            <g transform="translate(11.809 -0.459)" fill="#e86d21" stroke="#e86d21" stroke-width="1">
                              <rect width="8" height="9" stroke="none" />
                              <rect x="0.5" y="0.5" width="7" height="8" fill="none" />
                            </g>
                            <g transform="translate(22.809 -0.459)" fill="#e86d21" stroke="#e86d21" stroke-width="1">
                              <rect width="9" height="9" stroke="none" />
                              <rect x="0.5" y="0.5" width="8" height="8" fill="none" />
                            </g>
                          </g>
                          <g transform="translate(0 22.919)">
                            <g transform="translate(-0.191 0.081)" fill="#e86d21" stroke="#e86d21" stroke-width="1">
                              <rect width="9" height="9" stroke="none" />
                              <rect x="0.5" y="0.5" width="8" height="8" fill="none" />
                            </g>
                            <g transform="translate(11.809 0.081)" fill="#e86d21" stroke="#e86d21" stroke-width="1">
                              <rect width="8" height="9" stroke="none" />
                              <rect x="0.5" y="0.5" width="7" height="8" fill="none" />
                            </g>
                            <g transform="translate(22.809 0.081)" fill="#e86d21" stroke="#e86d21" stroke-width="1">
                              <rect width="9" height="9" stroke="none" />
                              <rect x="0.5" y="0.5" width="8" height="8" fill="none" />
                            </g>
                          </g>
                        </g>
                      </svg>
                    </li>

                    <li class="p-seek__rowIcon iconB is-active">
                      <svg class="icon-media" width="32" height="32" viewBox="0 0 32 32">
                        <g transform="translate(0.266)">
                          <g transform="translate(-0.266)" fill="#fff" stroke="#e86d21" stroke-width="1">
                            <rect width="32" height="9" stroke="none" />
                            <rect x="0.5" y="0.5" width="31" height="8" fill="none" />
                          </g>
                          <g transform="translate(-0.266 11)" fill="#fff" stroke="#e86d21" stroke-width="1">
                            <rect width="32" height="9" stroke="none" />
                            <rect x="0.5" y="0.5" width="31" height="8" fill="none" />
                          </g>
                          <g transform="translate(-0.266 23)" fill="#fff" stroke="#e86d21" stroke-width="1">
                            <rect width="32" height="9" stroke="none" />
                            <rect x="0.5" y="0.5" width="31" height="8" fill="none" />
                          </g>
                        </g>
                      </svg>
                    </li>
                  </ul>

                </div>

                <?php //URLを判別してクエリ分岐 $news_query
                  if (strpos($url, 'DESC') !== false) :
                    // 価格が高い順
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                      'post_type' => 'buy',
                      'paged' => $paged,
                      'posts_per_page' => 15,
                      'meta_key' => 'sort_price',
                      'orderby' => 'meta_value_num',
                      'order' => 'desc',
                    );

                  elseif (strpos($url, 'ASC') !== false) :
                    // 価格が安い順
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                      'post_type' => 'buy',
                      'paged' => $paged,
                      'posts_per_page' => 15,
                      'meta_key' => 'sort_price',
                      'orderby' => 'meta_value_num',
                      'order' => 'asc',
                    );

                  else :
                    // 新着順
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                      'post_type' => 'buy',
                      'paged' => $paged,
                      'posts_per_page' => 15,
                      'orderby' => 'date',
                      'order' => 'desc',

                    );

                  endif;
                  $news_query = new WP_Query($args);
                ?>

                <?php //検索数＋表示件数表示 ?>
                <p class="result">
                  <?php my_result_count(); ?>
                </p>
              </div>
              <ul class="p-seek__list -card">
                <?php //投稿有無分岐 ?>
                <?php if ($news_query->have_posts()) : ?>
                  <?php //$news_query の記事呼び出し ?>
                  <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                    <li class="p-seek__listItem -card">
                      <a class="c-card" href="<?php the_permalink(); ?>">
                        <div class="c-card__head">
                          <figure class="c-card__thumbnail">
                            <?php if (get_field('main_image')) : ?>
                              <img src="<?php the_field('main_image'); ?>">
                            <?php else : ?>
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-picture.png" alt="商品画像を準備中です。">
                            <?php endif; ?>
                          </figure>

                          <?php

                          $goods = get_field('select_goods'); //カテゴリーの取得

                          $days = 14;  //日付取得の宣言
                          $today = date_i18n('U');
                          $entry_day = get_the_time('U');
                          $keika = date('U', ($today - $entry_day)) / 86400;
                          ?>

                          <?php if ($days > $keika) : ?>
                            <p class="effect <?php {
                                                echo "-new";
                                              } ?>">
                              <?php {
                                echo "NEW";
                              }   ?>
                            </p>
                          <?php endif; ?>


                          <p class="effect <?php if ($goods == "oppo") {
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
                          </p>

                        </div>


                        <div class="c-card__body">
                          <div class="c-card__body-inner">
                            <span class="maker">
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
                              <?php elseif ($maker == 'ti') : ?>
                                <?php echo "TIアサヒ" ?>
                              <?php elseif ($maker == 'other') : ?>
                                <?php echo "その他" ?>
                              <?php endif; ?>
                            </span>
                            <h3 class="c-card__title -top"><?php the_title(); ?></h3>
                            <div class="cat-wrap">
                              <?php
                              if ($terms = get_the_terms($post->ID, 'keyword')) {
                                foreach ($terms as $term) {
                                  echo ('<span class="category"> #');
                                  echo esc_html($term->name);
                                  echo ('</span>');
                                }
                              }
                              ?>
                            </div>
                            <?php
                            // ソート用価格上書き用（コメント外さないで）
                            // $priceNormal = null;
                            // $priceCampaign = null;
                            // $priceCampaign = intval( get_field( 'cam_price' ) );
                            // $priceNormal = intval( get_field( 'nomal_price' ) );
                            // if( $priceCampaign != 0 ){
                            //   update_field('sort_price', $priceCampaign);
                            // }else{
                            //   update_field('sort_price', $priceNormal);
                            // }
                            ?>
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
                          </div>
                          <!-- /.c-card__body-inner -->
                          <p class="button">VIEW DETAIL</p>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; ?>
                <?php else : ?>
                  <p>まだ投稿がありません。</p>
                <?php endif; ?>
              </ul>

          <?php //ページネーション ?>
          <div class="pagenation">
            <?php
            if ($news_query->max_num_pages > 1) {
              echo paginate_links(array(
                'format' => 'page/%#%/#lineup',
                'current' => max(1, $paged),
                'mid_size' => 1,
                'total' => $news_query->max_num_pages,
                'prev_text' => '<i class="fa fa-caret-left"></i>',
                'next_text' => '<i class="fa fa-caret-right"></i>'

              ));
            }
            wp_reset_postdata(); ?>
          </div>
          </div>
        </div>
      </section>
      <?php //セクションナビゲーター 下 ?>
      <div class="p-rental__cat">
        <ul class="p-rental__cat-list">
          <li><a href="#lineup"><span>測量機器一覧</span></a></li>
          <li><a href="#future"><span>リユース販売の特徴</span></a></li>
          <li><a href="#request"><span>商品のリクエスト</span></a></li>
          <li><a href="#faq"><span>よくあるご質問</span></a></li>
        </ul>
      </div>
      <?php get_template_part("/template-parts/buy/section/feature") ?>
      <?php get_template_part("/template-parts/buy/section/request") ?>
      <?php get_template_part("/template-parts/buy/section/faq") ?>
      <div class="pan-bottom">
        <?php get_template_part("/template-parts/pankuzu") ?>
      </div>      
    </section>
    <?php get_template_part('template-parts/tour-button'); ?>
  </div>
</main>

<?php get_footer(); ?>
