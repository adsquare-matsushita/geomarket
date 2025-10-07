<!-- url取得 -->
<?php $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<?php get_header() ?>

<main>
  <div class="l-contents">
    <section class="l-under">
      <div class="pan-top">
        <?php get_template_part("/template-parts/pankuzu") ?>
      </div>

      <div class="l-container">
        <h2 class="c-heading -main -seek">
          測量機器を探す
        </h2>

        <?php get_template_part("/template-parts/seek/seek") ?>

        <div class="p-seek__under" id="lineup">
          <h2 class="c-heading -main buy-title">測量機器一覧</h2>

          <ul class="p-seek__rowList">
            <li class="p-seek__rowItem 
              <?php if (strpos($url, 'DESC') === false && strpos($url, 'ASC') === false) { echo "is-active"; } ?>">
              <?php 
                $url2 = remove_query_arg(array('orderby', 'order'), $url);
              ?>
              <a href="<?php echo esc_url($url2); ?>#lineup">
                新着順
              </a>
            </li>
            <li class="p-seek__rowItem 
              <?php if (strpos($url, 'DESC') !== false) { {echo "is-active";}} ?>">
              <?php 
                $url3_1 = add_query_arg(array('orderby' => 'meta_value_num', 'order' => 'DESC'));
              ?>
              <a href="<?php echo esc_url($url3_1); ?>#lineup">
                価格が高い順
              </a>
            </li>
            <li class="p-seek__rowItem <?php if (strpos($url, 'ASC') !== false) { {echo "is-active";}} ?>">
              <?php 
                $url4_1 = add_query_arg(array('orderby' => 'meta_value_num', 'order' => 'ASC'));
              ?>
              <a href="<?php echo esc_url($url4_1); ?>#lineup">
                価格が安い順
              </a>
            </li>
          </ul>

          <div class="p-seek__infoWrap">
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
                <li class="p-seek__rowIcon iconB  is-active">
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
            </div><!-- /.p-seek__rowWrap -->
            <?php
                // URLパラメータからフィルターを取得
                $filter = isset($_GET['filter']) ? $_GET['filter'] : 'fill01';                
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                // フィルターに応じて価格範囲を設定
                switch ($filter) {
                    case 'fill01':
                        $min_price = 1000;
                        $max_price = 299999;
                        break;
                    case 'fill02':
                        $min_price = 300000;
                        $max_price = 499999;
                        break;
                    case 'fill03':
                        $min_price = 500000;
                        $max_price = 799999;
                        break;
                    case 'fill04':
                        $min_price = 800000;
                        $max_price = 999999;
                        break;
                    case 'fill05':
                        $min_price = 1000000;
                        $max_price = 99999999999;
                        break;
                    // 他のフィルター条件を追加
                    default:
                        $min_price = 1000;
                        $max_price = 299999;
                        break;
                }
              if (strpos($url, 'DESC') !== false) :// 価格が高い順
                $args = array(
                  'post_type' => 'buy', //カスタム投稿タイプ
                  'paged' => $paged,
                  'posts_per_page' => 15,
                  // 'meta_key' => 'sort_price',
                  'orderby' => 'meta_value_num',
                  'order' => 'desc',
                  'meta_query' => array(
                    'relation' => 'OR',
                    array(
                      'key' => 'cam_price',
                      'value' => array($min_price, $max_price),
                      'compare' => 'BETWEEN',
                      'type' => 'NUMERIC'
                    ),
                    array(
                      'key' => 'nomal_price',
                      'value' => array($min_price, $max_price),
                      'compare' => 'BETWEEN',
                      'type' => 'NUMERIC'
                    )
                  )
                );

              elseif (strpos($url, 'ASC') !== false) :// 価格が安い順
                $args = array(
                  'post_type' => 'buy', //カスタム投稿タイプ
                  'paged' => $paged,
                  'posts_per_page' => 15,
                  'meta_key' => 'sort_price',
                  'orderby' => 'meta_value_num',
                  'order' => 'asc',
                  'meta_query' => array(
                    'relation' => 'OR',
                    array(
                      'key' => 'cam_price',
                      'value' => array($min_price, $max_price),
                      'compare' => 'BETWEEN',
                      'type' => 'NUMERIC'
                    ),
                    array(
                      'key' => 'nomal_price',
                      'value' => array($min_price, $max_price),
                      'compare' => 'BETWEEN',
                      'type' => 'NUMERIC'
                    )
                  )
                );
              else :// 新着順
                $args = array(
                  'post_type' => 'buy', //カスタム投稿タイプ
                  'paged' => $paged,
                  'posts_per_page' => 15,
                  'orderby' => 'date',
                  'order' => 'desc',
                  'meta_query' => array(
                    'relation' => 'OR',
                    array(
                      'key' => 'cam_price',
                      'value' => array($min_price, $max_price),
                      'compare' => 'BETWEEN',
                      'type' => 'NUMERIC'
                    ),
                    array(
                      'key' => 'nomal_price',
                      'value' => array($min_price, $max_price),
                      'compare' => 'BETWEEN',
                      'type' => 'NUMERIC'
                    )
                  )
                );
              endif;
              $tax_query = new WP_Query($args); 
            ?>
            <p class="result">
              <?php my_result_count3(); ?>
            </p>
          </div><!-- /.p-seek__infoWrap -->

          <?php if ($tax_query->have_posts()) : ?>
            <ul class="p-seek__list -card">
              <?php while ($tax_query->have_posts()) : ?>
                <?php $tax_query->the_post(); ?>

                <?php get_template_part("/template-parts/loop") ?>


              <?php endwhile; ?>
            </ul>
          <?php else : ?>
            <p>まだ投稿がありません。</p>
          <?php endif; ?>

          <div class="pagenation">
            <?php global $wp_rewrite;
            $paginate_base = get_pagenum_link(1);
            if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
              $paginate_format = '';
              $paginate_base = add_query_arg('paged', '%#%#lineup');
            } else {
              $paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
                user_trailingslashit('page/%#%/', 'paged');;
              $paginate_base .= '%_%#lineup';
            }
            echo paginate_links(array(
              'prev_text' => '<span class="screen-reader-text">前へ</span>',
              'next_text' => '<span class="screen-reader-text">次へ</span>',
              'base' => $paginate_base,
              'format' => $paginate_format,
              'total' => $tax_query->max_num_pages,
              'mid_size' => 5,
              'current' => ($paged ? $paged : 1),
            ));
            ?>

          </div>
        </div>
      </div>
      <!-- /.l-container -->
    </section>
    <!-- /.l-under -->
  </div>
  <!-- /.l-contents -->
</main>

<?php get_footer(); ?>
