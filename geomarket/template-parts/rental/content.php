<main>
  <div class="l-contents">
    <section class="l-under -sub ">
      <div class="p-hero -beige -sub">
        <div class="l-container">
          <div class="p-hero-sub__inner">
            <div class="p-hero-sub__block">
              <h2 class="c-heading -subL -rental">測量機器のレンタル</h2>
              <p class="p-hero-sub__text">
                i-Constructionや測量調査をはじめ、様々な業界で3Dの需要が急増しており、 最新技術の導入が成功の鍵となります。
                ジオマーケットでは、最新の3Dレーザスキャナや杭ナビなどの最新機器をはじめ、幅広い測量機器を取り揃えたレンタルサービスを提供しています。必要な期間だけ、皆さまの業務に合わせてレンタルが可能です。
              </p>
              <div class="p-hero-sub__buttonWrap -rental">
                <a href="<?php echo esc_url(home_url()); ?>/rental/contact/" class="c-button -orange -sub">レンタルのお見積もり</a>
                <a href="#lineup" class="c-button -gray -sub">ラインナップを見る</a>
              </div>
            </div>
            <div class="p-hero-sub__block">
              <figure class="p-hero-sub__image -rental">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/mv-sub03.png" alt="測量機器を扱う人のイラスト">
              </figure>
              <div class="p-hero-sub__buttonWrap -rental">
                <a href="<?php echo esc_url(home_url()); ?>/rental/contact/" class="c-button -orange -sub">レンタルのお見積もり</a>
                <a href="#lineup" class="c-button -gray -sub">ラインナップを見る</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="p-rental__cat">
        <ul class="p-rental__cat-list">
          <li><a href="#lineup"><span>レンタル機器一覧</span></a></li>
          <li><a href="#future"><span>レンタルの特徴</span></a></li>
          <li><a href="#flow"><span>レンタルの流れ</span></a></li>
          <li><a href="#faq"><span>よくあるご質問</span></a></li>
        </ul>
      </div>
      <?php get_template_part('template-parts/pankuzu'); ?>
      <section class="p-rental__search">

        <?php get_template_part("/template-parts/seek/seek") ?>

      </section>
      <?php //section開始タグ分岐 ?>
        <?php if (is_post_type_archive('rental')) : ?>
          <section class="l-spacer" id="lineup">
        <?php else : ?>
          <section class="l-spacer -bottom" id="lineup">
        <?php endif; ?>
      <?php //section開始タグ分岐 ?>
        <div class="l-container">
          <h2 class="c-heading -main -line rental-title">レンタル機器ラインナップ</h2>
          <p class="p-sub__description ">
            各種メーカーの多種多用な最新機器をラインナップしており、業務に合わせて最適な機器を最短1日からレンタルいただけます。<br>
            JSIMA認定を受けているジオマーケットだからこそ、校正・検査済みの機器を安心してご利用いただけます。
          </p>
          <ul class="p-seek__list -card -rental">
            <?php $url = $_SERVER['REQUEST_URI']; ?>
            <?php //クエリ分岐 ?>
              <!--
              topconの場合-->
              <?php if (strpos($url, 'topcon') !== false) : ?>
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args =  array(
                  'post_type' => 'rental',
                  'posts_per_page' => 10, // 表示件数
                  'paged' => $paged,
                  'meta_query' => array(
                    'relation' => 'AND',
                    array(
                      'key' => 'maker',  // カスタムフィールド（メタキー）の名前
                      'value' => 'topcon',
                      'compare' => '=',  // 比較演算子
                    ),
                  ),
                );
                $news_query = new WP_Query($args);
                ?>
                <!--
              sokkiaの場合-->
              <?php elseif (strpos($url, 'sokkia') !== false) : ?>
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args =  array(
                  'post_type' => 'rental',
                  'posts_per_page' => 10, // 表示件数
                  'paged' => $paged,
                  'meta_query' => array(
                    'relation' => 'AND',
                    array(
                      'key' => 'maker',  // カスタムフィールド（メタキー）の名前
                      'value' => 'sokkia',
                      'compare' => '=',  // 比較演算子
                    ),
                  ),
                );
                $news_query = new WP_Query($args);
                ?>

                <!--
              leicaの場合-->
              <?php elseif (strpos($url, 'leica') !== false) : ?>
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args =  array(
                  'post_type' => 'rental',
                  'posts_per_page' => 10, // 表示件数
                  'paged' => $paged,
                  'meta_query' => array(
                    'relation' => 'AND',
                    array(
                      'key' => 'maker',  // カスタムフィールド（メタキー）の名前
                      'value' => 'leica',
                      'compare' => '=',  // 比較演算子
                    ),
                  ),
                );
                $news_query = new WP_Query($args);
                ?>

                <!--
              pentaxの場合-->
              <?php elseif (strpos($url, 'pentax') !== false) : ?>
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args =  array(
                  'post_type' => 'rental',
                  'posts_per_page' => 10, // 表示件数
                  'paged' => $paged,
                  'meta_query' => array(
                    'relation' => 'AND',
                    array(
                      'key' => 'maker',  // カスタムフィールド（メタキー）の名前
                      'value' => 'pentax',
                      'compare' => '=',  // 比較演算子
                    ),
                  ),
                );
                $news_query = new WP_Query($args);
                ?>

                <!--
              ニコンの場合-->
              <?php elseif (strpos($url, 'nikon') !== false) : ?>
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args =  array(
                  'post_type' => 'rental',
                  'posts_per_page' => 10, // 表示件数
                  'paged' => $paged,
                  'meta_query' => array(
                    'relation' => 'AND',
                    array(
                      'key' => 'maker',  // カスタムフィールド（メタキー）の名前
                      'value' => 'nikon',
                      'compare' => '=',  // 比較演算子
                    ),
                  ),
                );
                $news_query = new WP_Query($args);
                ?>

                <!--
              ニコントリンブルの場合-->
              <?php elseif (strpos($url, 'trimble') !== false && strpos($url, 'nikon') === false) : ?>
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args =  array(
                  'post_type' => 'rental',
                  'posts_per_page' => 10, // 表示件数
                  'paged' => $paged,
                  'meta_query' => array(
                    'relation' => 'AND',
                    array(
                      'key' => 'maker',  // カスタムフィールド（メタキー）の名前
                      'value' => 'trimble',
                      'compare' => '=',  // 比較演算子
                    ),
                  ),
                );
                $news_query = new WP_Query($args);
                ?>

                <!--
              TIアサヒの場合-->
              <?php elseif (strpos($url, 'ti-asahi') !== false) : ?>
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args =  array(
                  'post_type' => 'rental',
                  'posts_per_page' => 10, // 表示件数
                  'paged' => $paged,
                  'meta_query' => array(
                    'relation' => 'AND',
                    array(
                      'key' => 'maker',  // カスタムフィールド（メタキー）の名前
                      'value' => 'ti-asahi',
                      'compare' => '=',  // 比較演算子
                    ),
                  ),
                );
                $news_query = new WP_Query($args);
                ?>


                <!--
              その他メーカーの場合-->
              <?php elseif (strpos($url, 'other') !== false) : ?>
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args =  array(
                  'post_type' => 'rental',
                  'posts_per_page' => 10, // 表示件数
                  'paged' => $paged,
                  'meta_query' => array(
                    'relation' => 'AND',
                    array(
                      'key' => 'maker',  // カスタムフィールド（メタキー）の名前
                      'value' => 'other',
                      'compare' => '=',  // 比較演算子
                    ),
                  ),
                );
                $news_query = new WP_Query($args);
                ?>

                <!--
              その他-->
              <?php else : ?>
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args =  array(
                  'post_type' => 'rental',
                  'posts_per_page' => 10, // 表示件数
                  'paged' => $paged,
                  'meta_query' => array(
                    'relation' => 'AND',
                    array(
                      'key' => 'maker',  // カスタムフィールド（メタキー）の名前
                      'value' =>
                      array('topcon', 'sokkia', 'leica', 'pentax',  'nikon', 'trimble', 'ti-asahi', 'other'),  // ラジオボタンで選択した値
                      'compare' => 'IN',  // 比較演算子
                    ),
                  ),
                );


                $news_query = new WP_Query($args);
                ?>
              <?php endif; ?>
            <?php //クエリ分岐 ?>
            <?php if ($news_query->have_posts()) : ?>
              <?php while ($news_query->have_posts()) : ?>
                <?php $news_query->the_post();
                ?>
                <li class="p-seek__listItem -card">
                  <a href="<?php the_permalink(); ?>" class=" c-card" >
                    <div class="c-card__head -rental">
                      <figure class="c-card__thumbnail -rental">
                        <?php if (get_field('main_image')) : ?>
                          <img src="<?php the_field('main_image'); ?>">
                        <?php else : ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-picture.png" alt="商品画像を準備中です。">
                        <?php endif; ?>
                      </figure>

                      <?php $goods = get_field('select_goods'); //カテゴリーの取得
                      ?>

                      <p class="effect <?php if ($goods == "rental") {
                                          echo "-rental";
                                        } elseif ($goods == "no") {
                                          echo "";
                                        } ?>">
                        <?php if ($goods == "rental") {
                          echo "貸し出し中";
                        } ?>
                      </p>
                    </div>
                    <div class="c-card__body">
                      <div class="c-card__body-inner">
                        <?php get_template_part("/template-parts/rental/custom/maker") ?>
                        <h3 class="c-card__title -top"><?php the_title(); ?></h3>

                        <div class="desc">
                          <?php get_template_part("/template-parts/rental/custom/description") ?>
                        </div>
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
          <div class="pagenation">
            <?php
              if ($news_query->max_num_pages > 1) {
                echo paginate_links(array(
                  // 'base' => get_pagenum_link(1) . '%_%',
                  'format' => 'page/%#%/#lineup',
                  'current' => max(1, $paged),
                  'mid_size' => 1,
                  'total' => $news_query->max_num_pages,
                  'prev_text' => '<i class="fa fa-caret-left"></i>',
                  'next_text' => '<i class="fa fa-caret-right"></i>',
                ));
              }
              wp_reset_postdata(); ?>
          </div>

        </div>
      </section>
      <div class="p-rental__cat">
        <ul class="p-rental__cat-list">
          <li><a href="#lineup"><span>レンタル機器一覧</span></a></li>
          <li><a href="#future"><span>レンタルの特徴</span></a></li>
          <li><a href="#flow"><span>レンタルの流れ</span></a></li>
          <li><a href="#faq"><span>よくあるご質問</span></a></li>
        </ul>
      </div>
      <?php get_template_part("/template-parts/rental/section/feature") ?>
      <?php get_template_part("/template-parts/rental/section/flow") ?>
      <?php get_template_part("/template-parts/rental/section/faq") ?>
    </section>
    <?php get_template_part('template-parts/tour-button'); ?>
    <div class=" l-under__buttonWrap">
      <a href="<?php echo esc_url(home_url()); ?>/rentalcontact/" class="c-button -orange -sub -arrow-white">レンタルのお申込みはこちら</a>
    </div>
  </div>
</main>
