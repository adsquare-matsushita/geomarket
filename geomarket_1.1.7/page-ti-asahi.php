<?php get_header() ?>

<main>
  <div class="l-contents">
    <section class="l-under">
      <div class="pan-top">
        <?php get_template_part("/template-parts/pankuzu") ?>
      </div>

      <div class="l-container">
        <h2 class="c-heading -main -seek">測量機器を探す</h2>

        <?php get_template_part("/template-parts/seek/seek") ?>

        <div class="p-seek__under" id="lineup">
          <h2 class="c-heading -main buy-title">測量機器一覧</h2>


          <!-- url取得 -->
          <?php $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>

          <ul class="p-seek__rowList">
            <li class="p-seek__rowItem <?php if (strpos($url, 'order') == false) { {
                                            echo "is-active";
                                          }
                                        } ?>"><a href="<?php echo esc_url(home_url()); ?>/buy/ti#lineup">新着順</a></li>
            <li class="p-seek__rowItem <?php if (strpos($url, 'DESC') !== false) { {
                                            echo "is-active";
                                          }
                                        } ?>"><a href="<?php echo esc_url(add_query_arg(array('orderby' => 'meta_value_num', 'meta_value' => 'ti-asahi', 'meta_key' => 'nomal_price', 'order' => 'DESC'))); ?>#lineup">価格が高い順</a></li>
            <li class="p-seek__rowItem <?php if (strpos($url, 'ASC') !== false) { {
                                            echo "is-active";
                                          }
                                        } ?>"><a href="<?php echo esc_url(add_query_arg(array('orderby' => 'meta_value_num', 'meta_value' => 'ti-asahi', 'meta_key' => 'nomal_price', 'order' => 'ASC'))); ?>#lineup">価格が安い順</a></li>
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
            </div>

            <?php
            if (strpos($url, 'DESC') !== false) :
              // 価格が高い順
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $args = array(
                'post_type' => 'buy',
                'paged' => $paged,
                'posts_per_page' => 15,
                'meta_query' => array(
                  array(
                    'key' => 'maker',
                    'value' => 'ti-asahi',
                  )
                ),
                'meta_key' => 'sort_price',
                'orderby' => 'meta_value_num',
                'order' => 'desc'
              );

            elseif (strpos($url, 'ASC') !== false) :
              // 価格が安い順
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $args = array(
                'post_type' => 'buy',
                'paged' => $paged,
                'posts_per_page' => 15,
                'meta_query' => array(
                  array(
                    'key' => 'maker',
                    'value' => 'ti-asahi',
                  )
                ),
                'meta_key' => 'sort_price',
                'orderby' => 'meta_value_num',
                'order' => 'asc'
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
                'meta_query' => array(
                  array(
                    'key' => 'maker',
                    'value' => 'ti-asahi',
                  )
                ),
              );

            endif;

            $news_query = new WP_Query($args);
            ?>

            <p class="result">
              <?php my_result_count(); ?>
            </p>
          </div>
          <!-- /.p-seek__infoWrap -->


          <ul class="p-seek__list -card">
            <?php if ($news_query->have_posts()) : ?>
              <?php while ($news_query->have_posts()) : ?>
                <?php $news_query->the_post(); ?>

                <?php get_template_part("/template-parts/loop") ?>

              <?php endwhile; ?>
          </ul>
        <?php else : ?>
          <p>まだ投稿がありません。</p>
        <?php endif; ?>


        <div class="pagenation">
          <?php
          if ($news_query->max_num_pages > 1) {
            echo paginate_links(array(
              // 'base' => get_pagenum_link(1) . '%_%',
              'format' => 'page/%#%/',
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
      <!-- /.l-container -->
      <div class="pan-bottom">
        <?php get_template_part("/template-parts/pankuzu") ?>
      </div>
    </section>
    <!-- /.l-under -->
  </div>
  <!-- /.l-contents -->
</main>

<?php get_footer(); ?>
